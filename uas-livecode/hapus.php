<?php


include 'functions.php';
$id = $_GET["id"];
// var_dump($nim);die;
if (hapus_transaksi($id)) {
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