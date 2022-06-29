<?php


include 'functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM tbl_xyz WHERE id_xyz=$id");


if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil dirubah')
                document.location.href = 'index.php';
                </script>
                ";
    } else {
        echo "<script>
                    alert('Data gagal dirubah')
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
    
    <div class="container">
        <h1>Edit Data</h1>
        <form method="post" action="">
            <input type="text" name="id_xyz" id="id" value="<?=  $data['0']['id_xyz']?>" hidden>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  value="<?=  $data['0']['nama_xyz']?>" name="nama_xyz" id="nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email_xyz"value="<?=  $data['0']['email_xyz']?>" id="email"> 
            </div>
            <div class="form-group">
                <label for="alamat">Jenis Kelamin</label>
                <input type="text" class="form-control" value="<?=  $data['0']['jk_xyz']?>" name="jk_xyz" id="jeniskelamin">  
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="<?=  $data['0']['alamat_xyz']?>" name="alamat_xyz" id="alamat">  
            </div>

            <br><button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
        </form>
    </div>
</body>
</html>