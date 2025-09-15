<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Konsultasi - Bangun Rumah Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #fbbf24;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fbbf24;
            margin-bottom: 10px;
        }
        .success-icon {
            font-size: 48px;
            color: #10b981;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #374151;
            margin-bottom: 5px;
        }
        .info-value {
            color: #6b7280;
        }
        .cta-button {
            display: inline-block;
            background-color: #fbbf24;
            color: #000000;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 14px;
        }
        .contact-info {
            background-color: #fef3c7;
            border: 1px solid #fbbf24;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">🏠 Bangun Rumah Project</div>
            <div class="success-icon">✅</div>
            <h1 style="color: #10b981; margin: 0;">Konsultasi Berhasil Dikirim!</h1>
        </div>

        <p>Halo <strong>{{ $data['nama'] }}</strong>,</p>
        
        <p>Terima kasih telah mengirimkan konsultasi kebutuhan Anda kepada tim Bangun Rumah Project. Kami telah menerima permintaan Anda dan akan segera menghubungi untuk membahas lebih lanjut.</p>

        <div class="info-box">
            <h3 style="color: #374151; margin-top: 0;">Detail Konsultasi:</h3>
            
            <div class="info-item">
                <div class="info-label">Nama:</div>
                <div class="info-value">{{ $data['nama'] }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Kategori Layanan:</div>
                <div class="info-value">{{ $data['kategori'] }}</div>
            </div>
            
            @if(isset($data['alamat_lahan']) && $data['alamat_lahan'])
            <div class="info-item">
                <div class="info-label">Alamat Lahan:</div>
                <div class="info-value">{{ $data['alamat_lahan'] }}</div>
            </div>
            @endif
            
            @if(isset($data['luas_tanah']) && $data['luas_tanah'])
            <div class="info-item">
                <div class="info-label">Luas Tanah:</div>
                <div class="info-value">{{ $data['luas_tanah'] }} m²</div>
            </div>
            @endif
            
            @if(isset($data['kebutuhan']) && $data['kebutuhan'])
            <div class="info-item">
                <div class="info-label">Kebutuhan:</div>
                <div class="info-value">{{ $data['kebutuhan'] }}</div>
            </div>
            @endif
            
            <div class="info-item">
                <div class="info-label">Waktu Pengiriman:</div>
                <div class="info-value">{{ now()->setTimezone(config('app.admin_timezone', config('app.timezone')))->format('d M Y H:i') }} ({{ config('app.admin_timezone', config('app.timezone')) }})</div>
            </div>
        </div>

        <div class="contact-info">
            <h3 style="color: #92400e; margin-top: 0;">📞 Langkah Selanjutnya:</h3>
            <ul style="color: #92400e; padding-left: 20px;">
                <li>Tim kami akan menghubungi Anda dalam <strong>24 jam</strong></li>
                <li>Kami akan mengajukan beberapa pertanyaan untuk memahami kebutuhan Anda lebih detail</li>
                <li>Setelah itu, kami akan memberikan penawaran dan timeline pengerjaan</li>
            </ul>
        </div>

        <p>Jika Anda memiliki pertanyaan mendesak atau ingin berbicara langsung dengan tim kami, silakan hubungi melalui:</p>

        <div style="text-align: center;">
            <a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20{{ $data['nama'] }}%20sudah%20mengirim%20konsultasi%20untuk%20{{ $data['kategori'] }}%20dan%20ingin%20bertanya%20lebih%20lanjut" 
               class="cta-button" target="_blank">
                💬 Chat WhatsApp
            </a>
        </div>

        <p><strong>Tim Bangun Rumah Project</strong><br>
        📧 bangunrumahproject@gmail.com<br>
        📱 +62 853-3335-3609<br>
        📍 Bumi Punggolaka Indah, Blok B18, Lalodati, Kec. Puuwatu, Kota Kendari, Sulawesi Tenggara 93112</p>

        <div class="footer">
            <p>Email ini dikirim otomatis. Mohon tidak membalas email ini.</p>
            <p>&copy; {{ date('Y') }} Bangun Rumah Project. Semua hak dilindungi.</p>
        </div>
    </div>
</body>
</html>
