<?php

include 'functions.php';
$data = query("SELECT * FROM tbl_143");

?>


<html lang="en">
<head>
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
            width: 70%;
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
                <a class="nav-link" href="#">MAHASISWA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">DOSEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">STAFF</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <a href="tambah.php"><button type="button" class="btn btn-primary">TAMBAH MAHASISWA</button></a><br>
        <table class="table table-striped">
        <thead style="background-color: cyan;">
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Semester</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <?php $angka = 1; ?>
                <?php foreach($data as $row): ?>
                <td><?= $angka ?></td>
                <td><?php $nim= $row["nim"] ?><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td><?= $row["semester"] ?></td>
            <td>
                <a href="edit.php?nim=<?= $row['nim']?>"><button type="button" class="btn btn-primary">UBAH</button></a>
                <a href="hapus.php?nim=<?=$row['nim']?>"><button type="button" class="btn btn-danger">HAPUS</button></a>
            </td>
            </tr>
            <?php $angka++;?>
            <?php endforeach;?>
        </tbody>
        </table>

    </div>
</body>
</html>