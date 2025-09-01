# Panduan Deploy ke Server Hostinger

## Masalah Gambar Portfolio - SOLUSI LENGKAP

### Penyebab Masalah:
1. **Database lokal berbeda** dengan database server
2. **File gambar tidak ter-upload** ke server
3. **Path gambar tidak sesuai** antara lokal dan server

### Solusi Lengkap:

#### 1. Persiapan Lokal
```bash
# Update database lokal sesuai server
php artisan portfolio:update-from-server

# Download gambar dari server (jika perlu)
php download_server_images.php

# Build assets
npm run build

# Commit dan push ke GitHub
git add .
git commit -m "Fix portfolio images with server data"
git push origin main
```

#### 2. Upload ke Server
```bash
# SSH ke server
ssh u733624421@bangunrumahproject.com

# Navigate ke directory
cd /home/u733624421/domains/bangunrumahproject.com/laravel-app

# Pull perubahan
git pull origin main

# Install dependencies
composer install --no-dev --optimize-autoloader
```

#### 3. Setup Server
```bash
# Generate APP_KEY (jika belum)
php artisan key:generate

# Create storage link
php artisan storage:link-custom

# Update database dengan data server
php artisan portfolio:update-from-server

# Set permissions
chmod -R 775 storage bootstrap/cache
chmod -R 644 public_html/img/

# Clear cache
php artisan optimize:clear
php artisan config:clear
php artisan view:clear
```

#### 4. Upload Build Assets
```bash
# Di lokal, copy folder build ke public_html
# Upload folder public/build ke public_html/build di server
```

#### 5. Konfigurasi .env Server
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

#### 6. Testing
1. Buka: `https://bangunrumahproject.com`
2. Cek halaman portfolio
3. Cek gambar portfolio muncul
4. Cek form konsultasi
5. Cek admin panel

## Troubleshooting

### Jika Gambar Masih Tidak Muncul:
```bash
# Cek storage link
ls -la public_html/storage

# Cek file gambar
ls -la storage/app/public/portfolios/

# Cek permission
chmod -R 775 storage/

# Update database dengan data server
php artisan portfolio:update-from-server

# Clear cache
php artisan optimize:clear
```

### File Gambar yang Harus Ada di Server:
```
storage/app/public/portfolios/
├── 6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png
├── MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg
├── SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg
└── YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg
```

### Jika Error 500:
```bash
# Cek error log
tail -f storage/logs/laravel.log

# Clear cache
php artisan optimize:clear
```

### Jika Vite Manifest Error:
```bash
# Pastikan folder build ada
ls -la public_html/build/

# Jika tidak ada, upload dari lokal
# Copy folder public/build ke public_html/build
```

## File yang Diperlukan di Server

### Struktur Folder:
```
/home/u733624421/domains/bangunrumahproject.com/
├── laravel-app/           # Root Laravel
│   ├── storage/app/public/portfolios/  # Gambar portfolio
│   └── .env              # Konfigurasi
└── public_html/          # Web root
    ├── build/            # Asset Vite (upload dari lokal)
    └── storage -> ../laravel-app/storage/app/public  # Symbolic link
```

### Command Penting:
```bash
# Update database dengan data server
php artisan portfolio:update-from-server

# Generate images
php artisan portfolio:generate-images

# Check images
php artisan portfolio:fix-images

# Create storage link
php artisan storage:link-custom

# Clear cache
php artisan optimize:clear
```

## Backup

```bash
# Backup database
mysqldump -u u733624421_bangunadmin -p u733624421_bangunrumah > backup.sql

# Backup files
tar -czf backup-files.tar.gz laravel-app/
```

## Langkah Cepat untuk Server:

```bash
# 1. Pull perubahan
git pull origin main

# 2. Install dependencies
composer install --no-dev --optimize-autoloader

# 3. Update database
php artisan portfolio:update-from-server

# 4. Create storage link
php artisan storage:link-custom

# 5. Set permissions
chmod -R 775 storage bootstrap/cache

# 6. Clear cache
php artisan optimize:clear
```
