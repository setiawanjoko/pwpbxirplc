<?php

$bilangan = [];

for($i = 1; $i <= 50; $i++ ){
    array_push($bilangan, rand(1, 200));
}
echo " array asli ";
var_dump($bilangan);

for($i = 0; $i < 50; $i++ ){
    for($j = 0; $j < 49; $j++ ){
        if($bilangan[$j] > $bilangan[$j+1]){
            $temp = $bilangan[$j];
            $bilangan[$j] = $bilangan[$j+1];
            $bilangan[$j+1] = $temp;
        }
    }
}

echo " array urut ";
var_dump($bilangan);

echo " jumlah ";
$jumlah = 0;
foreach($bilangan as $bil){
    $jumlah += $bil;
}
echo $jumlah;
echo "<br>";

echo " rata-rata ";
echo ($jumlah / 50);
echo "<br>";

echo " median ";
echo $bilangan[25];
echo "<br>";

echo " modulus ";
$arrModulus = [];
foreach($bilangan as $bil){
    if(!isset($arrModulus[$bil])) $arrModulus[$bil] = 1;
    else $arrModulus[$bil]++;
}
$modulus = 0;
$modulusCount = 0;
foreach($arrModulus as $key=>$mod){
    if($mod > $modulusCount){
        $modulus = $key;
        $modulusCount = $mod;
    }
}
echo $modulus;

?>