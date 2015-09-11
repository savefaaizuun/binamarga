
<link href="<?php echo base_url() ?>assets/css/grafik.css" rel="stylesheet">

<style>

.panel-index{
width: 80%;
background: #C3E6EC none repeat scroll 0% 0%;
padding-bottom: 20px;
margin: 0% 10%;
}
.panel-home{
width: 80%;
background: #FFFFFF none repeat scroll 0% 0%;
}
.icon-index{
  border-right-width: 1px; border-right-style: solid;
}
.grafik{
padding: 2% 10%;
}
.h4, h4.title{
margin: 20px 20px 10px 20px;
text-align: left;
}

.h4, h4.ikm{
font-family: verdana;
font-weight: bold;
font-size: 14px;
margin: 5px 0px;
}
.h4, h4.periode{
font-family: verdana;
font-weight: bold;
font-size: 14px;
margin: 0px;
}
.box-bulan {
    width: 33.3333%;
    margin: 5px 33% 10px 33%;
}
.bulan {
  background-color: #67798C;
  height: 25px;
  color: #FFFFFF;
  font-weight: bold;
  text-align: center;
  padding-top: 2px;
}
.h4, h4.rata2{
font-family: verdana;
font-weight: bold;
font-size: 12px;
text-align: center;
}
.p, p.vote {
    margin: 20px 10px;
    color: #096A8F;
    font-weight: bold;
    text-align: center;
}
.p, p.article{
margin: 0px 20px 0px 20px;
text-align: left;
}
.more{
margin: 20px 0px 0px 20px;
text-align: left;
}
.meter{
  font-weight: bold;
}
a.artikel {
color: #000;
text-decoration: none;
text-align: left;
}
.box-twitter {
margin: 0px 20px;
}



</style>
<div id="slide">
  <div id="carousel-generic" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-generic" data-slide-to="1"></li>
      <li data-target="#carousel-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(0);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="<?php echo $row->link; ?>">Read More</a></p>
        </div>
      </div>
      <div class="item">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(1);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="<?php echo $row->link; ?>">Read More</a></p>
        </div>
      </div>
      <div class="item">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(2);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="<?php echo $row->link; ?>">Read More</a></p>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div><!-- Carousel END -->
  
<div id="main-content">
  <div class="panel-index">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php echo base_url() ?>assets/img/icon-ikm.jpg" height="100px" width="100%">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <center>
          <h4 class="periode">PERIODE 3</h4>
        </center>
      </div>
    </div>
    <div class="row">
        <div class="box-bulan">
               <div class="bulan">01 Juli 2015 - 31 Desember 2015 </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="row">
          <div class="col-xs-12">
            <div class="icon-index">
              <img src="<?php echo base_url() ?>assets/img/index-jalan.jpg" height="250px" width="100%">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="ikm">SANGAT BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanjalan_d; ?>%;" class="progress-bar progress-bar-jalan" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanjalan_c; ?>%;" class="progress-bar progress-bar-jalan" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">CUKUP BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanjalan_b; ?>%;" class="progress-bar progress-bar-jalan" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">KURANG BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanjalan_a; ?>%;" class="progress-bar progress-bar-jalan" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="rata2">HASIL RATA-RATA</h4>
              <div class="progress" style="margin-bottom: 0px;">
                <div data-percentage="0%" style="width: <?php echo $persen_ikmjalan; ?>%;" class="progress-bar progress-bar-jalan" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="row">
                <div class="col-xs-1">
                  <div class="meter">0</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">1</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">2</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">3</div>
                </div>
                <div class="col-xs-2">
                  <div class="meter" style="text-align:right">4</div>
                </div> 
              </div>
              <?php if ($ikmjalan > 3.26) {
                  $nilai_jalan = "SANGAT BAIK";
            } elseif ($ikmjalan > 2.51) {
                  $nilai_jalan = "BAIK";
            } elseif ($ikmjalan > 1.76){
                  $nilai_jalan = "CUKUP BAIK";
            } else {
                  $nilai_jalan ="KURANG BAIK";
            } ?>
              <center><h4 class="ikm"><?php echo $nilai_jalan; ?></h4></center>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12">
            <p class="vote">Apakah Anda ingin berpartisipasi memberikan vote?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <center><a href="<?php echo site_url() ?>jalan/registrasi"><img src="<?php echo base_url() ?>assets/img/vote.png" height="100px" width="100px"></a></center>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="row">
          <div class="col-xs-12">
            <div class="icon-index">
              <center><img src="<?php echo base_url() ?>assets/img/index-pju.jpg" height="250px" width="100%"></center>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="ikm">SANGAT BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanpju_d; ?>%;" class="progress-bar progress-bar-pju" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanpju_c; ?>%;" class="progress-bar progress-bar-pju" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">CUKUP BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanpju_b; ?>%;" class="progress-bar progress-bar-pju" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">KURANG BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabanpju_a; ?>%;" class="progress-bar progress-bar-pju" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="rata2">HASIL RATA-RATA</h4>
              <div class="progress" style="margin-bottom: 0px;">
                <div data-percentage="0%" style="width: <?php echo $persen_ikmpju; ?>%;" class="progress-bar progress-bar-pju" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="row">
                <div class="col-xs-1">
                  <div class="meter">0</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">1</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">2</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">3</div>
                </div>
                <div class="col-xs-2">
                  <div class="meter" style="text-align:right">4</div>
                </div> 
              </div>
              <?php if ($ikmpju > 3.26) {
                  $nilai_pju = "SANGAT BAIK";
            } elseif ($ikmpju > 2.51) {
                  $nilai_pju = "BAIK";
            } elseif ($ikmpju > 1.76){
                  $nilai_pju = "CUKUP BAIK";
            } else {
                  $nilai_pju ="KURANG BAIK";
            } ?>

              <center><h4 class="ikm"><?php echo $nilai_pju; ?></h4></center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="vote">Apakah Anda ingin berpartisipasi memberikan vote?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <center><a href="<?php echo site_url() ?>pju/registrasi"><img src="<?php echo base_url() ?>assets/img/vote.png" height="100px" width="100px"></a></center>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="row">
          <div class="col-xs-12">
            <div class="icon-index">
              <img src="<?php echo base_url() ?>assets/img/index-drainase.jpg" height="250px" width="100%">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="ikm">SANGAT BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabandrain_d; ?>%;" class="progress-bar progress-bar-drainase" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabandrain_c; ?>%;" class="progress-bar progress-bar-drainase" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">CUKUP BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabandrain_b; ?>%;" class="progress-bar progress-bar-drainase" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">KURANG BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabandrain_a; ?>%;" class="progress-bar progress-bar-drainase" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="rata2">HASIL RATA-RATA</h4>
              <div class="progress" style="margin-bottom: 0px;">
                <div data-percentage="0%" style="width: <?php echo $persen_ikmdrain; ?>%;" class="progress-bar progress-bar-drainase" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="row">
                <div class="col-xs-1">
                  <div class="meter">0</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">1</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">2</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">3</div>
                </div>
                <div class="col-xs-2">
                  <div class="meter" style="text-align:right">4</div>
                </div> 
              </div>
              <?php if ($ikmdrain > 3.26) {
                  $nilai_drain = "SANGAT BAIK";
            } elseif ($ikmdrain > 2.51) {
                  $nilai_drain = "BAIK";
            } elseif ($ikmdrain > 1.76){
                  $nilai_drain = "CUKUP BAIK";
            } else {
                  $nilai_drain ="KURANG BAIK";
            } ?>
              <center><h4 class="ikm"><?php echo $nilai_drain; ?></h4></center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="vote">Apakah Anda ingin berpartisipasi memberikan vote?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <center><a href="<?php echo site_url() ?>drainase/registrasi"><img src="<?php echo base_url() ?>assets/img/vote.png" height="100px" width="100px"></a></center>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="row">
          <div class="col-xs-12">
            <div class="icon-index" style="border-right-width: 0px;">
              <img src="<?php echo base_url() ?>assets/img/index-sungai.jpg" height="250px" width="100%">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="ikm">SANGAT BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabansungai_d; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabansungai_c; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">CUKUP BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabansungai_b; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="ikm">KURANG BAIK</h4>
              <div class="progress">
                <div data-percentage="0%" style="width: <?php echo $jawabansungai_a; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="grafik">
              <h4 class="rata2">HASIL RATA-RATA</h4>
              <div class="progress" style="margin-bottom: 0px;">
                <div data-percentage="0%" style="width: <?php echo $persen_ikmsungai; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="row">
                <div class="col-xs-1">
                  <div class="meter">0</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">1</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">2</div>
                </div>
                <div class="col-xs-2">
                </div>
                <div class="col-xs-1">
                  <div class="meter">3</div>
                </div>
                <div class="col-xs-2">
                  <div class="meter" style="text-align:right">4</div>
                </div> 
              </div>
              <?php if ($ikmsungai > 3.26) {
                  $nilai_sungai = "SANGAT BAIK";
            } elseif ($ikmsungai > 2.51) {
                  $nilai_sungai = "BAIK";
            } elseif ($ikmsungai > 1.76){
                  $nilai_sungai = "CUKUP BAIK";
            } else {
                  $nilai_sungai ="KURANG BAIK";
            } ?>
              <center><h4 class="ikm"><?php echo $nilai_sungai; ?></h4></center>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="vote">Apakah Anda ingin berpartisipasi memberikan vote?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <center><a href="<?php echo site_url() ?>sungai/registrasi"><img src="<?php echo base_url() ?>assets/img/vote.png" height="100px" width="100px"></a></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      
<div id="content">
  <center>
  <div class="panel-home">
    <div class="row">
      <div class="col-xs-4">
        <a href="<?php echo base_url() ?>profile/visi"><img src="<?php echo base_url() ?>assets/img/profile.jpg" height="200px" width="100%"alt=""></a>
      </div>
      <div class="col-xs-4">
        <a href="<?php echo base_url() ?>renstra"><img src="<?php echo base_url() ?>assets/img/renstra.jpg" height="200px" width="100%"alt=""></a>
      </div>
      <div class="col-xs-4">
        <a href="<?php echo base_url() ?>kegiatan"><img src="<?php echo base_url() ?>assets/img/kegiatan.jpg" height="200px" width="100%"alt=""></a>
      </div>
    </div>
    <img src="<?php echo base_url() ?>assets/img/line.jpg" height="25px" width="100%">
    <div class="row">
      <div class="col-sm-8">
        <img src="<?php echo base_url() ?>assets/img/artikel.jpg" height="80px" width="100%">
        <img src="<?php echo base_url() ?>assets/img/line.jpg" height="25px" width="100%">
        <?php foreach($artikel->result_array() as $data){
        
        $ringkasan = strip_tags($data['article']);
        
        $e = explode(' ',$ringkasan);
        echo "<div class=\"row\">
          <div class=\"col-sm-3\"><img class=\"img-thumbnail\" src=\"assets/img/artikel/$data[image]\"></div>
          <div class=\"col-sm-9\"><h4 class=\"title\"><a href=\"artikel/index/$data[article_id]\">$data[title_article]</a></h4>
          <p class=\"article\">";
            
            
            $jml_kata = 15;
            for($i=0;$i<=$jml_kata;$i++){
            echo $e[$i].' ';
            }
          echo ". . . </p>
          <div class=\"more\">
            <a class=\"artikel\" href=\"site/artikel/$data[article_id]\">>BACA LEBIH LANJUT</a>
          </div>
        </div>
      </div>";
      } ?>
      
      <img src="<?php echo base_url() ?>assets/img/line.jpg" height="25px" width="100%">
    </div>
    <div class="col-sm-4">
      <div class="box-twitter">
        <div class="row">
          <div class="col-xs-12">
            <a class="twitter-timeline"  href="https://twitter.com/dbmpkotabdg" data-widget-id="626631877495881728">Tweets by @dbmpkotabdg</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</center>
<br>
</div>