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
                        <td>
                            <h5><b>No berobat</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->no}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>NIK</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->nik}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Jenis pasien</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->bpjs}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>No BPJS</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->bpjs}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Nama</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->nama}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Tanggal lahir</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->tanggal}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Tempat lahir</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->tempat}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Alamat</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->alamat}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Gol darah</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->darah}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>No hp</b></h5>
                        </td>
                        <td>
                            <h5>{{$pasien->hp}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Tanggal Berobat</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->tgl}}</h5>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>
                            <h5><b>Dokter</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->dokter}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Perawat</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->perawat}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Sistolik</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->sistolik}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Diastolik</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->diastolik}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Tinggi badan</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->tinggi}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Berat badan</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->berat}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Suhu</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->suhu}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Saturasi</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->saturasi}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Napas</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->napas}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Keluhan</b></h5>
                        </td>
                        <td>
                            <h5>{{$berobat->medis->keluhan}}</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5><b>Diagnosa</b></h5>
                        </td>
                        <td> @foreach($berobat->diagnosa as $d)
                            {{ $d->diagnosa }} ,
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <table class="table table-striped">
        <h3>Resep obat</h3>
        <thead>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Dosis</th>
        </thead>
        @foreach($berobat->resep as $a)
        <tr>
            <td>{{ $a->obat }}</td>
            <td>{{ $a->jumlah }}</td>
            <td>{{ $a->dosis }}</td>
        </tr>


        @endforeach

    </table>
</div>
@endsection