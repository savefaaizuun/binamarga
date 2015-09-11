<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Tambah Data User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">User</a></li>
      <li class="active">Tambah</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Tambah User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action="<?=base_url()?>superadmin/user/tambah" method="post">
              <div class="box-body">
              <?php echo validation_errors();?>
              <?php echo $message;?>
                
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Level</label>
                  <select name="level" class="form-control">
                      <option value="">
                        <option value="super admin">Super Admin</option>
                        <option value="admin">Admin</option> 
                      </option>
                    </select>
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo site_url() ?>superadmin/user" class="btn btn-default">Cancel</a>
                  </div> <!-- /form-actions -->
                  </div>
                </form>
                </div><!-- /.box -->
                
                
                </div><!--/.col (left) -->
                
                </div>   <!-- /.row -->
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->