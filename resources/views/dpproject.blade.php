@extends('layout/main3')

@section('container3')

<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Project Magang</div><br>
      <div class="button_waterpump">
        <a href="/paddproject" style="background-color: #007bff" onclick="showTambahDataModal()">Tambah Data</a>
      </div><br>
      <div class="search-box" >
        <input  type="text" id="searchInput" placeholder="Cari mahasiswa...">
      </div>
      <div class="sales-details">
        <table style="width: 100%" border="1">
          <tr class="details">
            <th class="topic">No</th>
            <th class="topic">Pembimbing KP</th>
            <th class="topic">Nama Project</th>
            <th class="topic">Ketentuan</th>
            <th class="topic">Opsi</th>
          </tr>
          <tr class="details" align="center" >
            <td class="topic">1</td>
            <td class="topic">Alfin Zainuri</td>
            <td class="topic">Log Book</td>
            <td class="topic">Kelompok 3 orang</td>
            </td>
            <td>
              <a href="#" style="background-color: #007bff" class="btn-icon" ><i class="bi bi-pencil"></i></a>
              <a href="#" style="background-color: #ffc107" class="btn-icon" ><i class="bi bi-trash"></i></a> 
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

  
  @endsection