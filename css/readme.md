# Dasar-dasar CSS

Cascading Style Sheets (CSS) adalah bahasa stylesheet yang digunakan untuk mendesain tampilan dokumen yang ditulis dalam HTML. Berikut adalah penjelasan mengenai dasar-dasar CSS berdasarkan kode contoh yang diberikan.

## Selector

CSS selector digunakan untuk memilih elemen HTML yang ingin diberikan gaya (style). Berikut adalah jenis-jenis selector yang digunakan dalam kode contoh:

### 1. Universal Selector
```css
* {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
```
Universal selector (`*`) memilih semua elemen pada halaman web dan memberikan gaya yang sama. Pada contoh ini, semua elemen akan menggunakan font-family yang ditentukan.

### 2. Type Selector
```css
body {
    background-color: yellow;
}
```
Type selector (atau element selector) memilih elemen berdasarkan nama tag HTML. Pada contoh ini, semua elemen `body` akan memiliki warna latar belakang kuning.

### 3. Class Selector
```css
.title, h2 {
    text-align: center;
}
```
Class selector memilih elemen yang memiliki atribut `class` tertentu. Pada contoh ini, elemen dengan class `title` dan semua elemen `h2` akan memiliki teks yang rata tengah. Class selector diawali dengan tanda titik (`.`).

### 4. ID Selector
```css
#gambar-saya {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 23px;
}
```
ID selector memilih elemen yang memiliki atribut `id` tertentu. Pada contoh ini, elemen dengan `id` `gambar-saya` akan ditampilkan sebagai blok, diratakan di tengah, dan memiliki sudut yang melengkung dengan radius 23px. ID selector diawali dengan tanda pagar (`#`).

## Properti CSS

Properti CSS digunakan untuk mendefinisikan gaya yang akan diterapkan pada elemen yang dipilih. Berikut adalah beberapa properti yang digunakan dalam kode contoh:

### 1. `font-family`
Properti ini digunakan untuk menentukan font yang digunakan dalam teks elemen. Contoh:
```css
* {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
```

### 2. `background-color`
Properti ini digunakan untuk menentukan warna latar belakang elemen. Contoh:
```css
body {
    background-color: yellow;
}
```

### 3. `list-style-type`
Properti ini digunakan untuk menentukan jenis penanda (bullet) dalam daftar. Contoh:
```css
ul {
    list-style-type: none;
}
```

### 4. `padding`
Properti ini digunakan untuk menentukan jarak antara konten elemen dan batas elemen. Contoh:
```css
ul {
    padding: 0;
}
```

### 5. `text-align`
Properti ini digunakan untuk menentukan perataan teks dalam elemen. Contoh:
```css
.title, h2 {
    text-align: center;
}
```

### 6. `display`
Properti ini digunakan untuk menentukan bagaimana elemen ditampilkan. Contoh:
```css
#gambar-saya {
    display: block;
}
```

### 7. `margin-left` dan `margin-right`
Properti ini digunakan untuk menentukan jarak di sebelah kiri dan kanan elemen. Contoh:
```css
#gambar-saya {
    margin-left: auto;
    margin-right: auto;
}
```

### 8. `border-radius`
Properti ini digunakan untuk menentukan radius sudut elemen, sehingga membuat sudut elemen menjadi melengkung. Contoh:
```css
#gambar-saya {
    border-radius: 23px;
}
```
