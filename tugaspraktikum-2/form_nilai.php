<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Form Nilai Siswa</title>
</head>
<body>
  <h3>Form Nilai Siswa</h3>

  <form method="GET" action="form_nilai.php">
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
    </div>
   
    <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Dasar-dasar pemrograman">Dasar-dasar pemrograman</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Matematika Komputer">Matematika Komputer</option>
      </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="Submit" class="btn btn-primary">Simpan</button>
    </div>
    </div>
</form>

</body>

    <?php
        $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
        $nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : '';
        $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
        $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
        $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
        $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

        echo 'Proses : ' . $proses;
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $mata_kuliah;
        echo '<br/>Nilai UTS : ' . $nilai_uts;
        echo '<br/>Nilai UAS : ' . $nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    ?>
</html>
