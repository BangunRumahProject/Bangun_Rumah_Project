<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonsultasiMail;
use App\Mail\KonsultasiKonfirmasiMail;

class KonsultasiController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'email' => 'required|email',
            'kategori' => 'required|string|max:255',
            'alamat_lahan' => 'nullable|string|max:255',
            'luas_tanah' => 'nullable|numeric|min:0',
            'kebutuhan' => 'nullable|string',
        ]);

        try {
            // Kirim email ke admin
            Mail::to('bangunrumahproject@gmail.com')->send(new KonsultasiMail($validated));

            // Kirim email konfirmasi ke user
            Mail::to($validated['email'])->send(new KonsultasiKonfirmasiMail($validated));

            // Redirect dengan pesan sukses dan data untuk popup
            return redirect()->back()->with([
                'success' => 'Konsultasi berhasil dikirim! Kami akan segera menghubungi Anda.',
                'popup_data' => [
                    'nama' => $validated['nama'],
                    'kategori' => $validated['kategori'],
                    'timestamp' => now()->format('d M Y H:i')
                ]
            ]);

        } catch (\Exception $e) {
            // Jika ada error, redirect dengan pesan error
            return redirect()->back()->with([
                'error' => 'Maaf, terjadi kesalahan saat mengirim konsultasi. Silakan coba lagi atau hubungi kami langsung.',
                'old_input' => $request->all()
            ])->withInput();
        }
    }
}
