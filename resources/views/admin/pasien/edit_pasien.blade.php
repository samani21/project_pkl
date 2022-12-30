@extends('layouts.admin')

@section('content')

<form action="{{url('updatepasien',$pasien->id)}}" method="POST">
    @csrf
        <div>
            <label for="">No berobat</label>
            <input class="form-control" type="number" id="no" name="no" value="{{$pasien->no}}"  placeholder="Masukkan no berobat" aria-label="default input example">
        </div>
        <div>
            <label for="">NIK</label>
            <input class="form-control" type="number" id="nik" name="nik" value="{{$pasien->nik}}" placeholder="Masukkan nik" aria-label="default input example">
        </div>
        <div>
            <label for="">Jenis berobat</label>
            <input class="form-control" type="text" id="bpjs" name="bpjs" value="{{$pasien->bpjs}}" placeholder="umum atau no bpjs" aria-label="default input example">
        </div>
        <div>
            <label for="">Nama</label>
            <input class="form-control" type="text" id="nama" name="nama"  value="{{$pasien->nama}}" placeholder="Masukkan nama" aria-label="default input example">
        </div>
        <div>
            <label for="">Tanggal lahir</label>
            <input class="form-control" type="date" id="tanggal" name="tanggal" value="{{$pasien->tanggal}}" aria-label="default input example">
        </div>
        <div>
            <label for="">Tempat lahir</label>
            <input class="form-control" type="text" id="tempat" name="tempat" value="{{$pasien->tempat}}" placeholder="Tempat lahir" aria-label="default input example">
        </div>
        <div>
            <label for="">Alamat</label>
            <input class="form-control" type="text" id="alamat" name="alamat" value="{{$pasien->alamat}}" placeholder="Masukkan alamat" aria-label="default input example">
        </div>
        <div>
            <label for="">Gol darah</label>
            <input class="form-control" type="text" id="darah" name="darah" value="{{$pasien->darah}}" placeholder="" aria-label="default input example">
        </div>
        <div>
            <label for="">No hp</label>
            <input class="form-control" type="text" id="hp" name="hp" value="{{$pasien->hp}}" placeholder="Masukkan no hp" aria-label="default input example">
        </div>
        <hr>
        <div>
            <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
            <button class="btn btn-danger" type="reset">Reset</button>
        </div>
  </form>
@endsection