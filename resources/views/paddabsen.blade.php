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
        width: 200px; /* Atur lebar dropdown sesuai kebutuhan */
    }

</style>
<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title"> Tambah Absen Mahasiswa</div><br>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input text">
                    <label for="">Nama Lengkap</label>
                    <input type="name">
                </div>
                <div class="input text">
                    <label for="waktu">Tanggal</label>
                    <input type="datetime-local" name="waktu" id="waktu" class="form-control" placeholder="Isi data" autocomplete="bday-month" readonly>
                </div>
                <div class="input text">
                    <label for="status">Status</label>
                    <select id="status" name="status" style="">
                        <option value="">Pilih status kehadiran</option>
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="sakit">Sakit</option>
                    </select>
                </div>
                <div class="input text">
                    <label for="">Kegiatan</label>
                    <input type="name">
                </div> <br>
                <div class="submit" >
                    <input type="submit" value="Simpan" onclick="return confirm('Data Berhasil Ditambahkan')">
                </div><br>
            </form>
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
