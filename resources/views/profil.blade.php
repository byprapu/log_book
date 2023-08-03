@extends('layout/main')

@section('container')

<section style="background-color: #eee;">
    <div class="container py-5">
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="img/Alfin Zainuri.jpg" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">Alfin Zainuri</h5>
              <SPAn class="text-muted">Sistem Informasi</SPAn>
              <p class="text-muted mb-4">Universitas Trunojoyo Madura</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <h3 align="center">Identitas Lengkap</h3>
              <br><br>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Alfin Zainuri</p>
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
                  <p class="mb-0">Pembimbing kp</p>
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
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Project</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Log Book Magang</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mulai Magang</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">22 Juni 2023</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Akhir Magang</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">22 September 2023</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">No. Telepon</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">087773956782</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">alfinzainuri11@gmail.com</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Username</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Password</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Password</p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="card shadow p-3 mb-5 rounded">
                <div class="card-body">
                    <h3 align="center">Edi Profil</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                            <label for="nimnisn">NIM/NISN</label>
                            <input type="text" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Jurusan</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">NIM/NISN</label>
                          <input type="text" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Sistem Informasi</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">Instansi</label>
                          <input type="text" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Pembimbing KP</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">OPD</label>
                          <input type="text" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Project</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">Mulai Magang</label>
                          <input type="date" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Akhir Magang</label>
                          <input type="date" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">No. Telepon</label>
                          <input type="text" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nimnisn">Email</label>
                          <input type="date" name="nimnisn" id="nimnisn" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="nama">Username</label>
                          <input type="date" name="nama" id="nama" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" id="password" class="form-control" placeholder="Isi data">
                        </div>
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <input type="file" name="foto" id="foto" class="form-control" placeholder="Isi data">
                        </div><br>
                        <div align="center">
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
  </section>
  @endsection