<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title><?php echo (isset($title)) ? $title : ''; ?> | Portal DBMP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/lightbox.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
        
        <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>

        <style>
            #wrapper{
            width: 80%;
            margin: 1% 10% ;
        }
        </style>
        
        
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <img src="<?php echo base_url() ?>assets/img/header.jpg" height="150px" width="100%">
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" style="margin-top: 12px; margin-left: 20px; color:#53B1EC">
                        <a href="<?php echo base_url() ?>site">HOME  </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>profile/visi">PROFILE </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>renstra">RENSTRA & RENJA </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>kegiatan">KEGIATAN  </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>gallery">GALLERY </a>
                    </ul>
                    <div class="col-sm-3 col-md-3 pull-right">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>