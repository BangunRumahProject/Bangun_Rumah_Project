<h2>Konsultasi Baru Masuk</h2>
<p><strong>Nama:</strong> {{ $data['nama'] }}</p>
<p><strong>No HP:</strong> {{ $data['no_hp'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Kategori:</strong> {{ $data['kategori'] }}</p>
<p><strong>Luas Tanah:</strong> {{ $data['luas_tanah'] ? $data['luas_tanah'] . ' m²' : '-' }}</p>
<p><strong>Kebutuhan:</strong> {{ $data['kebutuhan'] ?? '-' }}</p>
