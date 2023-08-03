@extends('layout/main')

@section('container')

<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">History Absensi</h5><br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Absen
        </button>
        <div class="search-box" >
            <input  type="text" id="searchInput" placeholder="Cari mahasiswa...">
        </div>
        <div class="table-responsive" style="margin-top:10px;">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Kegiatan</th>
                        <th>Status Verifikasi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
                                <input type="datetime-local" name="waktu" id="waktu" class="form-control" placeholder="Isi data" autocomplete="bday-month" readonly>
                            </div>
                            <div class="form-group">
                                <label for="status">Status Kehadiran</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih status kehadiran</option>
                                    <option value="hadir">Hadir</option>
                                    <option value="izin">Izin</option>
                                    <option value="sakit">Sakit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alasan">Kegiatan</label>
                                <input type="text" name="alasan" id="alasan" class="form-control" placeholder="Isi data">
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
<script>
    // Get the current date and time in the format suitable for the datetime-local input
    function getCurrentDateTime() {
      const now = new Date();
      const year = now.getFullYear().toString().padStart(4, '0');
      const month = (now.getMonth() + 1).toString().padStart(2, '0');
      const day = now.getDate().toString().padStart(2, '0');
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      return `${year}-${month}-${day}T${hours}:${minutes}`;
    }
  
    // Set the current date and time as the default value for the datetime-local input
    document.addEventListener('DOMContentLoaded', function() {
      const inputWaktu = document.getElementById('waktu');
      inputWaktu.value = getCurrentDateTime();
    });
  </script>
@endsection