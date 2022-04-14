<?php 
    function tampilpesan (){
        echo "Haloooo GESSS";
    }
    
    function tampilnama($namaDepan, $namaBelakang) {
        echo "Halo $namaDepan $namaBelakang";
    }


    function setLebar($Lebar = 50){
        echo "Lebarnya adalah $Lebar<br>";
    }


setLebar(350);
setLebar();
setLebar(135);
setLebar(50);

tampilnama("Ahmad","Fanani");

?>