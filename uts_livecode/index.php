<?php

include 'functions.php';
$data = query("SELECT * FROM tbl_fanani");
// var_dump($data);die;
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
    <div class="container">
    <a href="tambah.php"><button type="button" class="btn btn-primary">TAMBAH DATA</button></a><br>
        <table class="table table-striped">
        <thead style="background-color: cyan;">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <?php $angka = 1; ?>
                <?php foreach($data as $row): ?>
                <td><?= $angka ?></td>
                <td><?= $row["nama_fanani"] ?></td>
                <td><?= $row["email_fanani"] ?></td>
                <td><?= $row["alamat_fanani"] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_fanani']?>"><button type="button" class="btn btn-primary">UBAH</button></a>
                <a href="hapus.php?id=<?=$row['id_fanani']?>"><button type="button" class="btn btn-danger">HAPUS</button></a>
            </td>
            </tr>
            <?php $angka++;?>
            <?php endforeach;?>
        </tbody>
        </table>

    </div>
</body>
</html>