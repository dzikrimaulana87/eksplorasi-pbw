# Pengenalan Aplikasi CodeIgniter 4

## Apa itu CodeIgniter?
CodeIgniter adalah kerangka kerja web PHP full-stack yang ringan, cepat, fleksibel, dan aman. Informasi lebih lanjut dapat ditemukan di situs resmi.

Repositori ini berisi starter aplikasi yang dapat diinstal menggunakan composer. Repositori ini dibangun dari repositori pengembangan.

Informasi lebih lanjut tentang rencana versi 4 dapat ditemukan di forum CodeIgniter 4. Anda dapat membaca panduan pengguna yang sesuai dengan versi terbaru dari kerangka kerja ini.

## Instalasi & Pembaruan
Gunakan perintah berikut untuk menginstal:
```bash
composer create-project codeigniter4/appstarter
```
dan gunakan perintah berikut untuk memperbarui setiap kali ada rilis baru:
```bash
composer update
```

Saat memperbarui, periksa catatan rilis untuk melihat apakah ada perubahan yang perlu Anda terapkan pada folder aplikasi Anda. File yang terpengaruh dapat disalin atau digabungkan dari `vendor/codeigniter4/framework/app`.

## Setup
Salin file `.env` ke `.env` dan sesuaikan untuk aplikasi Anda, khususnya baseURL dan pengaturan database.

### Perubahan Penting pada `index.php`
`index.php` tidak lagi berada di root proyek! File ini telah dipindahkan ke dalam folder `public`, untuk keamanan yang lebih baik dan pemisahan komponen.

Ini berarti Anda harus mengkonfigurasi server web Anda untuk "menunjuk" ke folder `public` dari proyek Anda, bukan ke root proyek. Praktik yang lebih baik adalah mengonfigurasi host virtual untuk menunjuk ke sana. Praktik yang buruk adalah menunjuk server web Anda ke root proyek dan mengharapkan untuk masuk ke `public/`, karena logika dan kerangka kerja lainnya akan terpapar.

Harap baca panduan pengguna untuk penjelasan yang lebih baik tentang cara kerja CI4!

## Manajemen Repositori
Kami menggunakan masalah GitHub di repositori utama kami untuk melacak BUG dan melacak paket pekerjaan PENGEMBANGAN yang disetujui. Kami menggunakan forum kami untuk memberikan DUKUNGAN dan mendiskusikan PERMINTAAN FITUR.

Repositori ini adalah repositori "distribusi", dibangun oleh skrip persiapan rilis kami. Masalah dengan ini dapat diajukan di forum kami, atau sebagai masalah di repositori utama.

## Persyaratan Server
Diperlukan PHP versi 7.4 atau lebih tinggi, dengan ekstensi berikut terinstal:

- `intl`
- `mbstring`

### [!PERINGATAN]
Tanggal akhir masa pakai PHP 7.4 adalah 28 November 2022. Tanggal akhir masa pakai PHP 8.0 adalah 26 November 2023. Jika Anda masih menggunakan PHP 7.4 atau 8.0, Anda harus segera memperbarui. Tanggal akhir masa pakai PHP 8.1 adalah 25 November 2024.

Selain itu, pastikan bahwa ekstensi berikut diaktifkan di PHP Anda:

- `json` (diaktifkan secara default - jangan matikan)
- `mysqlnd` jika Anda berencana menggunakan MySQL
- `libcurl` jika Anda berencana menggunakan pustaka `HTTP\CURLRequest`

---

### Dasar-dasar CodeIgniter 4
CodeIgniter 4 dirancang untuk menjadi sederhana dan mudah dipelajari. Berikut adalah beberapa konsep dasar yang perlu Anda ketahui:

1. **Controller**: Komponen yang menangani logika aplikasi Anda. Controller menerima input dari pengguna, memprosesnya, dan mengirimkan respon.
   
2. **Model**: Komponen yang berhubungan dengan basis data. Model bertanggung jawab untuk mendapatkan, menyimpan, dan memanipulasi data.

3. **View**: Komponen yang menangani output. View adalah template yang menampilkan data kepada pengguna.

4. **Routes**: Digunakan untuk menentukan bagaimana URL dalam aplikasi Anda dipetakan ke controller.

5. **Helpers**: Kumpulan fungsi yang membantu Anda menyelesaikan tugas umum dalam aplikasi Anda, seperti bekerja dengan URL atau formulir.

6. **Libraries**: Kumpulan kelas yang menyediakan fungsionalitas tambahan, seperti manipulasi gambar atau pembuatan file PDF.
