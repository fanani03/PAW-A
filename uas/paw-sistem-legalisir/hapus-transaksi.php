<?php


require 'functions.php';
$id= $_GET["id"];
// var_dump($nis);die;
if (hapus_transaksi($id) > 0) {
    echo "
        <script>
            alert('data berhasil di hapus!');
            document.location.href = 'siswa-dashboard.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!!!');
            document.location.href = 'siswa-dashboard.php';
        </script>
        ";
}
?>