<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Edit Data Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Artikel</a></li>
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
            <h3 class="box-title">Edit Artikel</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo $message;?>
            <form action="" method="post" enctype="multipart/form-data" />
              <div class="box-body">
                <?php echo validation_errors();?>
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" name="title_article" class="form-control" value="<?php echo $artikel['title_article'];?>">
                </div>
                <div class="form-group">
                  <label for="">Artikel</label>
                  <textarea class="ckeditor" name="article"><?php echo $artikel['article'];?></textarea>
                </div>
                <div class="form-group">
                  <label for="">Gambar</label>
                  <img src="<?php echo base_url('assets/img/artikel/'.$artikel['image']);?>" width="200px" height="200px">
                </div>
                <div class="form-group">
                  <label for=""></label>
                  <input type="file" name="image" class="form-control">
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo site_url() ?>superadmin/artikel" class="btn btn-default">Back</a>
                    </div> <!-- /form-actions -->
                  </div>
                </form>
                </div><!-- /.box -->
                
                
                </div><!--/.col (left) -->
                
                </div>   <!-- /.row -->
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->