<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Data Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
      <li><a href="#">Artikel</a></li>
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
              <a href="<?php echo base_url()?>superadmin/artikel/tambah" class="btn btn-block btn-primary"> Add Artikel</a>
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
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0; foreach($listArtikel as $artikel): $no++;?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $artikel->title_article ?></td>
                    <td><?php echo $artikel->nama ?></td>
                    <td>
                      <a class="btn btn-app" href="<?php echo site_url('superadmin/artikel/edit/'.$artikel->article_id);?>" ><i class="fa fa-edit"> </i></a>
                      <a href="#" class="hapus"  article_id="<?php echo $artikel->article_id;?>" ><button class="btn btn-app"><i class="fa fa-trash-o" > </i></button></a>
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
            var article_id=$(this).attr("article_id");
            
            $("#idhapus").val(article_id);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var article_id=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('superadmin/artikel/hapus');?>",
                type:"POST",
                data:"article_id="+article_id,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('superadmin/artikel/index/delete_success');?>";
                }
            });
        });
    });
</script>
