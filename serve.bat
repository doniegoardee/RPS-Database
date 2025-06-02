@echo off
cd /d "C:\xampp\htdocs\database-rps"
start http://127.0.0.1:8000
php artisan db:backup
php artisan serve
