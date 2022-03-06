<?php 

// variabel
$nama = "Diah Nur A";
$umur = "19";

// menampilkan variabel
echo "Nama : " . $nama;
echo "<br>Umur  : " . $umur;

// variabel sistem
echo "<br>Dokumen Root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// variabel constant
// define('namaVariabel', nilaiVariabel)
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;

echo "<br>luas lingkaran : $luas";

?>