@extends('layout/main3')

@section('container3')

<div class="home-content">
  <div class="sales-boxes">
    <div class="recent-sales box">
      <div class="title">Nilai</div><br>
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
            </td>
            <td>
              <a href="#" style="background-color: #007bff" class="btn-icon" ><i class="fas fa-plus" style="color: rgb(255, 255, 255)"></i></a>
              <a href="#" style="background-color: #ffc107" class="btn-icon" ><i class="bi bi-pencil"></i></a> 
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

  
  @endsection