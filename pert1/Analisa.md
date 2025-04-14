membuat web server sederhana menggunakan nginx dalam membuat folder coding, kemudian membuat folder baru yaitu nginx dan src
dalam nginx terdapat file nginx.conf
- listen 80 (yaitu ports yang digunakan 80:80, maka server hanya akan menerima permintaan di ports 80)
- server_name localhost (yaitu server hanya dapat menerima permintaan yang dikirim ke localhost)
- root /usr/share/nginx/html (yaitu untuk melayani halaman web dari folder, menentukan direktori tempat penyimpanan file yang akan ditampilkan ke pengguna)
- index index.html index.htm (jika pengguna mengakses folder tanpa menyebutkan file, maka server akan menampilkan index.html atau index.htm)
-  try_files $uri $uri/ =404;
    a. try_files (untuk mencqri file sesuai dengan permintaan server)
    b. $uri $uri/ (juntuk mencari dalam folder dengan nama yang sama) 
    c. =404 (untuk mengembalikan ke error 404 (not found) jika fila atau folder tidak ditemukam)
    
✅ Melayani halaman web dari folder /usr/share/nginx/html.
✅ Menggunakan index.html sebagai halaman utama jika tersedia.
✅ Mengembalikan error 404 jika file yang diminta tidak ditemukan.
✅ Mendengarkan di port 80 dan hanya merespons permintaan ke localhost.
dalam src berisi div.html dan index.html
membuat file baru diluar folder nginx dan src yaitu
- .env
- docker-compose.yml
- Analisa.md
- Catatan.md