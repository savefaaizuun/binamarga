<!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>superadmin/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>superadmin/user">
                <i class="fa fa-user"></i>
                <span>User</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>superadmin/slide">
                <i class="fa fa-laptop"></i> <span>Slide</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>superadmin/slide/slide1"><i class="fa fa-circle-o"></i> Slide 1</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/slide/slide2"><i class="fa fa-circle-o"></i> Slide 2</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/slide/slide3"><i class="fa fa-circle-o"></i> Slide 3</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Posting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>superadmin/artikel"><i class="fa fa-circle-o"></i> Artikel</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/berita"><i class="fa fa-circle-o"></i> Berita</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>superadmin/galeri/jalan">
                <i class="fa fa-laptop"></i>
                <span>Gallery</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Kegiatan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>superadmin/bidang1"><i class="fa fa-circle-o"></i> B. Perencanaan</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/bidang2"><i class="fa fa-circle-o"></i> B. Pemeliharaan</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/bidang3"><i class="fa fa-circle-o"></i> B. Pembangunan</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/bidang4"><i class="fa fa-circle-o"></i> B. Pengolahan & PJU</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/bidang5"><i class="fa fa-circle-o"></i> B. Pengendalian</a></li>
                <li><a href="<?php echo base_url() ?>superadmin/bidang6"><i class="fa fa-circle-o"></i> B. Sekretariat</a></li>
              </ul>
            </li>
            
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>