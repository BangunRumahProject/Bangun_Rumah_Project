<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonsultasiMail;

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
            'kebutuhan' => 'nullable|string',
        ]);

        // Kirim email ke kamu
        Mail::to('bangunrumahproject@gmail.com')->send(new KonsultasiMail($validated));

        // Balik ke halaman dengan pesan sukses
        return back()->with('success', 'Konsultasi berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
