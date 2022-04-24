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
    <title>Tambah Data</title>

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
        <h1>Tambah Data</h1>
        <form method="POST" action="">

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  placeholder="Nama" name="nama" id="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" id="email" required> 
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" required>  
            </div>

            <br><button type="submit" name="submit" class="btn btn-primary">KIRIM</button>
        </form>
    </div>
</body>
</html>