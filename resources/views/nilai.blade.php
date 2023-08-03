@extends('layout/main')

@section('container')

<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Nilai Magang</h5> <br>
        <div class="table-responsive" style="margin-top:10px;">
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Nama Lengkap</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">NIM/NISN</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">200441100067</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Jurusan</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Sistem Informasi</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Instansi</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Universitas Trunojoyo Madura</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Pembimbing</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Pak Andre</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">OPD</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Aptika Kominfo Bangkalan</p>
                </div>
              </div>
              <hr>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Variabel Penilaian</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td>1</td>
                        <td>Kedisiplinan</td>
                        <td>90</td>
                        <td>A</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="card shadow p-3 mb-5 rounded">
                    <div class="card-body">
                        <h3 align="center">Form Absensi</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="waktu">Tanggal</label>
                                <input type="datetime-local" name="waktu" id="waktu" class="form-control" placeholder="Isi data">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" class="form-control" placeholder="Isi data">
                            </div>
                            <div class="form-group">
                                <label for="alasan">Kegiatan</label>
                                <input type="text" name="alasan" id="alasan" class="form-control" placeholder="Isi data">
                            </div><br>
                            <div>
                                <button type="submit" name="tambah" class="btn btn-primary"><span class="bi bi-save"></span></button>
                                <a href="?page=user" class="btn btn-warning"><span class="bi bi-arrow-left"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection