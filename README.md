<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

## Cat Patron
<p>Cat Patron adalah sebuah website untuk melaporkan dan menyelamatkan kucing yang terlantar di tempat tinggal kamu. Di website ini juga terdapat edukasi dalam merawat kucing dan juga membuka program adopsi untuk kucing yang sudah sehat dari terakhir di selamatkan.</p>

Demo website: https://sib-catpatron.000webhostapp.com/
untuk admin page tinggal tambahkan admin/dashboard pada akhir url website : https://sib-catpatron.000webhostapp.com/admin/dashboard

## Instalasi Local

1.  Download Repo ini dalam bentuk zip
2.  Extract file zip ke dalam direktori htdocs pada <b>XAMPP<b>,<br>misal htdocs/Capstone
3.  Melalui terminal, cd ke direktori <code>Capstone</code>
4.  (Sesuai pentunjuk instalasi) Pada terminal, berikan perintah <code>composer install</code>
5.  Composer akan menginstall dependency paket dari source code hingga selesai.
6.  Jalankan perintah <code>php artisan</code>, untuk menguji apakah perintah artisan bekerja
7.  Buat database baru (kosong) pada mysql (via phpmyadmin)
8.  Copy dan rename .env.example menjadi .env
9.  Kembali ke terminal, <code>php artisan key:generate</code>
10. Setting koneksi database di file .env <b>(DB_DATABASE, DB_USERNAME, DB_PASSWORD)<b>
11. Jalankan perintah <code>php artisan migrate</code>Jika di cek di phpmyadmin, seharusnya tabel sudah muncul
12. Jalankan perintah <code>php artisan migrate:fresh --seed</code>
13. Setelah selesai, buka aplikasi melalui browser, misal : <code>http://localhost/Capstone/public</code>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
# Cat Patron
