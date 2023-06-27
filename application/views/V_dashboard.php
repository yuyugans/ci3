<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Katalog Produk Admin</title>
  <?php
  $this->load->view('template_adm/link.php');
  ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <div>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header bg-dark ">
              <h2 align="center">Katalog Produk</h2>
            </div>
            <div class="card-header">
              <a href="<?php echo (base_url('index.php/Admin/tambah_produk')); ?>" class="btn btn-dark">Tambah Data</a>
            </div>
            <div class="card-body">
              <table id="tb1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr align="center">
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Aksi</th>
                    <th>Edit</th>
                    <th>Hapus</th>
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
                      <td><a class="btn btn-info" href="<?php echo base_url('index.php/Admin/detail_produk/' . $prd->Kode_Barang) ?>">Detail</a></td>
                      <td><a class="btn btn-success" href="<?php echo base_url('index.php/Admin/edit_produk/' . $prd->Kode_Barang) ?>">Edit</a></td>
                      <td><a class="btn btn-danger" href="<?php echo base_url('index.php/Admin/hapus_produk/' . $prd->Kode_Barang) ?>">Hapus</a></td>
                    <?php
                  endforeach;
                    ?>
                </tbody>
              </table>
              <div class="card-footer">
                <a class="btn btn-warning text-light float-right" href="<?php echo base_url() ?>">
                  Logout</a>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php
  $this->load->view('template_adm/script_jquery.php');
  ?>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#tb1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tb1_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>