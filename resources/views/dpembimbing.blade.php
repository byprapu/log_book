@extends('layout/main2')

@section('container2')

<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Data Pembimbing KP</div><br>
      <div class="button_waterpump" >
        <a href="/aaddpembimbing" style="background-color: #007bff">Tambah Data</a>
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
            <th class="topic">Jabatan</th>
            <th class="topic">NIP</th>
            <th class="topic">Email</th>
            <th class="topic">No. Telepon</th>
            <th class="topic">Username</th>
            <th class="topic">Password</th>
            <th class="topic">Opsi</th>
          </tr>
          <tr class="details" align="center" >
            <td class="topic">1</td>
            <td class="topic">Bapak Andre</td>
            <td class="topic">APTIKA DISKOMINFO Bangkalan</td>
            <td class="topic">123456</td>
            <td class="topic">aawdsawdsawds</td>
            <td class="topic">123456</td>
            <td class="topic">username</td>
            <td class="topic">password</td>
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