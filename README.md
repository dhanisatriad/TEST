## Jawaban test 2
database: test2.sql 
## Installasi
Buat database, salin file .env.example dan ganti menjadi .env, edit file .env agar sesuai dengan konfigurasi env anda, lalu jalankan
Create a database, copy the ```.env.example``` file and rename it to ```.env```, edit the ```.env``` file to match your environment configuration, then execute 
```bash
composer update && npm install && npm execute build && php artisan migrate:fresh --seed && php artisan key:generate && php artisan storage:link
```
jawaban test 1,3,4,5 -> soal jawaban 1 3 4 5

