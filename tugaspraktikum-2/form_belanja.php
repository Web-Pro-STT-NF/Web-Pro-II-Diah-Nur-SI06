<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja - Diah Nur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<form method="POST">
  <div class="pt-3">
  </div>
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="text1" name="text1" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text" name="text" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<div class="row">
  <div class="col-8">
                        
  <hr>
  <hr>

    <?php
      $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
      $costumer = isset($_POST['costumer']) ? $_POST['costumer'] : '';
      $produk = isset($_POST['radio']) ? $_POST['radio'] : '';
      $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

      echo "<br>Nama Costumer : $costumer";
      echo "<br>Produk : $produk";
      echo "<br>Jumlah Beli : $jumlah";

      $tv = 4200000 * intval($jumlah);
      $kulkas = 3100000 * intval($jumlah);
      $mesin_cuci = 3800000 * intval($jumlah); 

      if ($produk == 'tv'){
        echo "<br>Total Belanja : " . number_format($tv,0,',','.');
      } elseif ($produk == 'kulkas'){
      echo "<br>Total Belanja : " . number_format($kulkas,0,',','.');
      }
      else{
      echo "<br>Total Belanja : " . number_format($mesin_cuci,0,',','.');
      }
    ?>

  </div>
  
</div>

<table class="table w-25 position-absolute top-0 end-0 mr-4">
  <tr style="background-color:blue; color:white">
    <td scope="col">Harga</td>
  </tr>
  <tr>
    <td scope="row">TV : 4.200.000</td>
  </tr>                        
  <tr>
    <td scope="row">Kulkas : 3.100.000</td>
  </tr>
  <tr>
    <td scope="row">Mesin Cuci : 3.800.000</td>
  </tr>
  <tr style="background-color:blue; color:white">
    <td scope="row">Harga Dapat Berubah Setiap Saat</td>
  </tr>
</table>
    
</body>
</html>
