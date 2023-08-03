@extends('layout/main3')

@section('container3')
<style>
    form {
        border-radius: 7px;
    }
    form div.input {
        background: #dfebff;
        padding: 5px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        border-radius: 7px;
    }
    form div.input:hover {
        background: #eef4ff;
    }
    form div.text input:hover {
        border: 1px solid #000000;
    }
    form div.file input:hover {
        border: 1px solid #000000;
    }
    form div.text input:focus {
        border: 1px solid rgb(0, 0, 0);
    }
    form div.file input:focus {
        border: 1px solid rgb(0, 0, 0);
    }
    form div.input label {
        width: 150px;
        font-weight: 900;
        cursor: pointer;
        margin-right: 10px;
    }
    form div.text input {
        padding: 5px;
        border: 1px solid #cccccc;
        flex: 1;
    }
    form div.file input {
        padding: 5px;
        border: 1px solid #cccccc;
        flex: 1;
    }
    form div.submit input {
        background: #dfebff;
        cursor: pointer;
        margin-left: 550px;
        font-weight: 900;
        width: 80px;
        height: 40px;
        border-radius: 7px;
        border: none;
    }
    form div.input select {
        padding: 5px;
        border: 1px solid #cccccc;
        flex: 1;
        width: 200px; 
    }

</style>
<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title"> Tambah Project Mahasiswa</div><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input text">
                    <label for="">Pembimbing KP</label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="">Nama Project</label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="">Ketentuan</label>
                    <input type="name">
                </div> <br>
                <div class="submit" >
                    <input type="submit" value="Simpan" onclick="return confirm('Data Berhasil Ditambahkan')">
                </div><br>
            </form>
        </div>
    </div>
</div>
@endsection
