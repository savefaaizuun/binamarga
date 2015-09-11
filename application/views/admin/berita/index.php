<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Data Berita
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Berita</a></li>
      <li class="active">Data</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <div class="col-xs-2">
              <a href="<?php echo base_url()?>administrator/berita/tambah" class="btn btn-block btn-primary"> Add Berita</a>
            </div>
            </div><!-- /.box-header -->

            <div class="box-body">
            <?php echo $message;?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Judul</th>
                    <th> Auhtor</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach($listBerita as $berita): $no++;?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $berita->judul_berita ?></td>   
                    <td><?php echo $berita->nama ?></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
              </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!-- /.col -->
              </div><!-- /.row -->
              </section><!-- /.content -->
              </div><!-- /.content-wrapper -->


