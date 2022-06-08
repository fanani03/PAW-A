


@extends('layouts.main')

@section('isi')

<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control"  placeholder="nrp" name="nrp" id="nrp" value="{{ $mahasiswa->nrp }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control"  placeholder="Nama" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" id="email" value="{{ $mahasiswa->email }}" required> 
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" value="{{ $mahasiswa->alamat }}" required>  
        </div>

        <br><button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
    </form>
</div>

@endsection