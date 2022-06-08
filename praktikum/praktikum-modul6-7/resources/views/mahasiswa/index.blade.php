
@extends('layouts.main')
@section('isi')


<div class="container mt-5">
        <h1>Data Mahasiswa</h1>
        <table class="table table-striped">
        <thead style="background-color: #ffbc21;">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nrp</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Operasi</th>
            </tr>
        </thead>

        <tbody>
            <?php $angka = 1?>
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $mhs->nrp }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>
                    <a href="/mahasiswa/{{ $mhs->id }}/edit"><button type="button" class="btn btn-primary">Edit</button></a><br>
                    <form action="/mahasiswa/{{ $mhs->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </td>
                <?php $angka += 1?>
            </tr>
            @endforeach
        </tbody>
        </table>

</div>

@endsection