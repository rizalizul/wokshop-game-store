# Wokshop Project 🎮

Sistem informasi manajemen transaksi workshop/top-up game berbasis web menggunakan PHP Native. Proyek ini mencakup manajemen admin, pelanggan, bank, dan integrasi pembayaran.

## 📁 Struktur Folder Utama

- `/admin`: Dashboard manajemen dan CRUD data.
- `/assets`: File statis (Bootstrap, CSS, JS, Images).
- `/db`: Database script (`.sql`) dan konfigurasi koneksi.
- `/pelanggan`: Antarmuka khusus pengguna/pelanggan.
- `/informasi`: Halaman statis tentang layanan.

## 🛠️ Prasyarat (Prerequisites)

Sebelum menjalankan proyek ini, pastikan Anda sudah menginstal:

- [Laragon](https://laragon.org/download/) atau XAMPP.
- Web Browser (Chrome/Edge/Firefox).
- PHP 7.4 atau versi terbaru.

## 🚀 Cara Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/rizalizul/wokshop-game-store.git

2.  **Pindahkan ke Folder Web Server**
    Jika menggunakan Laragon, pindahkan folder ke `C:\laragon\www\WOKSHOP`.

3.  **Persiapan Database**
    - Buka **phpMyAdmin** atau **HeidiSQL**.
    - Buat database baru dengan nama `db_wokshop`.
    - Import file SQL yang berada di: `db/db_wokshop.sql`.

4.  **Konfigurasi Koneksi**
    - Buka file `db/koneksi.php`.
    - Sesuaikan `hostname`, `username`, `password`, dan `database_name` dengan environment Anda.

    ```php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "db_wokshop";
    ```

5.  **Jalankan Proyek**
    - Nyalakan Apache dan MySQL di Laragon/XAMPP.
    - Akses melalui browser: `http://localhost/WOKSHOP` atau `http://wokshop.test`.

## 🔑 Akun Akses (Default)

- **Admin:** admin / admin
- **Pelanggan:** pelanggan1 / pelanggan1

## 🏗️ Dibuat Dengan

- [PHP Native](https://www.php.net/)
- [Bootstrap 5](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [MySQL](https://www.mysql.com/)

---

Dibuat oleh [Rizal]

```
WOKSHOP
├─ admin
│  ├─ admin_add.php
│  ├─ admin_delete.php
│  ├─ admin_edit.php
│  ├─ admin_profil.php
│  ├─ admin_view.php
│  ├─ bank_add.php
│  ├─ bank_dashboard.php
│  ├─ bank_edit.php
│  ├─ bank_edit_profil.php
│  ├─ bank_profil.php
│  ├─ bank_view.php
│  ├─ dashboard.php
│  ├─ footer_dashboard.php
│  ├─ game_add.php
│  ├─ game_delete.php
│  ├─ game_edit.php
│  ├─ game_image_view.php
│  ├─ game_view.php
│  ├─ navbar_bank.php
│  ├─ navbar_dashboard.php
│  ├─ pelanggan_add.php
│  ├─ pelanggan_edit.php
│  ├─ pelanggan_view.php
│  ├─ tagihan_delete.php
│  └─ tagihan_view.php
├─ assets
│  ├─ css
│  │  ├─ bootstrap-grid.css
│  │  ├─ bootstrap-grid.css.map
│  │  ├─ bootstrap-grid.min.css
│  │  ├─ bootstrap-grid.min.css.map
│  │  ├─ bootstrap-grid.rtl.css
│  │  ├─ bootstrap-grid.rtl.css.map
│  │  ├─ bootstrap-grid.rtl.min.css
│  │  ├─ bootstrap-grid.rtl.min.css.map
│  │  ├─ bootstrap-reboot.css
│  │  ├─ bootstrap-reboot.css.map
│  │  ├─ bootstrap-reboot.min.css
│  │  ├─ bootstrap-reboot.min.css.map
│  │  ├─ bootstrap-reboot.rtl.css
│  │  ├─ bootstrap-reboot.rtl.css.map
│  │  ├─ bootstrap-reboot.rtl.min.css
│  │  ├─ bootstrap-reboot.rtl.min.css.map
│  │  ├─ bootstrap-utilities.css
│  │  ├─ bootstrap-utilities.css.map
│  │  ├─ bootstrap-utilities.min.css
│  │  ├─ bootstrap-utilities.min.css.map
│  │  ├─ bootstrap-utilities.rtl.css
│  │  ├─ bootstrap-utilities.rtl.css.map
│  │  ├─ bootstrap-utilities.rtl.min.css
│  │  ├─ bootstrap-utilities.rtl.min.css.map
│  │  ├─ bootstrap.css
│  │  ├─ bootstrap.css.map
│  │  ├─ bootstrap.min.css
│  │  ├─ bootstrap.min.css.map
│  │  ├─ bootstrap.rtl.css
│  │  ├─ bootstrap.rtl.css.map
│  │  ├─ bootstrap.rtl.min.css
│  │  ├─ bootstrap.rtl.min.css.map
│  │  └─ style.css
│  ├─ img
│  │  ├─ banner_satu.png
│  │  ├─ carousel
│  │  │  ├─ wokshop_slide1.mp4
│  │  │  └─ wokshop_slide2.mp4
│  │  ├─ game
│  │  │  ├─ arena_of_valor.png
│  │  │  ├─ free_fire.png
│  │  │  ├─ genshin_impact.png
│  │  │  ├─ lords_mobile.png
│  │  │  ├─ mlbb.jpg
│  │  │  ├─ pubg.png
│  │  │  ├─ stumble_guys.png
│  │  │  └─ valorant.png
│  │  ├─ icon.ico
│  │  ├─ logo.png
│  │  └─ pembayaran
│  │     ├─ bca.png
│  │     ├─ bni.png
│  │     ├─ dana.png
│  │     ├─ gopay.png
│  │     ├─ mandiri.png
│  │     ├─ ovo.png
│  │     ├─ qris.png
│  │     └─ shopay.png
│  └─ js
│     ├─ bootstrap.bundle.js
│     ├─ bootstrap.bundle.js.map
│     ├─ bootstrap.bundle.min.js
│     ├─ bootstrap.bundle.min.js.map
│     ├─ bootstrap.esm.js
│     ├─ bootstrap.esm.js.map
│     ├─ bootstrap.esm.min.js
│     ├─ bootstrap.esm.min.js.map
│     ├─ bootstrap.js
│     ├─ bootstrap.js.map
│     ├─ bootstrap.min.js
│     ├─ bootstrap.min.js.map
│     └─ jquery-3.6.3.min.js
├─ bank
├─ daftar.php
├─ db
│  ├─ db_wokshop.sql
│  └─ koneksi.php
├─ footer.php
├─ index.php
├─ informasi
│  ├─ daftar_harga.php
│  ├─ footer_info.php
│  ├─ navbar_info.php
│  └─ tentang_kami.html
├─ keluar.php
├─ masuk.php
├─ navbar.php
└─ pelanggan
   ├─ footer_pelanggan.php
   ├─ game_transaksi_view.php
   └─ navbar_pelanggan.php

```
