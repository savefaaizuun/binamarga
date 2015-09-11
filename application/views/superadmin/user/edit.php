<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Edit Data User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">User</a></li>
      <li class="active">Edit</li>
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
            <h3 class="box-title">Edit User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo $message;?>
            <form action="" method="post" enctype="multipart/form-data" />
              <div class="box-body">
              <?php echo validation_errors();?>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $user['username'];?>">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $user['password'];?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user['email'];?>">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $user['nama'];?>">
                </div>
                
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo site_url() ?>superadmin/user" class="btn btn-default">Back</a>
                    </div> <!-- /form-actions -->
                  </div>
                </form>
                </div><!-- /.box -->
                
                
                </div><!--/.col (left) -->
                
                </div>   <!-- /.row -->
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->