<?php
    $nama = "Setiawan Joko Prakoso";
    $nilai = 70;

    echo "Nama saya " . $nama . ", nilai pemrograman web saya adalah " . $nilai;
    echo "<br>";

    if($nilai > 70) echo "Lulus";
    else echo "Tidak lulus";

    /* 

    1. Buatlah skrip php untuk menampilkan predikat nilai dengan ketentuan sebagai berikut:
    A > 90
    90 >= B > 80
    80 >= C >= 70
    70 > D >= 60
    E < 60
    OUTPUT: Anda mendapatkan predikat [NP]

    */
    echo "<br>";

    if($nilai > 100 || $nilai < 0) echo "Nilai tidak valid";
    else {
        if($nilai > 90) echo "Anda mendapatkan predikat A";
        else if($nilai > 80 && $nilai <= 90) echo "Anda mendapatkan predikat B";
        else if($nilai >= 70 && $nilai <= 80) echo "Anda mendapatkan predikat C";
        else if($nilai >= 60 && $nilai < 70) echo "Anda mendapatkan predikat D";
        else if($nilai < 60) echo "Anda mendapatkan predikat E";
    }

    

?>

<!DOCTYPE html> <!-- menerangkan versi html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>