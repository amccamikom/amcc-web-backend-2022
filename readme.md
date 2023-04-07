# AMCC BACKEND
## Pelatihan ke-7
Ini adalah hasil akhir dari praktikum di pelatihan minggu ketujuh. <br>
[Modul Pelatihan](https://medium.com/amcc-amikom/mvc-laravel-study-case-dc2789a66d88)

## Cara Menggunakan
1. Clone repositori ini ke folder kerja dengan nama _forum_diskusi_ atau bebas
    ```
    git clone -b pelatihan7 https://github.com/amccamikom/amcc-web-backend-2022 forum_diskusi
    ```
2. Import sql file jika belum membuat database dan tabel untuk praktikum
3. Copy file `.env.example` menjadi `.env`
4. Ubah konfirgurasi file .env untuk mengatur alamat database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama database
    DB_USERNAME=root
    DB_PASSWORD=
    ```
4. Buka terminal di folder kerja, lalu install depedency menggunakan perintah `composer install`
5. Masih di dalam terminal, buat APP_KEY menggunakan perintah `php artisan key:generate`
6. Jalankan Laravel dengan perintah `php artisan serve`
