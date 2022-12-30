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
                        <td><h5>{{$berobat->no}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>NIK</b></h5></td>
                        <td><h5>{{$berobat->nik}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Jenis berobat</b></h5></td>
                        <td><h5>{{$berobat->bpjs}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>No BPJS</b></h5></td>
                        <td><h5>{{$berobat->bpjs}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Nama</b></h5></td>
                        <td><h5>{{$berobat->nama}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tanggal lahir</b></h5></td>
                        <td><h5>{{$berobat->tanggal}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tempat lahir</b></h5></td>
                        <td><h5>{{$berobat->tempat}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Alamat</b></h5></td>
                        <td><h5>{{$berobat->alamat}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Gol darah</b></h5></td>
                        <td><h5>{{$berobat->darah}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>No hp</b></h5></td>
                        <td><h5>{{$berobat->hp}}</h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tanggal berobat</b></h5></td>
                        <td><h5>{{$berobat->hp}}</h5></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><h5><b>Dokter</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Perawat</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Keluhan</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Sistolik</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Diastolik</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Tinggi badan</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Berat badan</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Suhu</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Saturasi</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Napas</b></h5></td>
                    </tr>
                    <tr>
                        <td><h5><b>Diagnosa</b></h5></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <table class="table table-striped">
        <td><h5><b>Obat</b></h5></td>
        <td>djahsdfjk</td>
    </table>
 </div>
@endsection