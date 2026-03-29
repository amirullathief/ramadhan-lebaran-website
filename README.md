# 🌙 Website Kegiatan Ramadhan & Lebaran

Website sederhana berbasis Laravel (tanpa database) untuk mencatat dan berbagi kegiatan pribadi selama bulan Ramadhan dan saat Lebaran.

## ✨ Fitur
- Halaman beranda dengan ringkasan kegiatan
- Daftar kegiatan Ramadhan (sahur, tadarus, tarawih, i'tikaf, dll)
- Daftar kegiatan Lebaran (zakat, shalat Id, halal bihalal, dll)
- Detail setiap kegiatan (tempat, waktu, deskripsi)
- Jadwal harian Ramadhan
- Halaman tentang

## 🛠 Prasyarat

Pastikan komputer Anda sudah terinstall:

- **PHP 8.2 atau lebih baru** → [Download PHP](https://www.php.net/downloads)
- **Composer** → [Download Composer](https://getcomposer.org/download/)
- **Git** (opsional, jika ingin clone) → [Download Git](https://git-scm.com/)

> 💡 Jika menggunakan **XAMPP** versi terbaru, PHP 8.2 sudah tersedia. Composer harus diinstall terpisah.

## 📥 Cara Mendapatkan Kode

### Opsi 1: Clone dengan Git (Direkomendasikan)
bash
git clone https://github.com/amirullathief/ramadhan-lebaran-website.git
cd ramadhan-lebaran-website

Opsi 2: Download ZIP
Buka https://github.com/amirullathief/ramadhan-lebaran-website

Klik tombol Code → Download ZIP

Ekstrak file ZIP ke folder proyek (misal C:\xampp\htdocs\)

🚀 Langkah Menjalankan Website
Buka terminal (CMD, PowerShell, atau Git Bash) di folder proyek, lalu jalankan perintah berikut:

1. Install dependensi PHP
bash
composer install
Perintah ini akan mengunduh semua package Laravel yang dibutuhkan.

2. Buat file environment
bash
cp .env.example .env
Atau di Windows:

bash
copy .env.example .env
3. Generate application key
bash
php artisan key:generate
4. Jalankan server lokal
bash
php artisan serve
Setelah server berjalan, Anda akan melihat:

text
Server running on [http://127.0.0.1:8000]
5. Buka browser dan akses:
text
http://127.0.0.1:8000
Website akan tampil. Anda bisa menjelajahi menu Kegiatan Ramadhan, Kegiatan Lebaran, Jadwal Ramadhan, dll.

❗ Catatan Penting
Tidak perlu database – Semua data kegiatan sudah di-hardcode di dalam PageController.php.

Tidak perlu migrasi – Karena tidak menggunakan database, abaikan perintah php artisan migrate.

Tidak ada gambar – Versi ini dibuat tanpa gambar agar ringan dan mudah dijalankan di komputer mana pun.

🐛 Jika Terjadi Error
Error	Solusi
Composer not found	Pastikan Composer sudah terinstall. Jalankan composer -V di terminal.
PHP version not sufficient	Website membutuhkan PHP 8.2+. Cek versi PHP Anda dengan php -v.
Permission denied (Linux/Mac)	Beri izin tulis pada folder storage: chmod -R 775 storage bootstrap/cache
Class 'App\Http\Controllers\PageController' not found	Jalankan composer dump-autoload
Failed to push some refs saat git push	Pastikan repository sudah dibuat di GitHub dan URL remote sudah benar.
📄 Lisensi
Proyek ini bersifat open source dan dapat digunakan untuk belajar maupun dokumentasi pribadi.

🙏 Kontribusi
Jika ingin memperbaiki atau menambah kegiatan, silakan fork repository ini dan buat pull request.

Selamat menjalankan ibadah puasa dan merayakan Idul Fitri! 🌙✨

text

Cara menambahkan ke GitHub:
1. Buat file `README.md` di root proyek.
2. Salin seluruh kode di atas.
3. Simpan.
4. Jalankan:
   bash
   git add README.md
   git commit -m "Add comprehensive README with setup instructions"
   git push origin main
