@extends('layout/main3')

@section('container3')

<div class="home-content">
  <div class="overview-boxes">
    <div class="box">
      <div class="right-side">
        <div class="box-topic">Jumlah</div>
        <div class="number">1</div>
        <div class="indicator">
          <i class='bx bx-user'></i>
          <span class="text">Data Mahasiswa</span>
        </div>
      </div>
      <i class='bx bx-user cart'></i>
    </div>
    <div class="box" style="position: absolute;  left: 400px;">
      <div class="right-side">
        <div class="box-topic">Jumlah</div>
        <div class="number">2</div>
        <div class="indicator">
          <i class='bx bx-user'></i>
          <span class="text">Notifikasi Absensi</span>
        </div>
      </div>
      <i class='bx bxs-user cart two' ></i>
    </div>
  
  @endsection