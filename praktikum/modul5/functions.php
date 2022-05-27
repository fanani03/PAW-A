<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

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

    $nrp = $data["nrp"];
    $ketemu = query("SELECT nrp FROM tbl_mahasiswa WHERE nrp = $nrp");
    if (!$nrp == $ketemu) {
        $nama = $data["nama"];
        $email = $data["email"];
        $alamat = $data["alamat"];
        //query insert data
        $query = "INSERT INTO tbl_mahasiswa
                VALUES
                ('$nrp', '$nama', '$email', '$alamat')
            ";
        mysqli_query($koneksi, $query);
        //mengembalikan nilai apakah ada perubahan atau tidak
        return mysqli_affected_rows($koneksi);
    } 



    

}



function ubah($data) {
    // var_dump($data);die;
    global $koneksi;

    $nrpLama = $data["nrp"];
    $nrpBaru = $data["nrpBaru"];

    $ketemu = query("SELECT nrp FROM tbl_mahasiswa WHERE nrp = $nrpBaru");
    // var_dump($ketemu);die;
    if (!$nrpBaru == $ketemu) {
        $nama = $data["nama"];
        $email = $data["email"];
        $alamat = $data["alamat"];
    
        
        $query = "UPDATE tbl_mahasiswa SET
                    
                    nrp = '$nrpBaru',
                    nama = '$nama',
                    email = '$email',
                    alamat = '$alamat'
                    
                WHERE nrp = '$nrpLama'
                ";
        // proses ke database
        mysqli_query($koneksi, $query); 
        return mysqli_affected_rows($koneksi);

    }

}


function hapus_transaksi($nrp) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE nrp=$nrp");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}
?>