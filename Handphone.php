<?php

namespace Teknologi;

class Handphone {
    public $merk;
    public $model;
    public $prosesor;
    public $ram;
    public $storage;
    public $kamera;
    public $harga;

    public function __construct($merk, $model, $prosesor, $ram, $storage, $kamera, $harga)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->prosesor = $prosesor;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->kamera = $kamera;
        $this->harga = $harga;
    }

    public function mainGame($namaGame){
        echo "Saya sedang bermain " . $namaGame;
    }

    public function telpon(){

    }

    public function chatting(){

    }

    public function vcall(){

    }
}

?>