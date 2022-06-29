<?php

require_once 'class_BMIPasien.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI - Diah Nur </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form method="POST" action="hasil.php">
        <div class="form-group row mt-3">
            <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
            <div class="col-5"> 
            <input id="tanggal" name="tanggal" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="kode" class="col-4 col-form-label">Kode</label> 
            <div class="col-5">
            <input id="kode" name="kode" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-5">
            <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row mt-3">
            <label class="col-4">Gender</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P"> 
                        <label for="gender_0" class="custom-control-label">Perempuan</label>
                    </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender_1" class="custom-control-label">Laki-laki</label>
                </div>
        </div>
        <div class="form-group row mt-3">
            <label for="berat" class="col-4 col-form-label">Berat</label> 
            <div class="col-5">
            <input id="berat" name="berat" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
            <div class="col-5">
            <input id="tinggi" name="tinggi" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row mt-3">
            <div class="offset-4 col-5">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>