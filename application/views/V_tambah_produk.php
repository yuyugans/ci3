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
    <div class="card-header bg-warning">
      <h2 align="center"> Input Data Produk</h2>
    </div>
    <div class="card-body">
      <?php echo form_open_multipart(base_url('index.php/Admin/simpan_produk'));?>
      <div class="form-group row offset-3">
        <label for="txt_1" class="col-lg-2 col-form-label">Kode Barang</label>
        <input type="text" name="kode" class="col-form-control col-lg-4" id="txt_1">
      </div>
      <div class="form-group row offset-3">
        <label for="txt_2" class="col-lg-2 col-form-label">Nama Barang</label>
        <input type="text" name="nama" class="col-form-control col-lg-4" id="txt_2">
      </div>
      <div class="form-group row offset-3">
        <label for="num_1" class="col-lg-2 col-form-label">Harga Barang</label>
        <input type="number" name="harga" class="col-form-control col-lg-4" id="num_1">
      </div>
      <div class="form-group row offset-3">
        <label for="num_2" class="col-lg-2 col-form-label">Stok Barang</label>
        <input type="number" name="stok" class="col-form-control col-lg-4" id="num_2">
      </div>
      <input type="hidden" name="status" value="1">
      <div class="form-group row offset-3">
        <label class="col-lg-2 col-form-label">Upload Foto</label>
        <input type="file" name="foto" class="col-form-control col-lg-4">
      </div>
      <div class="form-group row offset-4">
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