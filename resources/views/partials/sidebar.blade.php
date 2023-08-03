<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
        </style>
      </head>
    
      <body>
        <div>
          <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">ABSENSI | MAGANG</h4>
            <li>
              <a class="text-white" href="/home">
                <i class="bi bi-house mr-2"></i>
                Beranda
              </a>
            </li>
            <li>
              <a class="text-white " href="/habsensi">
                <i class="bi bi-fire mr-2"></i>
                Absensi
              </a>
            </li>
            <li>
              <a class="text-white" href="/profil">
                <i class="bi bi-person mr-2"></i>
                Profil
              </a>
            </li>
            <li>
              <a class="text-white" href="/project">
                <i class="bi bi-newspaper mr-2"></i>
                Pengumpulan Project
              </a>
            </li>
            <li>
              <a class="text-white" href="/nilai">
                <i class="bi bi-file-earmark-text mr-2"></i>
                Nilai
              </a>
            </li>
            <li>
              <a class="text-white" href="/logout" >
                <i class="bi bi-door-open mr-2"></i>
                Keluar
              </a>
            </li>
          </div>
        </div>
        <div class="p-4" id="main-content">
          <div class="float-right">
            <a class="navbar-brand text-fw-bold fs-4">
              <img src="img/Alfin Zainuri.jpg" class="rounded float-right" width="40" height="40">
              Alfin Zainuri
            </a>
          </div>
            <button class="btn btn-primary" id="button-toggle" style="margin-right: 20px;">
                <i class="bi bi-list"></i>
            </button><br><br><br>
                @yield('container')  
        </div>
    
        <script>

          document.getElementById("sidebar").classList.toggle("active-sidebar");
          document.getElementById("main-content").classList.toggle("active-main-content");
    
          document.getElementById("button-toggle").addEventListener("click", () => {
    
          document.getElementById("main-content").classList.toggle("active-main-content");
          document.getElementById("sidebar").classList.toggle("active-sidebar");
            
          });
    
        </script>
      </body>
    </html>