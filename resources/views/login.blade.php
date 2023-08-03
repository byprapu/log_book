<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Aplikasi | Login</title>
      <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="#">
            <div class="field">
               <input type="text" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" required>
               <label>Password</label>
            </div><br>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
              Belum Memiliki Akun? <a href="/registrasi">Daftar Sekarang</a>
           </div>
         </form>
      </div>
   </body>
</html>