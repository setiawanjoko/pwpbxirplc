<?php require_once "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])) {
        echo "nama: " . $_POST['nama'] . "<br>";
        echo "email: " . $_POST['email'] . "<br>";

        // Buat table di phpmyadmin sesuai dengan form yang sudah dibuat
        // Tambahkan fitur untuk input ke database
        $query = "INSERT INTO user (`id`, `nama`, `email`) VALUES(null, '". $_POST['nama'] . "', '" . $_POST['email'] . "');";
        

        if(!mysqli_query($conn, $query)) echo "Gagal menambahkan ke database" . mysqli_error($conn);
    }
    ?>
    <a href="form.php">Kembali</a>
</body>
</html>

<!-- 

LATIHAN INDIVIDU
Buat form dan halaman untuk menampilkan isian dari form yang sudah dibuat!
Sesuaikan isian form dengan kelas yang sudah dibuat kemarin!

 -->