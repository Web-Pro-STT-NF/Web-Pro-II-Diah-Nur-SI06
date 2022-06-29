<?php

require_once 'class_pasien.php';
class BMI extends Pasien {
    public $berat, $tinggi;
    public function nilaiBMI() {
        return number_format(($this->berat / (($this->tinggi / 100) ** 2)), 1);
    }
    public function statusBMI() {
        if($this->nilaiBMI() < 18.5) {
            return 'Kekurangan Berat Badan';
        }elseif($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 24.8) {
            return 'Normal (Ideal)';
        }elseif($this->nilaiBMI() >= 24.5 && $this->nilaiBMI() <= 29.8) {
            return 'Kelebihan berat badan';
        }elseif($this->nilaiBMI() >= 30) {
            return 'Kegemukan (Obesitas)';
        }
    }
}

?>