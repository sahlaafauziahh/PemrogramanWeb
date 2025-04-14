# SISTEM BIODATA BERBASIS WEB

Sistem biodata berbasis web ini terdiri dari dua halaman utama, yaitu index.html untuk menginput data dan profile.html untuk menampilkan data yang telah diisi. Penyimpanan data dilakukan menggunakan LocalStorage, sehingga pengguna dapat mengakses kembali informasi yang telah dimasukkan tanpa memerlukan server eksternal.

# Analisis 5W+1H
Sistem ini adalah halaman web yang memungkinkan pengguna mengisi dan melihat biodata mereka. Dapat digunakan oleh individu atau organisasi yang membutuhkan penyimpanan biodata. Dapat digunakan saat pengisian, pembaruan, atau pengecekan biodata. Dapat diakses melalui browser di berbagai perangkat, seperti komputer atau ponsel. Dibuat untuk mempermudah penyimpanan dan pengelolaan biodata tanpa memerlukan database eksternal.
Pengguna mengisi data melalui form di index.html, yang kemudian disimpan di LocalStorage dan ditampilkan kembali di profile.html.

1. Kelebihan (Strengths): Mudah digunakan, tidak memerlukan login, dan dapat diakses di berbagai perangkat.
2. Kelemahan (Weaknesses): Data hanya tersimpan di LocalStorage, kurang aman, dan tidak memiliki validasi format data.
3. Peluang (Opportunities):
Dapat dikembangkan dengan database server-side, fitur edit dan hapus data, serta aplikasi untuk keanggotaan.
4. Ancaman (Threats):
Keamanan rentan, sistem tidak berfungsi jika LocalStorage tidak tersedia, dan potensi duplikasi data.

# Penjelasan Kode

1. index.html

a. Deklarasi HTML
    <!DOCTYPE html> menentukan bahwa dokumen menggunakan HTML5.
    <html lang="id"> menetapkan bahasa utama dokumen sebagai Bahasa Indonesia.
b. Bagian <head>
    <meta charset="UTF-8"> memastikan karakter yang digunakan mendukung berbagai simbol.
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> membantu tampilan agar responsif di perangkat mobile.
    <title>Latihan 1 - Biodata</title> menetapkan judul halaman.
    <link rel="stylesheet" href="/css/tag-form.css"> menghubungkan file CSS eksternal untuk mempercantik tampilan.
c. Bagian <body>
    <div class="container"> mengelompokkan elemen dalam satu wadah.
    <h1>Biodata</h1> menampilkan judul utama halaman.
d. Formulir Biodata
    <form id="Biodata" onsubmit="handleSubmit(event)"> digunakan untuk mengumpulkan data pengguna dan memanggil fungsi handleSubmit(event) saat dikirim.
e. Input Data Pengguna
    <input type="text" id="name" name="name" required> untuk nama lengkap.
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required> untuk tanggal lahir.
    <input type="text" id="jenis_kelamin" name="jenis_kelamin" required> untuk jenis kelamin.
    <input type="email" id="email" name="email" required> untuk email.
    <input type="text" id="alamat" name="alamat" required> untuk alamat.
Semua input memiliki atribut required agar wajib diisi.
f. Tombol Submit
    <button type="submit">Submit</button> digunakan untuk mengirim formulir.
g. Pesan Konfirmasi
    <div id="response-message" style="display: none;"> awalnya disembunyikan dan hanya muncul setelah data disimpan.
h. JavaScript untuk Menyimpan Data
    - event.preventDefault(); mencegah halaman melakukan reload saat formulir dikirim.
    - Data dari formulir diambil menggunakan document.getElementById().value.
    - Data disimpan di LocalStorage dengan localStorage.setItem("userProfile", JSON.stringify(userData)).
    - Setelah data tersimpan, elemen <div id="response-message"> diubah menjadi terlihat (style.display = 'block').



2. profile.html

a. Deklarasi HTML
    <!DOCTYPE html> → Menentukan dokumen menggunakan HTML5.
    <html lang="id"> → Menentukan bahasa utama dokumen sebagai Bahasa Indonesia.
b. Bagian <head>
    <meta charset="UTF-8"> → Mendukung berbagai karakter dan simbol.
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> → Membantu tampilan agar responsif di berbagai perangkat.
    <title>Profile Pengguna</title> → Menentukan judul halaman web.
    <link rel="stylesheet" href="/css/tag-form.css"> → Menghubungkan file CSS eksternal untuk mempercantik tampilan.
c. Struktur Halaman Profil
    <body> → Memulai bagian utama yang ditampilkan di halaman web.
    <div class="container"> → Membungkus seluruh elemen halaman dalam satu wadah.
    <h1>Profile Pengguna</h1> → Menampilkan judul halaman profil.
d. Tampilan Data Profil
    <div class="profile-card"> → Wadah khusus untuk menampilkan biodata pengguna.
    <h2 id="profile-name">Nama Pengguna</h2> → Menampilkan nama pengguna.
    <p><strong>Tanggal Lahir:</strong> <span id="profile-tanggal_lahir"></span></p> → Menampilkan tanggal lahir.
    <p><strong>Jenis Kelamin:</strong> <span id="profile-jenis_kelamin"></span></p> → Menampilkan jenis kelamin.
    <p><strong>Email:</strong> <span id="profile-email"></span></p> → Menampilkan email pengguna.
    <p><strong>Alamat:</strong> <span id="profile-alamat"></span></p> → Menampilkan alamat pengguna.
e. Tombol Kembali ke Formulir
    <a href="index.html"><button>Kembali ke Form</button></a> → Menyediakan tombol untuk kembali ke halaman formulir (index.html).
f. JavaScript untuk Menampilkan Data Profil
    Mengambil Data dari LocalStorage

        const userData = JSON.parse(localStorage.getItem("userProfile"));
    Mengambil data yang tersimpan di LocalStorage dan mengonversinya dari format JSON ke objek JavaScript.

    Menampilkan Data di Halaman

        if (userData) {
            document.getElementById("profile-name").textContent = userData.name;
            document.getElementById("profile-tanggal_lahir").textContent = userData.birthdate;
            document.getElementById("profile-jenis_kelamin").textContent = userData.gender;
            document.getElementById("profile-email").textContent = userData.email;
            document.getElementById("profile-alamat").textContent = userData.address;
    Jika data ditemukan, setiap elemen dengan id yang sesuai akan diisi dengan nilai dari LocalStorage.

Menampilkan Pesan Jika Data Tidak Ditemukan

        } else {
            document.querySelector(".container").innerHTML = "<h2>Data tidak ditemukan. Silakan isi biodata terlebih dahulu di <a href='index.html'>halaman ini</a>.</h2>";
        }
    Jika tidak ada data tersimpan, menampilkan pesan bahwa data tidak ditemukan dan memberikan tautan untuk mengisi formulir.

# Kesimpulan dan Saran
Sistem ini merupakan solusi sederhana untuk penyimpanan biodata, tetapi memiliki keterbatasan dalam aspek keamanan dan ketahanan data. Untuk pengembangan lebih lanjut, disarankan menggunakan database server-side, menambahkan fitur validasi data, serta meningkatkan sistem keamanan agar lebih aman dan efisien.

