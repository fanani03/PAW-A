<?php 

echo "Ahmad Fanani/200411100143<br>";
$arrayhari = [
    "Friday" => "Jumat",
    "Saturday" => "Sabtu",
    "Sunday" => "Minggu",
];

$arraybulan = [
    "03" => "Maret",
    "04" => "April",
    "05" => "Mei"
];

$hari = $arrayhari[date('l')];
$bulan = $arraybulan[date('m')];

echo "Sekarang Hari $hari : Tanggal ". date('d'). $bulan. date('Y');

?>