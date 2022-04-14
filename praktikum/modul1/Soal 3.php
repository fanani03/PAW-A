<?php 
echo "<h1>Variable Local dan Variable Global</h1>";
echo "Nama/NRP : Ahmad Fanani/200411100143<br><br>";

$sisi = 7;

function luasPersegi_varLokal(){
    $sisi = 5;
    $hitung = $sisi * $sisi;
    return $hitung;
}

function luasPersegi_varGlobal(){
    global $sisi;
    $hitung = $sisi * $sisi;
    return $hitung;
}
echo "Variable Lokal ".luasPersegi_varLokal(). "<br>";
echo "Variable Global ".luasPersegi_varGlobal(). "<br>";
?>