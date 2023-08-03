@extends('layout/main')

@section('container')

    <h3>Halaman Absensi</h3>
    <div class="card shadow p-3 mb-5 rounded">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="id_absensi">No</label>
                    <input type="text" name="id_absensi" id="id_absensi" class="form-control" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="id_Peserta">Nama</label>
                    <input type="text" name="id_Peserta" id="id_Peserta" class="form-control" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control" placeholder="Isi data">
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type="datetime-local" name="waktu" id="waktu" class="form-control" placeholder="Isi data">
                </div>
                <div class="form-group">
                    <label for="tanggal">Alasan Tidak Masuk</label>
                    <input type="text" name="waktu" id="waktu" class="form-control" placeholder="Isi data">
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
    

@endsection