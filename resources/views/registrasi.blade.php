<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Aplikasi | Registrasi </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registrasi</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" placeholder="Masukkan Nama" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Masukkan Email" required>
          </div>
          <div class="input-box">
            <span class="details">No. Telepon</span>
            <input type="text" placeholder="Masukkan No. Telpon" required>
          </div>
          <div class="input-box">
            <span class="details">Alamat</span>
            <input type="text" placeholder="Masukkan Alamat" required>
          </div>
          <div class="input-box">
            <span class="details">Instansi</span>
            <input type="text" placeholder="Masukkan Instansi" required>
          </div>
          <div class="input-box">
            <span class="details">Jurusan</span>
            <input type="text" placeholder="Masukkan Jurusan" required>
          </div>
          <div class="input-box">
            <span class="details">NIM / NISN</span>
            <input type="text" placeholder="Masukkan NIM / NISN" required>
          </div>
          <div class="input-box">
            <span class="details">Mulai Magang</span>
            <input type="date" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Akhir Magang</span>
            <input type="date" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Masukkan Username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Masukkan Password" required>
          </div>
          <div class="input-box">
            <span class="details">Foto</span>
            <input type="file" placeholder="" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>