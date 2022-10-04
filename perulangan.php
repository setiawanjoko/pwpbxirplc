<?php

// for( batasan_awal; batasan_akhir; step )
for( $i = 0; $i < 10; $i++ ){
    echo "Ini perulangan ke-" . $i;
    echo "<br>";
}

$bilangan = 5;
$listrikNyala = rand() % 2;
while($bilangan < 4){
    echo "Listrik menyala? " . $listrikNyala;
    echo "<br>";
    $listrikNyala = rand() % 2;
}

do{
    echo "Lampu menyala? " . $listrikNyala;
    echo "<br>";
    $listrikNyala = rand() % 2;
} while($bilangan < 4);

$arr = [38, 78, 88, 77, 23, 4, 15, 43];
foreach($arr as $value){
    echo "Nilai array = " . $value;
    echo "<br>";
}


/*
    1. Buatlah diagram sebagai berikut:

    1
    2 4
    3 6  9
    4 8  12 16
    5 10 15 20 25


*/

echo "<br>";
// $i = baris      $j = kolom
for($i = 1; $i <= 5; $i++ ){
    for($j = 1; $j <= $i; $j++){
        echo $i*$j . " ";
    }
    echo "<br>";
}

echo "<br>";
for($baris = 1; $baris <= 5; $baris++){
    for($kolom = 1; $kolom <= $baris; $kolom++ ){
        echo $baris*$kolom . " ";
    }
    echo "<br>";
}

$anggotaKelas = [
    [21452, "Nopa Jaya"],
    [21453, "Noval Fitra"],
    [21454, "Nur Hendra"],
    [21455, "Radeva Adhitya"],
    [21456, "Radithya Putra"],
    [21457, "Rafi Apta"],
    [21458, "Rafi Rizky"],
    [21459, "Regan Rafid"],
    [21460, "Reyhan Fajar"],
    [21461, "Reza Ahmad"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan Perulangan dengan PHP</title>
    <style>
        table, th, td {
            border: solid 1px black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <ol>
        <?php
            foreach($anggotaKelas as $anggota){
                [$nis, $nama] = $anggota;
                echo "<li>" . $nis . " " . $nama . "</li><br>";
            }
        ?>
    </ol>

    <!--

    +-------+---------------
    | NIS   | NAMA SISWA   
    +-------+---------------
    | 21452 | Nopa Jaya
    .
    .
    .
    .

     -->

    <table>
        <thead>
            <tr>
                <th>No. Induk</th>
                <th>Nama Siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($anggotaKelas as $siswa){
                    echo "<tr>";
                    echo "<td>$siswa[0]</td>";
                    echo "<td>$siswa[1]</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>