<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Data Kegiatan Bidang Pembangunan dan Pemeliharaan Kebinamargaan  
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Kegiatan</a></li>
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
              <a href="<?php echo base_url()?>administrator/bidang3/tambah" class="btn btn-block btn-primary"> Add Kegiatan</a>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <?php echo $message;?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Judul</th>
                    <th> Author</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach($listBidang3 as $kegiatan): $no++;?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $kegiatan->judul ?></td>
                    <td><?php echo $kegiatan->nama ?></td> 
                    <td>
                      <a class="btn btn-app" href="<?php echo site_url('administrator/bidang3/edit/'.$kegiatan->kegiatan_id);?>" ><i class="fa fa-edit"> </i></a>
                      <a href="#" class="hapus"  kegiatan_id="<?php echo $kegiatan->kegiatan_id;?>" ><button class="btn btn-app"><i class="fa fa-trash-o" > </i></button></a>
                    </td>    
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

<script>
    $(function(){
        $(".hapus").click(function(){
            var kegiatan_id=$(this).attr("kegiatan_id");
            
            $("#idhapus").val(kegiatan_id);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kegiatan_id=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('administrator/bidang3/hapus');?>",
                type:"POST",
                data:"kegiatan_id="+kegiatan_id,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('administrator/bidang3/index/delete_success');?>";
                }
            });
        });
    });
</script>