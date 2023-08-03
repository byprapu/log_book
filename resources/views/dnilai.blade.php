@extends('layout/main2')

@section('container2')

<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Data Mahasiswa</div><br>
      <div class="sales-details">
        <table style="width: 100%" border="1">
          <tr class="details">
            <th class="topic">No</th>
            <th class="topic">Nama</th>
            <th class="topic">NIM/NISN</th>
            <th class="topic">Instansi</th>
            <th class="topic">Opsi</th>
          </tr>
          <tr class="details" align="center" >
            <td class="topic">1</td>
            <td class="topic">Alfin Zainuri</td>
            <td class="topic">200441100067</td>
            <td class="topic">Universitas Trunojoyo Madura</td>
            <td >
              <div class="button_waterpump" style="font-size: 20px " >
                <a href="#" style="background-color: #ffc107 "><i class="fas fa-print"></i></a>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
  
  @endsection