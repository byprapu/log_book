@extends('layout/main2')

@section('container2')
<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Data Mahasiswa</div><br>
      <div class="button_waterpump">
        <a href="/aaddmahasiswa" style="background-color: #007bff">Tambah Data</a>
        <a href="#" style="background-color: #ffc107"><i class="fas fa-print"></i></a>
      </div><br>
      <div class="search-box" >
        <input  type="text" id="searchInput" placeholder="Cari mahasiswa...">
      </div>
      <div class="sales-details">
        <table style="width: 100%">
          <tr class="details">
            <th class="topic">No</th>
            <th class="topic">Nama Lengkap</th>
            <th class="topic">NIM/NISN</th>
            <th class="topic">Jurusan</th>
            <th class="topic">Instansi</th>
            <th class="topic">Pembimbing KP</th>
            <th class="topic">OPD</th>
            <th class="topic">Opsi</th>
          </tr>
          <tr class="details" align="center">
            <td class="topic">1</td>
            <td class="topic">Alfin Zainuri</td>
            <td class="topic">200441100067</td>
            <td class="topic">Sistem Informasi</td>
            <td class="topic">Universitas Trunojoyo Madura</td>
            <td class="topic">Bapak Andre</td>
            <td class="topic">Kominfo Bangkalan</td>
            <td>
              <a href="#" style="background-color: #007bff" class="btn-icon"><i class="bi bi-eye"></i></a>
              <a href="#" style="background-color: #ffc107" class="btn-icon"><i class="bi bi-pencil"></i></a>
              <a href="#" style="background-color: #dc3545" class="btn-icon"><i class="bi bi-trash"></i></a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

