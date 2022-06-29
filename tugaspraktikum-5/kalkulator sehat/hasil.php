<?php

require_once 'class_BMIPasien.php';
require_once 'class_bmi.php';
require_once 'class_pasien.php';

if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $berat = floatval($_POST['berat']);
    $tinggi = floatval($_POST['tinggi']);
    $tanggal = $_POST['tanggal'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil - Diah Nur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid ">
        <h3 class="text-center my-4">Daftar BMI Pasien</h3>
        <table class="table text-center table-bordered table-light table-striped table-hover w-100 m-auto mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal Periksa </th>
                                                <th scope="col">Kode Pasien </th>
                                                <th scope="col">Nama Pasien </th>
                                                <th scope="col">Gender </th>
                                                <th scope="col">Berat(Kg) </th>
                                                <th scope="col">Tinggi(Cm) </th>
                                                <th scope="col">Nilai BMI </th>
                                                <th scope="col">Status BMI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            $pasien1 = new BMIPasien( "P001", "2022-01-10", "Ahmad", "L", 69.8, 169);
                                            $pasien2 = new BMIPasien( "P002", "2022-01-10", "Rina", "P", 55.3, 165);
                                            $pasien3 = new BMIPasien( "P003", "2022-01-11", "Luthfi", "L", 45.2, 171);
                                            $pasien4 = new BMIPasien($kode, $tanggal, $nama, $gender, $berat, $tinggi);
                                            $kumpulan_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
                                            foreach ($kumpulan_pasien as $dn) {
                                                echo '<tr><td>' . $nomor . '</td>';
                                                echo '<td>' . $dn->tanggal . '</td>';
                                                echo '<td>' . $dn->kode . '</td>';
                                                echo '<td>' . $dn->nama . '</td>';
                                                echo '<td>' . $dn->gender . '</td>';
                                                echo '<td>' . $dn->berat . '</td>';
                                                echo '<td>' . $dn->tinggi . '</td>';
                                                echo '<td>' . $dn->nilaiBMI() . '</td>';
                                                echo '<td>' . $dn->statusBMI() . '</td></tr>';
                                                $nomor++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </body>
</body>
</html>