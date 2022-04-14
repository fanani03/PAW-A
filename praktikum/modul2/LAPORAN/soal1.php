<?php 
    function jumlah($x,$y) {
        echo $x + $y;
    }
    function kali($x,$y) {
        echo $x * $y;
    }
    function bagi($x,$y) {
        echo $x / $y;
    }
    echo "<h1>Modul V PHP Fungsi</h1><p>Nama/NRP : Ahmad Fanani/200411100143</p>";
    echo "<b>Pemanggil fungsi Jumlah()</b><br>";
    echo "Jumlah x + y : ", jumlah(4,5), "<br>";
    echo "Jumlah x + y : ", jumlah(4,6), "<br>";
    echo "Jumlah x + y : ", jumlah(4,7), "<br>";

    echo "<b>Pemanggil fungsi Kali()</b><br>";
    echo "Jumlah x * y : ", kali(4,2), "<br>";
    echo "Jumlah x * y : ", kali(4,3), "<br>";
    echo "Jumlah x * y : ", kali(4,4), "<br>";

    echo "<b>Pemanggil fungsi Bagi()</b><br>";
    echo "Jumlah x / y : ", bagi(4,2), "<br>";
    echo "Jumlah x / y : ", bagi(4,3), "<br>";
    echo "Jumlah x / y : ", bagi(4,5), "<br>";
?>