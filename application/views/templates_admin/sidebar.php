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
              <a href="<?php echo base_url() ?>administrator/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>administrator/user">
                <i class="fa fa-user"></i>
                <span>User</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>administrator/slide">
                <i class="fa fa-laptop"></i> <span>Slide</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>administrator/slide/slide1"><i class="fa fa-circle-o"></i> Slide 1</a></li>
                <li><a href="<?php echo base_url() ?>administrator/slide/slide2"><i class="fa fa-circle-o"></i> Slide 2</a></li>
                <li><a href="<?php echo base_url() ?>administrator/slide/slide3"><i class="fa fa-circle-o"></i> Slide 3</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Posting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>administrator/artikel"><i class="fa fa-circle-o"></i> Artikel</a></li>
                <li><a href="<?php echo base_url() ?>administrator/berita"><i class="fa fa-circle-o"></i> Berita</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url() ?>administrator/galeri/jalan">
                <i class="fa fa-laptop"></i>
                <span>Gallery</span>
              </a>
            </li>
            
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>