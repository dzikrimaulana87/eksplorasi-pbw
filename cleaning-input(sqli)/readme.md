# Membersihkan Input di PHP untuk Mencegah SQL Injection

Validasi dan pembersihan input adalah langkah krusial dalam mengamankan aplikasi PHP Anda dari serangan SQL injection. README ini memberikan gambaran tentang metode-metode untuk membersihkan input, dengan fokus khusus pada penggunaan regular expression (regex) dan parameterized query.

## Daftar Isi
1. [Pendahuluan](#pendahuluan)
2. [Memahami SQL Injection](#memahami-sql-injection)
3. [Membersihkan Input dengan Regular Expression](#membersihkan-input-dengan-regular-expression)
4. [Menggunakan Parameterized Query](#menggunakan-parameterized-query)
5. [Best Practice](#best-practice)
6. [Kesimpulan](#kesimpulan)

## Pendahuluan
SQL injection merupakan serangan umum yang memungkinkan penyerang untuk memanipulasi query SQL dengan menyisipkan atau mengubah data input. Sangat penting untuk membersihkan input pengguna untuk melindungi aplikasi Anda. Panduan ini membahas dua metode utama: menggunakan regular expression untuk membersihkan input dan menggunakan parameterized query untuk mencegah SQL injection.

## Memahami SQL Injection
SQL injection terjadi ketika penyerang dapat memanipulasi query SQL dengan menyisipkan atau mengubah data input. Hal ini dapat menyebabkan akses tidak sah ke database, pelanggaran data, dan aktivitas jahat lainnya.

### Contoh Skenario
Tanpa validasi input yang benar, seorang penyerang dapat memasukkan string seperti `'; DROP TABLE users; --` yang, ketika dimasukkan dalam query SQL, dapat menghapus tabel `users`.

## Membersihkan Input dengan Regular Expression
Regular expression (regex) adalah alat yang kuat untuk validasi input. Dengan mendefinisikan pola, Anda dapat memastikan bahwa hanya data yang diterima yang diproses oleh aplikasi Anda.

### Pola Regex Umum
- **Karakter Alfanumerik**: `/^[a-zA-Z0-9]*$/`
- **Validasi Email**: `/^[\w\.\-]+@[\w\-]+\.[a-zA-Z]{2,4}`
