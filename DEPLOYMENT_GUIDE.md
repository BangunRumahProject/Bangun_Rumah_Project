# Deployment Guide - Fix Image Display Issue

## Problem

Images uploaded via admin panel are not displaying on portfolio pages due to missing symbolic link between `public/storage` and `storage/app/public`.

## Solution Steps

### 1. SSH to Your Server via PuTTY

```bash
ssh your-username@your-server-ip
```

### 2. Navigate to Your Project Directory

```bash
cd /path/to/your/project
```

### 3. Create Symbolic Link for Storage

```bash
php artisan storage:link
```

### 4. Verify the Link Was Created

```bash
ls -la public/
```

You should see: `storage -> ../storage/app/public`

### 5. Set Proper Permissions

```bash
chmod -R 755 storage/
chmod -R 755 public/storage/
```

### 6. Clear Laravel Caches

```bash
php artisan config:clear
php artisan view:clear
php artisan cache:clear
```

### 7. Test Image Display

-   Go to your portfolio page
-   Check if images are now displaying
-   Check admin panel if images are visible

## Alternative Manual Method (if artisan storage:link fails)

### Create Symbolic Link Manually

```bash
cd public/
ln -s ../storage/app/public storage
```

### Verify Manual Link

```bash
ls -la public/storage
```

## Troubleshooting

### If Images Still Don't Show:

1. Check file permissions: `ls -la storage/app/public/portfolios/`
2. Check symbolic link: `ls -la public/storage`
3. Verify .htaccess is working: Check server error logs
4. Test direct access: Try accessing `/storage/portfolios/filename.jpg`

### Common Issues:

-   **Permission Denied**: Run `chmod -R 755 storage/`
-   **Symbolic Link Broken**: Remove and recreate with `php artisan storage:link`
-   **Apache/Nginx Configuration**: Ensure mod_rewrite is enabled

## File Structure After Fix

```
your-project/
├── public/
│   └── storage -> ../storage/app/public
├── storage/
│   └── app/
│       └── public/
│           └── portfolios/
│               └── image1.jpg
└── .htaccess (with new rules)
```

## Test URLs

After fixing, these should work:

-   `https://bangunrumahproject.com/storage/portfolios/image1.jpg`
-   `https://bangunrumahproject.com/storage/app/public/portfolios/image1.jpg`

## Notes

-   The .htaccess file has been updated with comprehensive image handling rules
-   All existing code remains intact
-   This fix handles multiple image path scenarios
-   No database changes required
