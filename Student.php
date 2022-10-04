<?php

namespace School;

class Student {
    public $nis;
    public $nama;
    public $jurusan;

    public function __construct($nis, $nama, $jurusan)
    {
        $this->nis = $nis;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    public function speak(){
        echo "student is speaking";
        echo "<br>";
    }
}

?>