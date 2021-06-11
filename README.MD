![result](https://github.com/zikriramdani/laravel3/blob/main/screencapture1.png)

![result](https://github.com/zikriramdani/laravel3/blob/main/screencapture2.png)

![result](https://github.com/zikriramdani/laravel3/blob/main/screencapture3.png)

![result](https://github.com/zikriramdani/laravel3/blob/main/screencapture4.png)

<b>Aplikasi Penggalangan Dana</b><br>
<hr>
<p>
    Aplikasi ini mempunyai fitur : 
</p>
<ul>
    <li>Membuat Program Pendonasian</li>
    <li>Berdonasi</li>
    <li>Konfirmasi Pendonasian</li>
    <li>Membuat Laporan Perkembangan setelah ada yang berdonasi</li>
    <li>Membuat Kategori</li>
    <li>Konfirmasi Admin</li>
    <li>Melaporkan Program Mencurigakan</li>
</ul>

 <p>Aplikasi ini dibuat menggunakan Framework Laravel 5 dengan tambahan package-package lain, seperti :<br><br>
 1) Bootstrap 4,<br>
 2) SweetAlert,<br>
 3) Datatables,<br>
 4) File Manager Tiny MCE<br>
 5) Dll.</p>

Cara menjalankan Aplikasi : 
- Simpan Project di /htdocs (kalau pake xampp)
- import database (crowdfunding.sql)
- jalankan "composer install" di dalam terminal/cmd
- jalankan "npm install" di dalam terminal/cmd
- buka folder project, copykan .env.example, menjadi .env
- isi DB_DATABASE, DB_USERNAME, DB_PASSWORD, sesuaikan dengan settingan database kamu
- di dalam directory project buka terminal, ketikan "php artisan key:generate"
- di dalam directory project buka terminal, ketikan "php artisan serve"
- buka browser, ketikan url "localhost:8000"

<hr>
<h5>Account Admin : <h5>
username : admin@mail.com<br>
password : 12345678

Note: Di database, di tabel user ada field "role", valuenya ubah jadi 1

<h5>Account User : <h5>
username : user@mail.com<br>
password : 12345678