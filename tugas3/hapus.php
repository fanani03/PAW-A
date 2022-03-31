<?php


include 'functions.php';
$nim = $_GET["nim"];
// var_dump($nim);die;
if (hapus_transaksi($nim)) {
    echo "
        <script>
            alert('data berhasil di hapus!');
            document.location.href = 'index.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus!!!');
            document.location.href = 'index.php';
        </script>
        ";
}
?>