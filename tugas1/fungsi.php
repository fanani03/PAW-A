
<!-- Menghitung BMI -->

<?php

    function hitungBMI ($tinggi, $berat) {
        $tinggi = $tinggi * 0.01;
        $bmi = $berat / ($tinggi * $tinggi);
        if ($bmi < 18.5) {
            return 'Kurus';
        }
        elseif ($bmi > 18.5 and $bmi < 24.9){
            return 'Normal';
        }
        else {
            return 'Gemuk';
        }
    }

//Kategori kurus

echo ("MENGHITUNG BMI<br>");

$tinggiBadan = 150;
$beratBadan = 20;
echo ("Tinggi $tinggiBadan cm Berat $beratBadan kg = ".hitungBMI($tinggiBadan,$beratBadan));


//Kategori Normal
$tinggiBadan = 150;
$beratBadan = 50;
echo ("<br>Tinggi $tinggiBadan cm Berat $beratBadan kg = ".hitungBMI($tinggiBadan,$beratBadan));


//Kategori Gemuk
$tinggiBadan = 150;
$beratBadan = 80;
echo ("<br>Tinggi $tinggiBadan cm Berat $beratBadan kg = ".hitungBMI($tinggiBadan,$beratBadan));

?>