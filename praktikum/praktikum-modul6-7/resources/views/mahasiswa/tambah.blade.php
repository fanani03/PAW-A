


@extends('layouts.main')

@section('isi')

<div class="container mt-5">
    <h1>Tambah Mahasiswa</h1>
    <form method="POST" action="/mahasiswa/simpan">
        @csrf
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control"  placeholder="Masukkan NRP" name="nrp" id="nrp" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control"  placeholder="Masukkan Nama" name="nama" id="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" id="email" required> 
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" id="alamat" required>  
        </div>

        <br><button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
    </form>
</div>

@endsection