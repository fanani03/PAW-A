<?php


include 'functions.php';


if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil dimasukkan')
                document.location.href = 'index.php';
                </script>
                ";
    } else {
        echo "<script>
                    alert('Data gagal dimasukkan')
                    document.location.href = 'index.php';
              </script>
            ";
    }
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Tambah Siswa</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
    <style>
        .container {
            width: 40%;
            margin: auto;
            margin-top: 2%;
            align-items: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">TAMBAH DATA MAHASISWA</a>
                </li>
                </ul>
            </div>
    </nav>
    <div class="container">
        <h1>Tambah Data</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM Mahasiswa" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  placeholder="Nama Mahasiswa" name="nama" id="nama" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat Mahasiswa" name="alamat" id="alamat" required>  
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" class="form-control" name="semester" placeholder="Semester Mahasiswa" id="semester" required> 
            </div>

            <br><button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
        </form>
    </div>
</body>
</html>