<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('BS4/css/bootstrap.min.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('BS4/js/bootstrap.min.js') ?>"></script>
  <style type="text/css">
    .card{
      padding: 20px;
      margin: 20px;
    }
    .row{
      padding: 3px;
      margin: 3px;
    }
  </style>
  <title>Detail Produk</title>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card">
      <div class="card-header bg-danger text-dark border rounded">
        <h2 class="center">Detail Produk</h2>
      </div>
      <div class="card-body">
        <div class="row border border-dark rounded">
          <div class="col-2 text-light bg-secondary">Kode Barang</div>
          <div class="col-10 bg-light"><?php echo $detail->Kode_Barang?></div>
        </div>
        <div class="row border border-dark rounded">
          <div class="col-2 text-dark bg-danger">Nama Barang</div>
          <div class="col-10 bg-light"><?php echo $detail->Nama_Barang?></div>
        </div>
        <div class="row border border-dark rounded">
          <div class="col-2 text-light bg-secondary">Harga Barang</div>
          <div class="col-10 bg-light"><?php echo $detail->Harga_Barang?></div>
        </div>
        <div class="row border border-dark rounded">
          <div class="col-2 text-dark bg-danger">Stok Barang</div>
          <div class="col-10 bg-light"><?php echo $detail->Stok_Barang?></div>
        </div>
        <div class="row border border-dark rounded">
          <div class="col-2 text-light bg-secondary">Nama Foto Barang</div>
          <div class="col-10 bg-light"><?php echo $detail->foto?></div>
        </div>
        <div class="row border border-dark rounded">
          <div class="col-2 text-dark bg-danger">Foto Barang</div>
          <div class="col-10 bg-light">
            <img src="<?php echo base_url('foto/'.$detail->foto);?>" width="270" height="330">
          </div>
        </div>
      </div>
      <div class="card-footer">
      <a class="btn btn-success" href="<?php echo base_url('index.php/Admin/dashboard')?>">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>