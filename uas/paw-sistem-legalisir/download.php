<?php

if(isset($_GET["berkas"]))
{
    //Read the filename
    $filename = basename($_GET["berkas"]);
    if(!$filename){
        echo "data tidak ditemukan";
    }

    // var_dump($filename);die;
    $filepath = "berkas/".$filename;
    if(empty(file_exists($filepath))){
        $filepath = "berkas_jadi/".$filename;
        // echo "file gaada";
    }
    $nama = $_GET["nama"];
    // var_dump($filename);die;
    //Check the file exists or not
    
    if( isset($filename) && file_exists($filepath)) {

    //Define header information
    header("Cache-Control:public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename= $nama - $filename");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding:binary");

    //read file
    readfile($filepath);
    exit;

    } else {
        
        echo "File does not exist.";
    }
}

else
echo "Filename is not defined."
?>