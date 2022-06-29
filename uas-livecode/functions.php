<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_fanani");

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

    $nama = $data["nama_xyz"];
    $email = $data["email_xyz"];
    $jk = $data["jk_xyz"];
    $alamat = $data["alamat_xyz"];

    //query insert data
    $query = "INSERT INTO tbl_xyz
            VALUES
            ('','$nama', '$email', '$jk', '$alamat')
        ";
    mysqli_query($koneksi, $query);
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}

function ubah($data) {

    
    global $koneksi;

    $id = $data["id_xyz"];
    $nama = $data["nama_xyz"];
    $email = $data["email_xyz"];
    $jk = $data["jk_xyz"];
    $alamat = $data["alamat_xyz"];

    // var_dump($jk);die;
    
    $query = "UPDATE tbl_xyz SET
                nama_xyz = '$nama',
                email_xyz = '$email',
                jk_xyz = '$jk',
                alamat_xyz = '$alamat'
    
            WHERE id_xyz = '$id'
            ";
// var_dump($query);die;
// proses ke database
mysqli_query($koneksi, $query); 
return mysqli_affected_rows($koneksi);
}



function hapus_transaksi($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_xyz WHERE id_xyz=$id");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}
?>