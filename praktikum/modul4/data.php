<?php

session_start();

if ($_SESSION == NULL){
    header('Location: login.php');
}

if (isset($_POST['logout']) ) {
    session_destroy();
    header('Location: login.php');
}

$data = array(
    array("Ahmad Fanani",200411100143, "Jombang"),
    array("Yoga Tirta Permana",200411100142,"Mojokerto"),
    array("A. Teguh Budi Setya P.",200411100144,"Nganjuk"),
    array("Mahesa Firdaus",200411100146,"Sidoarjo")
)

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 70%;
            margin: auto;
            margin-top: 100px;   
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table border="1px" width="100%">
            <tr bgcolor="yellow">
                <th>
                    Nama Mahasiswa
                </th>
                <th>
                    NIM
                </th>
                <th>
                    Alamat
                </th>
            </tr>
            <?php
                foreach ($data as $mhs) {
                    echo "<tr>
                            <td>$mhs[0]</td>
                            <td>$mhs[1]</td>
                            <td>$mhs[2]</td>
                        </tr>";
                };
            ?>
            
        </table>

        <form method="post" action="">
        <input type="submit" name="logout" value="logout"></input>
        </form>

    </div>
</body>
</html>


