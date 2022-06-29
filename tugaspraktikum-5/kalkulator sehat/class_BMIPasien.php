<?php

require_once 'class_bmi.php';
class BMIPasien extends BMI {
    public $tanggal;
    public function __construct($tanggal, $kode, $nama, $gender, $berat, $tinggi) {
        $this->tanggal = $tanggal;
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    } 
}


?>