@extends('layouts.admin')

@section('content')

<form action="{{ route('pasien.store')}}" method="POST">
    @csrf
        <div>
            <label for="">No berobat</label>
            <input class="form-control" type="number" id="no" name="no" placeholder="Masukkan no berobat" aria-label="default input example">
        </div>
        <div>
            <label for="">NIK</label>
            <input class="form-control" type="number" id="nik" name="nik" placeholder="Masukkan nik" aria-label="default input example">
        </div>
        <div>
            <label for="">Jenis berobat</label>
            <input class="form-control" type="text" id="bpjs" name="bpjs" placeholder="umum atau no bpjs" aria-label="default input example">
        </div>
        <div>
            <label for="">Nama</label>
            <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan nama" aria-label="default input example">
        </div>
        <div>
            <label for="">Tanggal lahir</label>
            <input class="form-control" type="date" id="tanggal" name="tanggal"  aria-label="default input example">
        </div>
        <div>
            <label for="">Tempat lahir</label>
            <input class="form-control" type="text" id="tempat" name="tempat" placeholder="Tempat lahir" aria-label="default input example">
        </div>
        <div>
            <label for="">Alamat</label>
            <input class="form-control" type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" aria-label="default input example">
        </div>
        <div>
            <label for="">Gol darah</label>
            <input class="form-control" type="text" id="darah" name="darah" placeholder="" aria-label="default input example">
        </div>
        <div>
            <label for="">No hp</label>
            <input class="form-control" type="text" id="hp" name="hp" placeholder="Masukkan no hp" aria-label="default input example">
        </div>
        <hr>
        <div>
            <button name="simpan" type="submit" class="btn btn-success">Simpan</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        </div>
  </form>
@endsection