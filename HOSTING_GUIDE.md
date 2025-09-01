# Panduan Hosting Laravel di Hostinger

## Masalah Gambar Portfolio Tidak Muncul

### Penyebab:
1. Storage link belum dibuat
2. Path gambar salah
3. File gambar tidak ada di storage

### Solusi:

#### 1. Buat Storage Link
```bash
# Di server via SSH
cd /home/u733624421/domains/bangunrumahproject.com/laravel-app
php artisan storage:link-custom
```

#### 2. Jika Command Tidak Bisa, Buat Manual
```bash
# Di public_html, buat symbolic link
ln -s /home/u733624421/domains/bangunrumahproject.com/laravel-app/storage/app/public /home/u733624421/domains/bangunrumahproject.com/public_html/storage
```

#### 3. Upload Gambar Portfolio
- Upload gambar portfolio ke folder: `/home/u733624421/domains/bangunrumahproject.com/laravel-app/storage/app/public/portfolios/`
- Pastikan permission folder: `chmod -R 775 storage`

#### 4. Update Database
- Pastikan field `image` di database berisi path relatif: `portfolios/nama-file.jpg`

#### 5. Clear Cache
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

## Konfigurasi .env Server

```env
APP_NAME=BangunRumahProject
APP_ENV=production
APP_KEY=base64:... # generate dengan php artisan key:generate
APP_DEBUG=false
APP_URL=https://bangunrumahproject.com
APP_PUBLIC_PATH=/home/u733624421/domains/bangunrumahproject.com/public_html

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=u733624421_bangunrumah
DB_USERNAME=u733624421_bangunadmin
DB_PASSWORD=Marcom@2025

SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=fikryataya@gmail.com
MAIL_PASSWORD=cuopfdyzwjveevrc
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=fikryataya@gmail.com
MAIL_FROM_NAME="Konsultasi Website"
```

## Struktur Folder di Server

```
/home/u733624421/domains/bangunrumahproject.com/
├── laravel-app/           # Root Laravel (di luar public_html)
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   │   └── app/
│   │       └── public/
│   │           └── portfolios/  # Upload gambar portfolio di sini
│   ├── vendor/
│   └── .env
└── public_html/          # Web root
    ├── index.php         # Edit path ke laravel-app
    ├── .htaccess
    ├── build/            # Asset Vite
    └── storage -> ../laravel-app/storage/app/public  # Symbolic link
```

## Troubleshooting

### Error 500
1. Cek error log: `tail -f storage/logs/laravel.log`
2. Pastikan vendor ter-install: `composer install --no-dev`
3. Set permission: `chmod -R 775 storage bootstrap/cache`

### Gambar Tidak Muncul
1. **Cek storage link**: `ls -la public_html/storage`
2. **Cek file gambar**: `ls -la storage/app/public/portfolios/`
3. **Cek permission**: `chmod -R 775 storage`
4. **Cek karakter khusus**: File dengan nama `Image(2).png` bisa bermasalah
5. **Rename file bermasalah**: Jalankan `php rename_images.php` di lokal
6. **Upload ulang**: Pastikan semua file ter-upload ke server

### Vite Manifest Error
1. Pastikan folder `build` ada di `public_html/build/`
2. Jalankan: `npm run build` di lokal, upload hasilnya
3. Set `APP_PUBLIC_PATH` di .env

## Command Penting

```bash
# Generate APP_KEY
php artisan key:generate

# Clear cache
php artisan optimize:clear

# Create storage link
php artisan storage:link-custom

# Check problematic images
php artisan images:check

# Fix portfolio images
php artisan portfolio:fix-images

# Set permission
chmod -R 775 storage bootstrap/cache
chmod -R 644 public_html/img/

# Install dependencies
composer install --no-dev --optimize-autoloader
```

## Upload Gambar Portfolio

1. **Via Admin Panel**: Upload melalui form admin
2. **Manual Upload**: 
   - Upload ke `/laravel-app/storage/app/public/portfolios/`
   - Update database dengan path: `portfolios/nama-file.jpg`

## Testing

1. Buka: `https://bangunrumahproject.com`
2. Cek halaman portfolio
3. Cek form konsultasi
4. Cek admin panel

## Backup

```bash
# Backup database
mysqldump -u u733624421_bangunadmin -p u733624421_bangunrumah > backup.sql

# Backup files
tar -czf backup-files.tar.gz laravel-app/
```
