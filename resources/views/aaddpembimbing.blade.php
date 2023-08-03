@extends('layout/main2')

@section('container2')
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

</style>
<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title"> Tambah Data Pembimbing KP</div><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input text">
                    <label for="">Nama Lengkap </label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="">Jabatan</label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="">NIP</label>
                    <input type="number">
                </div>
                <div class="input text">
                    <label for="">Email</label>
                    <input type="email">
                </div>
                <div class="input text">
                    <label for="">No. Telepon</label>
                    <input type="number">
                </div>
                <div class="input text">
                    <label for="">Username</label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="">Password</label>
                    <input type="password">
                </div><br>
                <div class="submit" >
                    <input type="submit" value="Simpan" onclick="return confirm('Data Berhasil Ditambahkan')">
                </div><br>
            </form>
        </div>
    </div>
</div>

@endsection
