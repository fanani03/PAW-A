<?php

$koneksi = mysqli_connect("localhost", "root", "", "fanani");

function query($query) {
    global $koneksi;

    // lemari
    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        // var_dump($row);
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $koneksi;
    // ambil data tiap elemen
    $nim = $data["nim"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $semester = $data["semester"];

    //query insert data
    $query = "INSERT INTO tbl_143
            VALUES
            ('$nim', '$nama', '$alamat', '$semester')
        ";
    mysqli_query($koneksi, $query);
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}



function ubah($data) {
    
    global $koneksi;
    $nim = $data["nim"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $semester = $data["semester"];

    
    $query = "UPDATE tbl_143 SET
                nama = '$nama',
                alamat = '$alamat',
                semester = '$semester'
            WHERE nim = '$nim'
            ";
// var_dump($query);die;
// proses ke database
mysqli_query($koneksi, $query); 
return mysqli_affected_rows($koneksi);
}




function hapus_transaksi($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_143 WHERE nim=$id");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}
?>