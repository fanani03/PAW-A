<?php
    echo "<h1>Modul IV PHP Kondisional</h1>";
    echo "Nama/NRP : Ahmad Fanani/200411100143<br><br>";
    $arrayHari = [
        "Monday" => "Senin",
        "Tuesday" => "Selasa",
        "Wednesday" => "Rabu",
        "Thursday" => "Kamis",
        "Friday" => "Jumat",
        "Saturday" => "Sabtu",
        "Sunday" => "Minggu"
    ];
    $arrayBulan = [
        "01" => "Januari",
        "02" => "Februari",
        "03" => "Maret",
        "04" => "April",
        "05" => "Mei",
        "06" => "Juni",
        "07" => "Juli",
        "08" => "Agustus",
        "09" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "Desember"
    ];
    $hari = $arrayHari[date('l')];
    $bulan = $arrayBulan[date('m')];
    echo "<b>Sekarang Hari $hari : Tanggal ".  date('d') . " $bulan " . date('Y')."</b>";
?>