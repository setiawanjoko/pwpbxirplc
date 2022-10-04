<?php

require_once 'Student.php';
require_once 'Handphone.php';

use School\Student;
use Teknologi\Handphone;

$siswa = new Student(21452, "Nopa Jaya", "RPL");
$siswa->speak();

var_dump($siswa);

$handphonenyaNopa = new Handphone("Realme", "C20", "Octa Core", 4, 64, 8, 1200000);
$handphonenyaNopa->mainGame("Free Fire");
echo "<br>";
echo $handphonenyaNopa->merk;

?>