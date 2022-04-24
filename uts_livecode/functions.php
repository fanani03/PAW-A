<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_143");

function query($query) {
    global $koneksi;

    // lemari
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    // var_dump($rows);
    while( $row = mysqli_fetch_assoc($result) ) {
        // var_dump($row);
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $koneksi;

    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];

    //query insert data
    $query = "INSERT INTO tbl_fanani
            VALUES
            ('','$nama', '$email', '$alamat')
        ";
    mysqli_query($koneksi, $query);
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}

function ubah($data) {
    global $koneksi;

    $id = $data["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    
    $query = "UPDATE tbl_fanani SET
                nama_fanani = '$nama',
                email_fanani = '$email',
                alamat_fanani = '$alamat'
    
            WHERE id_fanani = '$id'
            ";
// var_dump($query);die;
// proses ke database
mysqli_query($koneksi, $query); 
return mysqli_affected_rows($koneksi);
}



function hapus_transaksi($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_fanani WHERE id_fanani=$id");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}
?>