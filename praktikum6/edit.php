<?php
require_once 'koneksi.php';
$id_pasien = $_GET['id'];
if($id_pasien){
    $query = "SELECT * FROM pasien WHERE id_pasien=?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_pasien]);
    $pasien = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Daftar Pasien</h2>
    <form method="POST" class='ms-4 me-4' action="proses.php">
      <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
          <input id="kode" name="kode" type="text" required="required" class="form-control" value="<?= $pasien['kode']; ?>">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="nama_lengkap" name="nama_lengkap" type="text" required="required" class="form-control" value="<?= $pasien['nama']; ?>">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
          <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control" value="<?= $pasien['tmp_lahir']; ?>">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
          <input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control" value="<?= $pasien['tgl_lahir']; ?>">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
          <div class='form-check form-check-inline'>
            <input id="gender_laki" name="gender" type="radio" required="required" class="form-check-input"
              value="L" <?= ($pasien['gender'] == 'L' ? 'checked'  : ''); ?>>
            <label for="gender_laki" class="form-check-label">Laki-Laki</label>
          </div>
          <div class='form-check form-check-inline'>
            <input id="gender_perempuan" name="gender" type="radio" required="required" class="form-check-input"
              value="P" <?= ($pasien['gender'] == 'P' ? 'checked'  : ''); ?>>
            <label for="gender_perempuan" class="form-check-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input id="email" name="email" type="text" required="required" class="form-control" value="<?= $pasien['email']; ?>">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
          <textarea id="alamat" name="alamat" cols="40" rows="5" required="required" class="form-control"><?= $pasien['alamat']; ?></textarea>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label>
        <div class="col-8">
          <select id="kelurahan" name="kelurahan" class="custom-select" required="required">
            <?php
            $query_kelurahan = "SELECT * FROM kelurahan";
            $result_query_kelurahan = $dbh->query($query_kelurahan);
            foreach($result_query_kelurahan as $kelurahan){
                $selected = ($kelurahan['id_kelurahan'] == $pasien['kelurahan_id']) ? 'selected' : '';
            ?>
                <option value="<?= $kelurahan['id_kelurahan']; ?>" <?= $selected; ?>><?= $kelurahan['nama']; ?></option>   
            <?php } ?>
          </select>
        </div>
      </div>
      <?php if($id_pasien){ ?>
        <input type="hidden" name="id" value="<?= $id_pasien; ?>">
      <?php } ?>
      <div class="form-group row mt-2">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary" value="edit">Update Data</button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script

    
</body>
</html>