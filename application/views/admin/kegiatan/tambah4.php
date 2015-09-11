<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Tambah Kegiatan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
            <li><a href="#">Kegiatan</a></li>
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
                        <h3 class="box-title">Tambah Kegiatan</h3>
                        </div><!-- /.box-header -->
                        <?php echo validation_errors();?>
                        <form action="" method="post" enctype="multipart/form-data"/>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kegiatan</label>
                                    <textarea class="ckeditor" name="isi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="box-footer">
                                <div class="form-actions">
                                    <input type="hidden" name="kategori" value="4">
                                    <input type="hidden" name="user_id" value="<?php echo "$user_id"; ?>" class="form-control">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?php echo site_url() ?>superadmin/bidang4/" class="btn btn-default">Cancel</a>
                                    </div> <!-- /form-actions -->
                                </div>
                            </form>
                            </div><!-- /.box --> 
                            </div><!--/.col (left) -->
                            </div>   <!-- /.row -->
                            </section><!-- /.content -->
                            </div><!-- /.content-wrapper -->