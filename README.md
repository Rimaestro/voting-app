# 🗳️ Aplikasi Voting - Laravel

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

</div>

## 📋 Deskripsi
Aplikasi Voting berbasis web yang dikembangkan dengan framework Laravel untuk memfasilitasi proses pemilihan secara elektronik. Aplikasi ini dibuat sebagai bagian dari praktikum mata kuliah Rekayasa Perangkat Lunak di Universitas Amikom Purwokerto.

## ✨ Fitur Utama
- 👥 Manajemen pemilih dan validasi status
- 👑 Manajemen kandidat dengan visi-misi
- 🔐 Sistem autentikasi multi-level (admin, panitia, pemilih)
- 📊 Visualisasi hasil pemilihan
- 🕒 Pencatatan waktu pemilihan
- 📱 Tampilan responsif dengan Bootstrap

## 🖼️ Screenshot
![Screenshot Aplikasi](https://via.placeholder.com/800x400?text=Screenshot+Aplikasi+Voting)

## 🏗️ Struktur Database
Berikut adalah diagram Entity Relationship dari aplikasi:

```mermaid
erDiagram
    USERS ||--o{ SUARA : gives
    USERS ||--o{ PANITIA : can_be
    KANDIDAT ||--o{ SUARA : receives

    USERS {
        int id PK
        string name
        string email
        string password
        string role
        timestamp created_at
        timestamp updated_at
    }

    PANITIA {
        int id PK
        int user_id FK
        string jabatan
        timestamp created_at
        timestamp updated_at
    }

    KANDIDAT {
        int id PK
        string nama_kandidat
        string no_urut
        string visi
        string misi
        string foto
        timestamp created_at
        timestamp updated_at
    }

    SUARA {
        int id PK
        int user_id FK
        int kandidat_id FK
        datetime waktu_memilih
        timestamp created_at
        timestamp updated_at
    }
```

## 🔄 Alur Aplikasi
```mermaid
flowchart TD
    A[Pemilih] -->|Login| B{Verifikasi}
    B -->|Valid| C[Dashboard Pemilih]
    B -->|Invalid| A
    C -->|Pilih Kandidat| D[Halaman Pemilihan]
    D -->|Submit Suara| E[Konfirmasi]
    E -->|Berhasil| F[Hasil Voting]
    
    G[Panitia] -->|Login| H{Verifikasi}
    H -->|Valid| I[Dashboard Panitia]
    H -->|Invalid| G
    I -->|Kelola Pemilih| J[Daftar Pemilih]
    I -->|Kelola Kandidat| K[Daftar Kandidat]
    I -->|Lihat Statistik| L[Hasil Voting]
```

## 🚀 Cara Penggunaan

### Prasyarat
- PHP >= 8.0
- Composer
- MySQL
- Node.js & NPM

### Instalasi
1. Clone repositori
   ```bash
   git clone https://github.com/Rimaestro/voting-app.git
   cd voting-app
   ```

2. Instal dependensi
   ```bash
   composer install
   npm install
   ```

3. Salin file .env.example
   ```bash
   cp .env.example .env
   ```

4. Generate application key
   ```bash
   php artisan key:generate
   ```

5. Konfigurasi database di file .env
   ```
   DB_DATABASE=dbvotte_laravel
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Jalankan migrasi dan seeder
   ```bash
   php artisan migrate --seed
   ```

7. Kompilasi asset
   ```bash
   npm run dev
   ```

8. Jalankan server
   ```bash
   php artisan serve
   ```

9. Akses aplikasi di browser
   ```
   http://localhost:8000
   ```

## 💻 Teknologi
- **Framework:** Laravel 10
- **Database:** MySQL
- **Frontend:** Bootstrap 5, jQuery, Font Awesome
- **Animasi:** Animate.css

## 👨‍💻 Dikembangkan oleh
Mahasiswa Universitas Amikom Purwokerto untuk memenuhi tugas Praktikum 12 mata kuliah Rekayasa Perangkat Lunak yang dibimbing oleh Irma Darmayanti, M.Kom.

## 📝 Lisensi
Proyek ini dilisensikan di bawah lisensi [MIT](https://opensource.org/licenses/MIT).
