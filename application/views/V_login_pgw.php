
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./aset/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./aset/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>./aset/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>./aset/login/css/style.css">

    <title>Login Karyawan</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo base_url(''); ?>aset/login/images/karyawan.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3><b>LOGIN KARYAWAN</h3></b>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
           <form action="<?php echo base_url('index.php/Admin/validasi_pgw')?>" 
    method="POST">
    <div class="form-group first">  
      <div class="form-group first">
                <input type="text" class="form-control" id="user" 
        placeholder="Username" name="USER">

              </div>
              <div class="form-group last mb-3">
                <input type="password" class="form-control" id="pwd" 
            placeholder="Password" name="PASS">
                
              </div>
    </div>
      <center>
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="reset" class="btn btn-danger">Reset</button>
      </center>
  </form>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="./aset/login/js/jquery-3.3.1.min.js"></script>
    <script src="./aset/login/js/popper.min.js"></script>
    <script src="./aset/login/js/bootstrap.min.js"></script>
    <script src="./aset/login/js/main.js"></script>
  </body>
</html>