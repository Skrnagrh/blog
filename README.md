# Blog - Proyek Laravel

Selamat datang di repositori proyek Blog! Proyek ini adalah sebuah platform blog berbasis web yang dibangun dengan menggunakan framework Laravel. Platform ini dirancang untuk memudahkan penulisan, publikasi, dan manajemen konten blog dengan antarmuka yang ramah pengguna.

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://github.com/Skrnagrh/blog/raw/main/public/img/home/post-slide-1.jpg" class="d-block w-100" alt="Screenshot 1">
    </div>
    <div class="carousel-item">
      <img src="https://github.com/Skrnagrh/blog/raw/main/public/public/img/home/post-slide-2.jpg" class="d-block w-100" alt="Screenshot 2">
    </div>
    <div class="carousel-item">
      <img src="https://github.com/Skrnagrh/blog/raw/main/public/public/img/home/post-slide-3.jpg" class="d-block w-100" alt="Screenshot 3">
    </div>
    <!-- Tambahkan gambar-gambar lain di sini -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


## Fitur Utama

- **Pengelolaan Posting:** Platform ini memungkinkan Anda untuk membuat, mengedit, dan menghapus posting blog. Anda dapat mengatur judul, konten, gambar utama, dan kategori untuk setiap posting.

- **Komentar:** Pembaca dapat memberikan komentar pada posting blog. Anda sebagai pengelola dapat mengelola komentar dengan mudah, termasuk menyetujui atau menghapus komentar yang masuk.

- **Kategori dan Tag:** Anda dapat mengategorikan posting ke dalam berbagai kategori dan menambahkan tag-tag yang relevan. Ini membantu pembaca dalam menavigasi dan menemukan konten yang menarik bagi mereka.

- **Pencarian:** Platform ini dilengkapi dengan fungsi pencarian, memungkinkan pembaca untuk mencari posting berdasarkan kata kunci tertentu.

- **Responsif:** Tampilan platform dirancang responsif, sehingga dapat diakses dengan nyaman dari berbagai perangkat, termasuk desktop, tablet, dan ponsel.

## Panduan Instalasi

Berikut adalah langkah-langkah untuk menjalankan proyek ini secara lokal di mesin Anda:

1. **Klon Repositori:** Gunakan perintah berikut untuk mengklon repositori ke mesin Anda.
   ```bash
   git clone https://github.com/Skrnagrh/blog.git
   ```

2. **Buat Salinan Konfigurasi:** Salin berkas `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

3. **Konfigurasi Database:** Buka berkas `.env` dan atur pengaturan database Anda, seperti nama database, pengguna, dan kata sandi.

4. **Instal Dependensi:** Masuk ke direktori proyek dan jalankan perintah berikut untuk menginstal dependensi proyek:
   ```bash
   composer install
   ```

5. **Generate Key Aplikasi:** Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
   ```bash
   php artisan key:generate
   ```

6. **Migrasi dan Pengisian Awal Data:** Migrasi tabel dan pengisian awal data dengan perintah:
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan Server:** Jalankan server pengembangan Laravel:
   ```bash
   php artisan serve
   ```

8. **Akses Aplikasi:** Buka peramban web dan akses `http://localhost:8000` untuk melihat platform.

Terima kasih telah tertarik pada proyek Blog! Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau masukan lebih lanjut.

Kunjungi repositori kami di [https://github.com/Skrnagrh/blog](https://github.com/Skrnagrh/blog)
