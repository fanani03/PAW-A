<?php
session_start();

// set yang bisa masuk hanya admin
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} else {
    if ($_SESSION['level'] != 'superuser') {
        header("Location: login.php");
        exit;
    }
}

require 'functions.php';
$id_admin = $_GET["id"];


mysqli_query($koneksi, "DELETE FROM tbl_admin WHERE id_admin = $id_admin");
// var_dump($nis);die;
if (mysqli_affected_rows($koneksi) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus!');
            document.location.href = 'super-dashboard.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!!!');
            document.location.href = 'super-dashboard.php';
        </script>
        ";
}
?>