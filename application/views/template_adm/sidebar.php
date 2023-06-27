 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(''); ?>aset/halamandashboard/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-center info">
          <p>Toko Bangunan</p>

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item menu-open">
        </li>


          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              Data Karyawan </a>

            <li><a href="<?php echo base_url('dashboard1') ?>" class="nav-link">
              <i class="nav-icon fa fa-calendar-check-o"></i>
              Data Produk
            </a>
          </li>

         <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
              Logout </a>

      
        </nav>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<ul class="sidebar-menu" data-widget="tree">