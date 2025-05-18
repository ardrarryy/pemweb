Hari ini pembelajarannya tentang penggunaan Docker dan Nginx untuk menjalankan aplikasi.
hal-hal yang dipelajari:
	1.	Docker: Langkah pertama adalah membuat file docker-compose.yml untuk menjalankan Nginx sebagai server aplikasi.

	2.	Nginx: Kemudian, Nginx dikonfigurasi melalui file nginx.conf agar dapat mendengarkan pada port 80 dan menampilkan file index.html yang ada di folder src.

	3.	Pengujian di Localhost: Setelah pengaturan selesai, dapat diuji di localhost untuk memastikan semuanya berjalan dengan baik.
 
===Percobaan dengan index.html dan profile.html===

1. Struktur Halaman index.html (Dashboard)
   -<header>: Bagian atas halaman yang berisi judul dan menu navigasi.
   -<h1>: Menampilkan judul utama halaman ("Selamat Datang di Halaman Saya").
   -<nav>: Menandai bagian untuk menu navigasi yang berisi link untuk berpindah antar halaman.
   -<ul>: Membuat daftar item yang tidak terurut.
   -<li>: Item menu yang berisi link untuk berpindah ke halaman index.html (Beranda) dan profile.html (Profil).
   -<section>: Menyusun konten utama seperti informasi dashboard dan aktivitas terbaru.
   
2. Struktur Halaman profile.html (Profil Pengguna)
   -<header>: Seperti di index.html, berfungsi sebagai bagian atas halaman dengan judul dan navigasi.
   -<h1>: Menampilkan judul halaman ("Profil Pengguna").
   -<section>: Berisi informasi profil pengguna, seperti nama, email, dan deskripsi singkat tentang pengguna.
   