<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style2.css') !!}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name" style="position: relative; left: 25px; top: 10px;">Pembimbing KP</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/pembimbing" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/dpmahasiswa">
            <i class='bx bx-box' ></i>
            <span class="links_name">Data Mahasiswa</span>
          </a>
        </li>
        <li>
          <a href="/dpabsensi">
            <i class='bx bx-file' ></i>
            <span class="links_name">Absensi</span>
          </a>
        </li>
        <li>
          <a href="/dpproject">
            <i class='bx bx-book' ></i>
            <span class="links_name">Project Magang</span>
          </a>
        </li>
        <li>
          <a href="/dpnilai">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Nilai</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="img/Alfin Zainuri.jpg" alt="">
        <span class="admin_name">Alfin Zainuri</span>
      </div>
    </nav>
    @yield('container3')
  </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
     sidebar.classList.toggle("active");
     if(sidebar.classList.contains("active")){
     sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }else
     sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
   }
    </script>
    <body>
</html>