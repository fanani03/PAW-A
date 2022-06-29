<?php

// koneksi ke database  dengan parameter nama host, username, paswd, nama dabatase
$koneksi = mysqli_connect("localhost", "root", "", "legalisir");

// proses mengambil tiap isi di database
function query($query) {
    global $koneksi;

    // lemari
    $result = mysqli_query($koneksi, $query);
    //menyiapkan data kosong
    $rows = [];

    // Proses memasukkan tiap isi kedalam $rows
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// ===================SISWA===============================================

// ===================SISWA===============================================
function ajukan($data) {
    global $koneksi;
    $nama = $data["nama"];
    $nis = $data["nis"];
    $namaFile = $data["namaFile"];
    $status = 'pending';
    $berkas = upload();
    // var_dump($berkas);
    if ( !$berkas) {
        return false;
    }
    // var_dump($status);die;
    // var_dump($berkas);die;
    //query insert data
    $query = "INSERT INTO tbl_transaksi
                VALUES
                ('','$nis', NULL,'$nama', '$namaFile', '$status', '$berkas')
            ";


    // var_dump($query);die;
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload() {
    // ambil isi dari $_FILES masukkan ke variabel
    $namaFile = $_FILES['berkas']['name'];
    $namaUser = $_SESSION['logged_in_user'];
    $ukuranFile = $_FILES['berkas']['size'];
    $error = $_FILES['berkas']['error'];
    $tmpName = $_FILES['berkas']['tmp_name'];

    // cek apakah tidak ada file yang di upload
    if ($error === 4) {
        echo "<script>
                alert('pilih berkas terlebih dahulu');
            </script>";
        return false;
    }

    $namaFileBaru = $namaUser;
    $namaFileBaru .= '-';
    $namaFileBaru .= $namaFile;

    // lolos pengecekan 
    move_uploaded_file($tmpName, 'berkas/'.$namaFileBaru);
    return $namaFileBaru;
}



// ===================SISWA===============================================

// ===================SISWA===============================================








// =====================ADMIN============================================

// =====================ADMIN============================================

function tambah($data) {
    global $koneksi;

    $nis = $data["nis"];
    $ketemu = query("SELECT nis FROM tbl_user WHERE nis = $nis");

    if (!$nis == $ketemu) {
        $nis = $data["nis"];
        $username = $data["username"];
        $pass = $data["password"];
        $nama = $data["nama"];
        $alamat = $data["alamat"];
    
        //query insert data
        $query = "INSERT INTO tbl_user
                VALUES
                ('$nis','$username', '$pass', '$nama', '$alamat')
            ";
        mysqli_query($koneksi, $query);
        //mengembalikan nilai apakah ada perubahan atau tidak
        return mysqli_affected_rows($koneksi);
    }


}


function tambahAdmin($data) {
    global $koneksi;
    // var_dump($data);die;
    // ambil data tiap elemen
    $nip = $data["nip"];
    $username = $data["username"];
    $pass = $data["password"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];

    //query insert data
    $query = "INSERT INTO tbl_admin
            VALUES
            ('','$username', '$pass', '$nama', '$nip','$alamat')
        ";
    mysqli_query($koneksi, $query);
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}


function simpan($data) {
    global $koneksi;
    $nis = $data["nis"];
    $namaFile = $data["namaFile"];
    $nosertif = $data["nosertif"];
    $berkas = upload_simpan();
    if ( !$berkas) {
        return false;
    }
    // var_dump($status);die;
    $querysertifikat = "SELECT no_sertifikat FROM tbl_simpan
                        WHERE no_sertifikat=$nosertif";
    mysqli_query($koneksi, $querysertifikat);
    if ( mysqli_affected_rows($koneksi) > 0 ) {
        echo "<script>
            alert('Nomor Sertifikat Telah Ada')
        </script>";
        return false;
    }
    //query insert data
    $query = "INSERT INTO tbl_simpan
                VALUES
                ('','$nis','$namaFile','$nosertif', '$berkas')
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


function upload_simpan() {
    // ambil isi dari $_FILES masukkan ke variabel
    $namaFile = $_FILES['berkas']['name'];
    $ukuranFile =$_FILES['berkas']['size'];
    $error = $_FILES['berkas']['error'];
    $tmpName = $_FILES['berkas']['tmp_name'];

    // cek apakah tidak ada file yang di upload
    if ($error === 4) {
        echo "<script>
                alert('pilih berkas terlebih dahulu');
            </script>";
        return false;
    }

    // lolos pengecekan 
    move_uploaded_file($tmpName, 'berkas_jadi/'.$namaFile);
    return $namaFile;
}


function ubah($data) {

    // var_dump($data);die;
    
    global $koneksi;
    $nis = $data["nis"];
    $username = $data["username"];
    $pass = $data["password"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];

    
    $query = "UPDATE tbl_user SET
                nis = '$nis',
                username = '$username',
                password = '$pass',
                nama = '$nama',
                alamat = '$alamat'
            WHERE nis = '$nis'
            ";

    mysqli_query($koneksi, $query); 
    return mysqli_affected_rows($koneksi);
}


function ubahAdmin($data) {
    
    
    global $koneksi;
    $id_admin = $data['id_admin'];
    // var_dump($id_admin);die;
    $username = $data['username'];
    $password = $data['password'];
    $nama = $data['nama'];
    $nip = $data['nip'];
    $alamat = $data['alamat'];

    $query = "UPDATE tbl_admin SET
                id_admin = '$id_admin',
                username = '$username',
                password = '$password',
                nama = '$nama',
                nip = '$nip',
                alamat = '$alamat'
                WHERE id_admin = '$id_admin'";
    mysqli_query($koneksi, $query); 
    return mysqli_affected_rows($koneksi);
                
}


function update($data){
    global $koneksi;
    $nis = $data["nis"];
    $idtrans = $data["idtrans"];
    $namaFile = $data["namaFile"];
    $nosertif = $data["nosertif"];

    $berkas = upload_simpan();
    if ( !$berkas) {
        return false;
    }

    $edit_simpan = mysqli_query($koneksi, "INSERT INTO tbl_simpan
    VALUES
    ('','$nis','$idtrans', '$namaFile','$nosertif', '$berkas')");
    $edit_trans = mysqli_query($koneksi, "UPDATE tbl_transaksi SET status ='selesai' WHERE id_transaksi = '$_GET[id]'");
    return mysqli_affected_rows($koneksi);    
}



// =====================ADMIN============================================

// =====================ADMIN============================================






function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_user WHERE nis=$id");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}

function hapus_transaksi($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_transaksi WHERE id_transaksi=$id");
    //mengembalikan nilai apakah ada perubahan atau tidak
    return mysqli_affected_rows($koneksi);
}










?>