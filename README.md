# Transaction App
### Update
Silahkan kunjungi https://transaction.explorasi.com untuk mencoba demo nya. Lakukan register dan login.

Anda juga bisa install versi mobile Progressive Website App (PWA) di ponsel anda dengan cara :
1. Buka Google Chrome Browser (Rekomendasi)
2. Buka link berikut ini https://transaction.explorasi.com/login
   **note : wajib /login , jika tidak ada tidak support PWA** 
4. setelah terbuka ketuk titik tiga di sebelah kanan atas. pilih **Tambahkan ke layar utama** lalu klik **install**
5. Tunggu hingga selesai
## Deskripsi

Transaction App adalah aplikasi manajemen transaksi yang dirancang untuk mengelola data transaksi penjualan, pelanggan, dan produk dengan antarmuka yang user-friendly dan fitur analisis yang powerful.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki perangkat lunak berikut yang terinstal:

- **PHP versi 8.0 atau lebih tinggi**: PHP adalah bahasa pemrograman server-side yang digunakan untuk menjalankan Laravel versi 10.
- **Composer**: Manajer dependensi untuk PHP yang digunakan untuk menginstal paket-paket yang diperlukan.
- **MySQL atau PostgreSQL**: Database server untuk menyimpan data aplikasi. Pilih sesuai dengan preferensi atau kebutuhan Anda.
- **Git**: Sistem kontrol versi yang digunakan untuk mengelola dan menyinkronkan kode sumber.
- **Node.js**: Diperlukan untuk membangun aset frontend dan mendukung Progressive Web App (PWA), jika diperlukan.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal proyek di server lokal Anda:

1. **Kloning Repositori**

   Kloning repositori ke direktori lokal Anda:

   ```bash
   git clone https://github.com/dwiarmandhani/transactionapp.git
2. **Masuk ke Direktori Proyek**

   Pindah ke direktori proyek yang baru saja Anda kloning:

   ```bash
   cd transactionapp
3. **Install dependencies**

    Gunakan Composer untuk menginstal semua dependensi PHP yang diperlukan. Pastikan Composer sudah terinstal di sistem Anda. Jalankan perintah berikut di terminal atau command prompt         Anda:
    
    ```bash
    composer install

4. **Instal Dependensi Node.js (Opsional)**

    Jika proyek Anda menggunakan PWA atau memerlukan build aset frontend, Anda juga perlu menginstal dependensi Node.js. Pastikan Node.js dan npm sudah terinstal di sistem Anda.

   ```bash
    npm install
5. **Konfigurasi Lingkungan**

   Salin file .env.example ke .env dan sesuaikan konfigurasi sesuai dengan pengaturan lokal Anda:
    
        ```bash
        Salin kode
        cp .env.example .env

    Buka file .env menggunakan editor teks dan ubah pengaturan database, aplikasi, dan konfigurasi lainnya sesuai kebutuhan Anda. Contoh konfigurasi database:

        ```
        plaintext
        Salin kode
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nama_database
        DB_USERNAME=nama_pengguna
        DB_PASSWORD=kata_sandi
6. **Generate Key Aplikasi**

    Jalankan perintah berikut untuk menghasilkan kunci aplikasi baru. Ini akan memperbarui file .env dengan key baru yang digunakan untuk enkripsi:

        ```bash
        Salin kode
        php artisan key:generate

7. **Migrasi Database**

Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database. Pastikan database yang ditentukan di file .env sudah ada dan dapat diakses:

    ```bash
    Salin kode
    php artisan migrate

8. **Seed Database (Opsional)**

Jika Anda memiliki seeder untuk data awal, jalankan perintah berikut untuk mengisinya ke dalam database. Seeder ini biasanya berisi data dummy yang berguna untuk pengembangan atau pengujian:

    ```bash
    Salin kode
    php artisan db:seed

9. **Build Aset Frontend (Opsional)**

Jika proyek Anda menggunakan PWA dan Anda perlu membangun aset frontend, jalankan perintah berikut untuk membangun aset dengan npm. Ini akan mengkompilasi dan mengoptimalkan file CSS, JavaScript, dan lainnya:

    ```bash
    Salin kode
    npm run dev

Untuk build production, gunakan:

    ```bash
    Salin kode
    npm run prod

10. Jalankan Server

Jalankan server pengembangan Laravel untuk melihat aplikasi di browser:

    ```bash
    Salin kode
    php artisan serve
Buka browser Anda dan akses aplikasi di http://localhost:8000.
