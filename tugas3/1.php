<?php
$konek = mysqli_connect('localhost','root','', 'db_coba');
if (!$konek){
    echo 'koneksi gagal';
} else {
    echo 'koneksi sukses';
};

$query = 'SELECT * FROM tbl_data';
?>