@extends('layouts.admin')

@section('content')
 <div class="container">
    <a href="#" onclick="goBack()" class="btn btn-warning"><i class="fa-solid fa-chevron-left"></i> Kembali</a>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    <a href="#" class="btn btn-primary"><i class="fa-solid fa-print"></i> Cetak rekam medis</a>
    <hr>
    <div class="row g-2">
        <div class="col-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><h5><b>No berobat</b></h5></td>
                        <td><h5>{{$pasien->no}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>NIK</b></h5></td>
                        <td><h5>{{$pasien->nik}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Jenis berobat</b></h5></td>
                        <td><h5>{{$pasien->bpjs}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>No BPJS</b></h5></td>
                        <td><h5>{{$pasien->bpjs}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Nama</b></h5></td>
                        <td><h5>{{$pasien->nama}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tanggal lahir</b></h5></td>
                        <td><h5>{{$pasien->tanggal}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tempat lahir</b></h5></td>
                        <td><h5>{{$pasien->tempat}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Alamat</b></h5></td>
                        <td><h5>{{$pasien->alamat}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Gol darah</b></h5></td>
                        <td><h5>{{$pasien->darah}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>No hp</b></h5></td>
                        <td><h5>{{$pasien->hp}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tanggal berobat</b></h5></td>
                        <td><h5>{{$pasien->hp}}</h5></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h3 align="center">Rekam Medis</h3>
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </thead>
            </table>
        </div>
 </div>
@endsection