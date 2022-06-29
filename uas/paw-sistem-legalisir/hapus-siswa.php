<?php
session_start();

// set yang bisa masuk hanya admin
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} else {
    if ($_SESSION['level'] != 'admin') {
        header("Location: login.php");
        exit;
    }
}

require 'functions.php';
$nis= $_GET["nis"];
// var_dump($nis);die;
if (hapus($nis) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus!');
            document.location.href = 'admin-list-siswa.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!!!');
            document.location.href = 'admin-list-siswa.php';
        </script>
        ";
}
?>