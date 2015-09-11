<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Edit Data Slide
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Slide</a></li>
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
            <h3 class="box-title">Edit Slide</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo $message;?>
            <form action="" method="post" enctype="multipart/form-data" />
              <div class="box-body">
                <?php echo validation_errors();?>
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" name="title_slide" class="form-control" value="<?php echo $slide['title_slide'];?>">
                </div>
                <div class="form-group">
                  <label for="">Gambar</label>
                  <img src="<?php echo base_url('assets/img/slide/'.$slide['image']);?>" width="200px" height="200px">
                </div>
                <div class="form-group">
                  <label for=""></label>
                  <input type="file" name="image" class="form-control" value="<?php echo $slide['image'];?>">
                </div>
                <div class="form-group">
                  <label for="">Link</label>
                  <input type="text" name="link" class="form-control" value="<?php echo $slide['link'];?>">
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo site_url() ?>administrator/dashboard" class="btn btn-default">Back</a>
                    </div> <!-- /form-actions -->
                  </div>
                </form>
                </div><!-- /.box -->
                
                
                </div><!--/.col (left) -->
                
                </div>   <!-- /.row -->
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->