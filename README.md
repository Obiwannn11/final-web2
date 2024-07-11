<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Cara Instalasi

1. Clone repositori ini (branch mats) : ``` git clone -b mats https://github.com/Obiwannn11/final-web2.git ```
2. Masuk ke direktori proyek ``` cd final-web2 ```
3. Buka proyek dengan Visual Studio Code (atau editor pilihan Anda): ```code .```
4. Install dependencies:

   a.  ```  composer install ```

   b.   ``` npm install  ```
 
6. Salin file .env.example menjadi ```.env``` dan sesuaikan konfigurasi database
7. Generate key aplikasi:
   
     ``` php artisan key:generate ```

8. Migrasi database:

     ``` php artisan migrate ```

9. Jalankan server lokal:

    a.  ``` npm run dev ```

    b. ``` php artisan serve ```

