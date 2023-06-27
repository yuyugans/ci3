<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard User</title>
  <link rel="stylesheet" href="<?php echo base_url('BS4/css/bootstrap.min.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('BS4/js/bootstrap.min.js') ?>"></script>
  <style type="text/css">
    .card {
      padding: 20px;
      margin: 20px;
    }
  </style>
</head>

<body class="bg-dark">
  <div class="card">
    <div class="card-header bg-danger">
      <h2 align="center"> Edit Data Produk</h2>
    </div>
    <div class="card-body">
      <?php echo form_open_multipart(base_url('index.php/Admin/update_produk'));?>
      <div class="form-group row offset-3">
        <label for="txt_1" class="col-lg-2 col-form-label">Kode Barang</label>
        <input type="text" name="kode" class="col-form-control form-control-plaintext bg-light col-lg-4" id="txt_1" value="<?php echo $prd->Kode_Barang?>" readonly>
      </div>
      <div class="form-group row offset-3">
        <label for="txt_2" class="col-lg-2 col-form-label">Nama Barang</label>
        <input type="text" name="nama" class="col-form-control col-lg-4" id="txt_2" value="<?php echo $prd->Nama_Barang?>">
      </div>
      <div class="form-group row offset-3">
        <label for="num_1" class="col-lg-2 col-form-label">Harga Barang</label>
        <input type="number" name="harga" class="col-form-control col-lg-4" id="num_1" value="<?php echo $prd->Harga_Barang?>">
      </div>
      <div class="form-group row offset-3">
        <label for="num_2" class="col-lg-2 col-form-label">Stok Barang</label>
        <input type="number" name="stok" class="col-form-control col-lg-4" id="num_2" value="<?php echo $prd->Stok_Barang?>">
      </div>
      <div class="form-group row offset-3">
        <label class="col-lg-2 col-form-label">Foto Produk</label>
        <input type="file" name="foto" class="col-form-control col-lg-4 offset-1">
        <input type="hidden" name="old_foto" value="<?php echo $prd->foto?>">
      </div>
      <div class="form-group row offset-5">
        <label class="col-lg-4 col-form-label bg-danger" align="center"><?php echo 'foto sebelumnya adalah '.$prd->foto;?></label><br>
      </div>
      <div class="form-group row offset-5">
        <img src="<?php echo base_url('foto/'.$prd->foto);?>" width="300" height="330" class="col-lg-4 col-form">
      </div>
      <div class="form-group row offset-5">
        <button type="reset" class="btn btn-danger col-2" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-success col-2">Submit</button>
      </div>
      <?php echo form_close();?>
    </div>
    <div class="card-footer">
      <a class="btn btn-success" href="<?php echo base_url('index.php/Admin/dashboard')?>">Kembali</a>
    </div>
  </div>
</body>

</html>