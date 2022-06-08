<?php

session_start();

// set yang bisa masuk hanya admin
if (isset($_SESSION["login"]) ) {
    // $_SESSION["logged_in_user"] = '';
    if ($_SESSION["level"] != 'admin') {
        header("Location: index.php");
        exit;
    }
}

require 'functions.php';
    
// $sql = mysqli_query($koneksi, "SELECT status FROM tbl_transaksi WHERE id_transaksi = '$_GET[id]'");
// $sqlCheck = mysqli_fetch_assoc($sql);

if ( $_GET['stat'] == 'pending' ) {
    $sesi = $_SESSION['logged_in_user'];
    // var_dump($sesi);die;
    $edit_status = mysqli_query($koneksi, "UPDATE tbl_transaksi SET status ='proses', id_admin = '$sesi' WHERE id_transaksi = '$_GET[id]'");
    if(isset($edit_status)){
        if(!$edit_status){
            echo "<script>
            alert('Perubahan Gagal');
            document.location.href = 'admin-dashboard.php'
            </script>";
        ;
        }else {
            echo "<script>
            alert('Perubahan Berhasil');
            document.location.href = 'admin-dashboard.php';
            </script>";
        }
    }
} else if ( $_GET['stat'] == 'tolak' ) {
    $edit_status = mysqli_query($koneksi, "UPDATE tbl_transaksi SET status ='tolak' WHERE id_transaksi = '$_GET[id]'");
    if(isset($edit_status)){
        if(!$edit_status){
            echo "<script>
            alert('Perubahan Gagal');
            document.location.href = 'admin-dashboard.php'
            </script>";
        ;
        }else {
            echo "<script>
            alert('Perubahan Berhasil');
            document.location.href = 'admin-dashboard.php';
            </script>";
        }
    }
}
?>