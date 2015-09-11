<style type="text/css">

  .plot {
        margin-bottom: 30px;
        margin-left: auto;
        margin-right: auto;
    }

  .jqplot-series-shadowCanvas{
      background-color: #F1F1F1;
    }

    #jalan .jqplot-meterGauge-tick {
        font-size: 8pt;
    }

    #jalan .jqplot-meterGauge-label {
        font-size: 12pt;
        position:center;
    }

    #pju .jqplot-meterGauge-tick {
        font-size: 8pt;
    }

    #pju .jqplot-meterGauge-label {
        font-size: 12pt;
        position:center;
    }

    #drainase .jqplot-meterGauge-tick {
        font-size: 8pt;
    }

    #drainase .jqplot-meterGauge-label {
        font-size: 12pt;
        position:center;
    }

    #sungai .jqplot-meterGauge-tick {
        font-size: 8pt;
    }

    #sungai .jqplot-meterGauge-label {
        font-size: 12pt;
        position:center;
    }

    h4.title > a, h4.title > a:visited{
      color: #00B6E8;
    }

    h4.title > a:hover{
      color: #0D6FA5;
      text-decoration: none;
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
                  <p><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>site/slide/<?php echo $row->slide_id ?>">Read More</a></p>
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
                  <p><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>site/slide/<?php echo $row->slide_id ?>">Read More</a></p>
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
                  <p><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>site/slide/<?php echo $row->slide_id ?>">Read More</a></p>
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
      
        
        
      
        <div id="index">
          <img src="<?php echo base_url() ?>assets/img/index2.jpg" height="80px" width="100%">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <center>
                  <h3>Jalan Raya</h3>
                  <div id="jalan" class="plot" style="width:200px;height:150px;"></div>
                </center>
              </div>
              <div class="col-sm-3">
                <center>
                  <h3>PJU</h3>
                  <div id="pju" class="plot" style="width:200px;height:150px;"></div>
                </center> 
              </div>
              <div class="col-sm-3">
                <center>
                  <h3>Drainase</h3>
                  <div id="drainase" class="plot" style="width:200px;height:150px;"></div>
                </center>
              </div>
              <div class="col-sm-3">
                <center>
                  <h3>Sungai</h3>
                  <div id="sungai" class="plot" style="width:200px;height:150px;"></div>
                </center>
              </div>
            </div>
          </div>
        </div>
     

      
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <img src="<?php echo base_url() ?>assets/img/artikel.jpg" height="80px" width="100%" >
              <?php foreach($artikel->result_array() as $data){
              // hapus semua tag html agar jadi plain text (string)
              $ringkasan = strip_tags($data['article']);
              // pecah string berdasarkan spasi (jadi array)
              $e = explode(' ',$ringkasan);
              echo "<div class=\"row\">
              <div class=\"col-sm-3\"><img class=\"img-circle\" src=\"assets/img/artikel/$data[image]\"></div>
              <div class=\"col-sm-9\"><h4 class=\"title\"><a href=\"site/artikel/$data[article_id]\">$data[title_article]</a></h4>
              <p>";
              // looping array string sebanyak x dengan disambung spasi
              
              $jml_kata = 40;
              for($i=0;$i<=$jml_kata;$i++){
                echo $e[$i].' ';
              }
              echo ". . .</p>
                </div>
              </div>";
            } ?>
              
              <br>
              <div class="row">
                <div class="col-xs-12">
                  <center><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>site/listartikel">Load More</a></center>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row">
                <div class="col-xs-12">
                  <a class="twitter-timeline" href="https://twitter.com/Save_izuun" data-widget-id="598034446130946048">Tweet oleh @Save_izuun</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
              </script>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<script type="text/javascript" class="code">
$(document).ready(function(){

   s1 = [<?php echo $jalan; ?>];
   

   plot4 = $.jqplot('jalan',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               label: "<?php if ($jalan >= 3.25){
                      echo 'Sangat Baik';
                    } elseif ($jalan >= 2.51) {
                     
                      echo 'Baik';
                    } elseif ($jalan >= 1.76) {
                      
                      echo 'Kurang Baik';
                    } else {
                      
                      echo 'Tidak Baik'; 
                     }?>",
               labelPosition: 'bottom',
               labelHeightAdjust: -5,
               intervalOuterRadius: 30,
               ticks: [1, 2, 3, 4],
               intervals:[1, 2, 3, 4],
               intervalColors:['#F30C0C', '#F6E416', '#1AED15', '#1497EA']
           }
       }
   });
});

$(document).ready(function(){

   s1 = [<?php echo $pju; ?>];
   

   plot4 = $.jqplot('pju',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               label: "<?php if ($pju >= 3.25){
                      echo 'Sangat Baik';
                    } elseif ($pju >= 2.51) {
                     
                      echo 'Baik';
                    } elseif ($pju >= 1.76) {
                      
                      echo 'Kurang Baik';
                    } else {
                      
                      echo 'Tidak Baik'; 
                     }?>",
               labelPosition: 'bottom',
               labelHeightAdjust: -5,
               intervalOuterRadius: 30,
               ticks: [1, 2, 3, 4],
               intervals:[1, 2, 3, 4],
               intervalColors:['#F30C0C', '#F6E416', '#1AED15', '#1497EA']
           }
       }
   });
});

$(document).ready(function(){

   s1 = [<?php echo $drainase; ?>];
   

   plot4 = $.jqplot('drainase',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               label: "<?php if ($drainase >= 3.25){
                      echo 'Sangat Baik';
                    } elseif ($drainase >= 2.51) {
                     
                      echo 'Baik';
                    } elseif ($drainase >= 1.76) {
                      
                      echo 'Kurang Baik';
                    } else {
                      
                      echo 'Tidak Baik'; 
                     }?>",
               labelPosition: 'bottom',
               labelHeightAdjust: -5,
               intervalOuterRadius: 30,
               ticks: [1, 2, 3, 4],
               intervals:[1, 2, 3, 4],
               intervalColors:['#F30C0C', '#F6E416', '#1AED15', '#1497EA']
           }
       }
   });
});

$(document).ready(function(){

   s1 = [<?php echo $sungai; ?>];
   

   plot4 = $.jqplot('sungai',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               label: "<?php if ($sungai >= 3.25){
                      echo 'Sangat Baik';
                    } elseif ($sungai >= 2.51) {
                     
                      echo 'Baik';
                    } elseif ($sungai >= 1.76) {
                      
                      echo 'Kurang Baik';
                    } else {
                      
                      echo 'Tidak Baik'; 
                     }?>",
               labelPosition: 'bottom',
               labelHeightAdjust: -5,
               intervalOuterRadius: 30,
               ticks: [1, 2, 3, 4],
               intervals:[1, 2, 3, 4],
               intervalColors:['#F30C0C', '#F6E416', '#1AED15', '#1497EA']
           }
       }
   });
});
</script>
      

      