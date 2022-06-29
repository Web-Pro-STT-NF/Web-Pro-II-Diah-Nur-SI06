<?php

class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function volume($vol)
    {
        $this->volume = $vol;
    }
}

class Minuman extends Dispenser
{
    public $uang;
    function __construct($uang, $namaMinuman, $volumeGelas, $harga)
    {
        $this->uang = $uang;
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $harga;
        $this->volumeGelas = $volumeGelas;
    }
}

function pembelian($uang)
{
    $this->uang = $uang;
    return $this->uang - $this->hargaSegelas;
}

function volumeSetelahdibeli()
{
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
}
