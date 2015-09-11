<!DOCTYPE html>
    <html>
        <head>
            <title>Admin DBMP | <?php echo $title;?></title>

            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min2.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url() ?>assets/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

            <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
        </head>
        <body class="skin-blue sidebar-collapse sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php echo $_header;?>
        
            
            <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
            <?php echo $_sidebar;?>
        <!-- /.sidebar -->
      </aside>
            <?php echo $_content;?>

            <?php echo $_footer;?>
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="idhapus" id="idhapus">
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        
        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/application.js');?>"></script>

       <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.8.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() ?>assets/js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url() ?>assets/js/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/js/demo.js" type="text/javascript"></script>
        </body>
    </html>