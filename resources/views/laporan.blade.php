@extends('layout/main')

@section('container')

<div class="card shadow p-3 mb-5 rounded">
    <div class="card-body">
        <h5 class="card-title">Laporan Kegiatan</h5>
        <div class="table-responsive" style="margin-top:10px;">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kegiatan</th>
                        <th>Waktu Awal</th>
                        <th>Waktu Akhir</th>
                        <th>Tanggal</th>
                        <th>Paraf Pembimbing</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center">
                        <a href="?page=pembeli&act=del&kd_pembeli=" class="btn btn-warning" onclick="return confirm('Yakin anda akan cetak laporan ini?')"><span class="bi bi-printer-fill"></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection