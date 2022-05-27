<?php


include 'functions.php';
$nrp = $_GET["nrp"];
// var_dump($nrp);die;
if (hapus_transaksi($nrp)) {
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