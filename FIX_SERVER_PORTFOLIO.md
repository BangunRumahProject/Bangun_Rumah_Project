# 🔧 Perbaiki Gambar Portfolio di Server

## 🎯 **Tujuan:**
Memperbaiki tampilan gambar portfolio di website yang sudah di-hosting di Hostinger.

## 🔍 **Masalah:**
- Gambar portfolio tidak muncul di halaman portfolio
- Error 404 untuk file gambar
- Database server tidak sesuai dengan file gambar yang ada

## ✅ **Langkah-langkah Perbaikan di Server:**

### **1. SSH ke Server**
```bash
ssh u733624421@bangunrumahproject.com
```

### **2. Navigate ke Directory Laravel**
```bash
cd /home/u733624421/domains/bangunrumahproject.com/laravel-app
```

### **3. Pull Perubahan Terbaru**
```bash
git pull origin main
```

### **4. Install Dependencies**
```bash
composer install --no-dev --optimize-autoloader
```

### **5. Update Database dengan Data yang Benar**
```bash
php artisan portfolio:update-server-db
```

### **6. Create Storage Link**
```bash
php artisan storage:link-custom
```

### **7. Set Permissions**
```bash
chmod -R 775 storage bootstrap/cache
chmod -R 644 public_html/img/
```

### **8. Clear Cache**
```bash
php artisan optimize:clear
php artisan config:clear
php artisan view:clear
```

## 📁 **Pastikan File Gambar Ada di Server:**

### **Cek File Gambar:**
```bash
ls -la storage/app/public/portfolios/
```

### **File yang Harus Ada:**
```
storage/app/public/portfolios/
├── 6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png
├── MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg
├── SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg
└── YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg
```

### **Jika File Tidak Ada:**
1. Buka **Hostinger File Manager**
2. Navigate ke: `/storage/app/public/portfolios/`
3. Download file gambar yang ada
4. Upload ke folder yang sama

## 🔧 **Troubleshooting:**

### **Jika Masih Error 404:**
```bash
# Cek storage link
ls -la public_html/storage

# Jika tidak ada link, buat manual:
ln -s /home/u733624421/domains/bangunrumahproject.com/laravel-app/storage/app/public /home/u733624421/domains/bangunrumahproject.com/public_html/storage
```

### **Jika Database Error:**
```bash
# Cek koneksi database
php artisan tinker
# Test: DB::connection()->getPdo();

# Clear cache lagi
php artisan optimize:clear
```

### **Jika Permission Error:**
```bash
# Set permission yang benar
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
chown -R u733624421:u733624421 storage/
chown -R u733624421:u733624421 bootstrap/cache/
```

## 🧪 **Testing:**

### **1. Cek Website:**
- Buka: `https://bangunrumahproject.com`
- Klik menu "Portfolio"
- Cek apakah gambar muncul

### **2. Cek URL Gambar Langsung:**
- `https://bangunrumahproject.com/storage/portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png`
- `https://bangunrumahproject.com/storage/portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg`

### **3. Cek Error Log:**
```bash
tail -f storage/logs/laravel.log
```

## 📋 **Command Lengkap (Copy-Paste):**

```bash
# Login ke server
ssh u733624421@bangunrumahproject.com

# Navigate dan pull
cd /home/u733624421/domains/bangunrumahproject.com/laravel-app
git pull origin main

# Install dan setup
composer install --no-dev --optimize-autoloader
php artisan portfolio:update-server-db
php artisan storage:link-custom
chmod -R 775 storage bootstrap/cache
php artisan optimize:clear

# Test
curl -I https://bangunrumahproject.com/storage/portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png
```

## 🎯 **Hasil yang Diharapkan:**
- Gambar portfolio muncul di halaman portfolio
- Detail portfolio menampilkan gambar dengan benar
- Tidak ada error 404 untuk file gambar
- Website berfungsi normal

## 📞 **Jika Masih Bermasalah:**
1. Cek error log: `tail -f storage/logs/laravel.log`
2. Cek file permission: `ls -la storage/app/public/portfolios/`
3. Cek storage link: `ls -la public_html/storage`
4. Restart web server jika perlu
