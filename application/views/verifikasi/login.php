<div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> Login
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="<?php echo site_url('web/proses');?>" method="post">
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Sign in</button>
                                                 <button type="reset" class="btn btn-default btn-sm">
                                                Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <legend>Selamat Datang di Apliasi Perpusatakaan</legend>
                    </div>
                </div>
            </div>