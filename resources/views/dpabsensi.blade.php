@extends('layout/main3')

@section('container3')

<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Data Absensi</div><br>
      <div class="button_waterpump" >
        <a href="/paddabsen" style="background-color: #007bff">Tambah Data</a>
        <a href="#" style="background-color: #ffc107"><i class="fas fa-print"></i></a>
      </div><br>
      <div class="search-box" >
        <input  type="text" id="searchInput" placeholder="Cari mahasiswa...">
      </div>
      <div class="sales-details">
        <table style="width: 100%" border="1">
          <tr class="details">
            <th class="topic">No</th>
            <th class="topic">Nama</th>
            <th class="topic">Tanggal</th>
            <th class="topic">Status</th>
            <th class="topic">Kegiatan</th>
            <th class="topic">Verifikasi Absensi</th>
            <th class="topic">Opsi</th>
          </tr>
          <tr class="details" align="center" >
            <td class="topic">1</td>
            <td class="topic">Alfin Zainuri</td>
            <td class="topic"></td>
            <td class="topic">Hadir</td>
            <td class="topic">Belajar Larravel</td>
            <td class="topic">
              <div class="button_waterpump">
                <a href="#" style="background-color: #007bff">Konfirmasi</a>
              </div>
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

  
  @endsection