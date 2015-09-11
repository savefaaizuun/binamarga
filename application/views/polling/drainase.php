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
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
    <link class="include" rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.jqplot.min.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    
    <style>
    body {
    margin: 20px 20px 0px 20px;
    background-color: #FFF;
    }
    
    h3.judul{
    color: #00B6E8;
    font-weight: bold;
    }
    h3.judul:hover{
    color: #0D6FA5;
    text-decoration: none;
    }
    </style>
    
  </head>
  <body>

    <div id="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <img src="<?php echo base_url() ?>assets/img/header2.jpg" height="100px" width="100%">
          </div>
          <div class="col-sm-3 col-md-3 pull-right" style="margin:25px 0px">
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
      </div>
    </div>
    
    <div id="content" style="margin-top: 0px;">
      <div class="container">
        <h3 class="judul">INDEX KEPUASAN DRAINASE</h3>
        <div class="row">
          <div class="col-sm-12">
            <form method="POST" action="<?php echo site_url(); ?>polling/votedrain/<?php echo $this->uri->segment(3)+1 ; ?>">
                <?php echo "<p>".$QuestionDrain['question']."</p>"; ?>
                <input type="hidden" name="question_id" value="<?php echo $QuestionDrain['question_id'] ?>">
                <input type="hidden" name="voter_id" value="<?php echo $voter_id;?>">
                <?php foreach ($answer as $answer) {
                ?>
                <input type="radio" name="pilihan" id="<?php echo $answer->answer_id ?>" value="<?php echo $answer->answer_value ?>"> <?php echo $answer->answer ?><br>
                <?php } ?>
                <br>
                <button type="submit" name="vote">Vote</button>
            </form>
          </div>
        </div>
      </div>
    </div>

             
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="col-xs-12">
              <strong>Dinas Bina Marga dan Pengairan Kota Bandung<br/>
              Jl. Cianjur No. 34 Bandung <br/></strong>
              informasi lainnya tentang DPMB
            </div>
          </div>
          <div class="col-sm-3 pull-right">
            <center>Visit Us
            <div class="row">
              <div class="col-xs-12">
                <a href="http://twitter.com"><img src="<?php echo base_url() ?>assets/img/twitter.png" height="30px" width="150px"></a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <a href="http://facebook.com"><img src="<?php echo base_url() ?>assets/img/fb.png" height="30px" width="150px"></a>
              </div>
            </div>
            </center>
          </div>
        </div>
      </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jqplot.meterGaugeRenderer.min.js"></script>
  </body>
</html>
