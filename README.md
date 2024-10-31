# Aplikasi Persewaan Mobil

Ini adalah aplikasi yang dibuat menggunakan **Laravel 9**. Aplikasi ini memungkinkan pengguna untuk registrasi pembuatan akun, manajemen user, manajemen mobil, melakukan peminjaman mobil,
dan Pengembalian mobil dengan mudah dan efisien.

## Role

Aplikasi ini memiliki dua role, adapun role dan fungsi setiap rolenya :

- **Admin**
1. Admin dapat melakukan login, berdasarkan username dan password
2. Admin dapat melakukan manajemen user, seperti melihat, menambahkan, mengedit, mengupdate, dan menghapus data user.
3. Admin dapat melakukan manajemen mobil, seperti melihat, menambahkan, mengedit, mengupdate, dan menghapus data mobil.
4. Admin dapat mencari mobil berdasarkan merek, model, dan status (Tersedia atau Terpakai)
5. Admin dapat melihat daftar peminjaman mobil secara keseluruhan
6. Admin dapat melihat daftar pengembalian mobil secara keseluruhan
7. Admin dapat melihat jumlah mobil yang tersedia dan terpakai di halaman dashboard
8. Admin dapat melakukan Logout

- **User**
1. User dapat melakukan registrasi pengguna dengan membuat akun yang dipakai nantinya untuk login.
2. User dapat melakukan login, berdasarkan username dan password yang mereka sudah buat pada halaman registrasi.
3. User dapat melihat daftar semua mobil yang tersedia di sewa di halaman dashboard
4. User dapat mencari mobil berdasarkan merek dan model.
5. User dapat melakukan peminjaman mobil, dengan memasukkan inputan tanggal mulai, tanggal selesai penyewaan, dan mencari ataupun memilih mobil yang tersedia.
6. User dapat melihat daftar mobil yang sedang mereka sewa di menu Daftar Peminjaman Mobil
7. User dapat melakukan pengembalian mobil yang mereka sewa dengan memasukkan nomor plat mobil pada menu Pengembalian Mobil
8. User dapat melihat detail penyewaan, seperti jumlah durasi hari penyewaan, total biaya,  tanggal pengembalian, merek mobil, model mobil, nomor plat, tarif per hari, dan gambar.
9. User dapat menyimpan data pengembalian mobil.
10. User dapat melihat daftar pengembalian mobil yang mereka sewa di menu Daftar Pengembalian Mobil
11. User dapat melakukan Logout


## Library

- **Laravel 9**: Kerangka kerja PHP yang digunakan untuk membangun backend dan perutean.
- **jQuery**: Digunakan untuk menangani permintaan Infinite Scroll dan AJAX.
- **Bootstrap 5**: Kerangka kerja frontend untuk membangun UI responsif.
- **AOS (Animate on Scroll)**: Untuk menambahkan animasi halus saat elemen digulir ke tampilan.
- **Font Awesome**: Untuk menambahkan ikon seperti ikon hati untuk tombol "Tambahkan ke Favorit".
- **SweetAlert**: Digunakan untuk menampilkan *popup alert* yang menarik dan interaktif.
- **DataTables** : Untuk pengelolaan data tabel dengan fitur pencarian, pagination, dan sorting.
- **Carbon Library** : Untuk manipulasi tanggal (dalam pengecekan tanggal peminjaman dan pengembalian).

## Tools

- **Visual Studio Code** : untuk menulis dan mengedit kode
- **Xampp** : sebagai web server localhost yang bisa digunakan secara offline
- **SQLyog Community** : untuk manajemen database yang berfungsi sebagai antarmuka grafis untuk mengelola database MySQL
- **Github** : sebagai platform repositori


## Akun Login Admin :

Username : admin
Password : admin
