<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard User</title>
  <link rel="stylesheet" href="<?php echo base_url('BS4/css/bootstrap.min.css') ?>">
  <script type="text/javascript" src="<?php echo base_url('BS4/js/bootstrap.bundle.min.js') ?>"></script>
  <style type="text/css">
    .card {
      padding: 20px;
      margin: 20px;
    }
  </style>
</head>

<body>
  <h4>Halaman Produk Pegawai</h4>
  <hr>
  <div class="card">
    <div class="card-header bg-success">
      <h2 align="center">Data Produk</h2>
    </div>
    <div class="card-body">
      <table id="tb1" class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="bg-info" align="center">
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody align="center">
          <?php
          foreach ($produk as $prd) :
          ?>
            <tr>
              <td><?php echo $prd->Kode_Barang ?></td>
              <td><?php echo $prd->Nama_Barang ?></td>
              <td><?php echo $prd->Harga_Barang ?></td>
              <td><?php echo $prd->Stok_Barang ?></td>
              <td><a class="btn btn-info" href="<?php echo base_url('index.php/Admin/detail_produk_pgw/'.$prd->Kode_Barang)?>">Detail</a></td>
            <?php
          endforeach;
            ?>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
    <a class="btn btn-warning text-light float-right" href="<?php echo base_url() ?>">
      Logout</a>
    </div>
  </div>
</body>

</html>