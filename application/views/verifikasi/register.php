<div class="pad">
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 ">

            <?php echo validation_errors();?>
            <?php echo $message;?>

                <legend><?php echo $title; ?></legend>
                <form class="form-horizontal" action="<?php echo site_url(); ?>verifikasi/register/index" method="post" enctype="multipart/form-data" />
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nami</label>
                        <div class="col-lg-5">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-5">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-5">
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-5">
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group well">
                        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Register</button>
                        <a href="<?php echo site_url('verifikasi/login');?>" class="btn btn-default">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>