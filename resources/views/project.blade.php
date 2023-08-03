@extends('layout/main')

@section('container')


    <div class="card shadow p-3 mb-5 rounded">
        <div class="card-body">
            <h3>Upload File Project</h3>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="nimnisn">NIM/NISN</label>
                    <input type="text" name="nimnisn" id="nimnisn" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="project">Project</label>
                    <input type="file" name="project" id="project" class="form-control" readonly>
                </div><br>
                <div>
                    <button type="submit" name="tambah" class="btn btn-primary"><span class="bi bi-save"></span></button>
                    <a href="?page=user" class="btn btn-warning"><span class="bi bi-arrow-left"></span></a>
                </div>
            </form>
        </div>
    </div>
    

@endsection