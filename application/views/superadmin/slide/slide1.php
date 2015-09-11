<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Data Slide
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Slide</a></li>
      <li class="active">Data</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            
            </div><!-- /.box-header -->

            <div class="box-body">
            <?php echo $message;?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Judul</th>
                    <th> Gambar</th>
                    <th> Link</th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=0; foreach($slide1 as $slide): $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $slide->title_slide ?></td>
                    <td><img src="<?php echo base_url('assets/img/slide/'.$slide->image);?>" height="100px" width="100px"></td>
                    <td><?php echo $slide->link ?></td>
                    <td>
                      <a class="btn btn-app" href="<?php echo site_url('administrator/slide/edit/'.$slide->slide_id);?>" ><i class="fa fa-edit"> </i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
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
            var slide_id=$(this).attr("slide_id");
            
            $("#idhapus").val(slide_id);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var slide_id=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('administrator/slide/hapus');?>",
                type:"POST",
                data:"slide_id="+slide_id,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('administrator/slide/index/delete_success');?>";
                }
            });
        });
    });
</script>
