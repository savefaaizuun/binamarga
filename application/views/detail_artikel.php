<style>
.panel-article{
width: 80%;
background: #FFFFFF;
padding-top: 10px;
padding-bottom: 40px;
margin: 0% 10%;
}
.article{
padding: 0px 20px 20px 20px;
border-right-width: 1px; border-right-style: solid;
}
.sidebar{
padding: 0px 30px 20px 20px;
}
.h3, h3.judul-artikel  {
font-size: 24px;
font-weight: bold;
text-align: left;
}
.h3, h3.side  {
font-size: 24px;
font-weight: bold;
text-align: left;
}
.h5, h5.tanggal  {
font-size: 14px;
color: #938D8D;
font-weight: bold;
text-align: left;
}
.h4, h4.judul-side  {
font-size: 18px;
font-weight: bold;
text-align: left;
}
.img, img.artikel{
width: 100%;
height: 350px;
margin: 20px auto;
}
.img-thumbnail, img-thumbnail.berita{
width: 100%;
height: 200px;
margin: 20px auto;
}
.a, a.artikel {
color: #000;
text-decoration: none;
}
.p, p.more  {
font-size: 12px;
font-weight: normal;
text-align: left;
}
.isi-article{
margin-top: 10px;
text-align: left;
}
.berita-terkait{
border-bottom-style: solid;
border-bottom-width: 1px;
padding-bottom: 10px;
}
.point{
  padding-right: 10px; padding-left: 10px;
}
.side-article{
margin-bottom: 10px;
}
.komentar {
margin : 20px;
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
    <div class="panel-article">
      <div class="row">
        <div class="col-sm-8">
          <div class="article">
            <h3 class="judul-artikel">
            <?php
            echo "<h3>" .$artikel['title_article']. "</h3>";
            ?>
            </h3>
            <h5 class="tanggal"><?php echo $hari.", ".$tgl; ?> WIB</h5>
            <img class="artikel" src="<?php echo base_url('assets/img/artikel/'.$artikel['image']);?>">
            <div class="isi-artikel">
              <?php
              echo "<p>" .$artikel['article']. "</p>";
              ?>
            </div>
            <h4 class="berita-terkait">ARTIKEL TERKAIT</h4>
            <?php foreach($list_artikel->result_array() as $data){
             
              echo "<div class=\"row\">
              <div class=\"col-xs-1\"><div class=\"point\"><img src=\"../../assets/img/point-artikel.jpg\" width=\"100%\" height=\"20px\"></div></div>
              <div class=\"col-xs-11\"><p><a class=\"artikel\" href=\"../index/$data[article_id]\">$data[title_article]</a></p>
             
                </div>
              </div>";
            } ?>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="sidebar">
            <h3 class="side">BERITA LAINNYA</h3>
            <div class="box-side">
              <?php foreach($berita->result_array() as $data){
              
              $ringkasan = strip_tags($data['isi_berita']);
              
              $e = explode(' ',$ringkasan);
              echo "<div class=\"row\">
                <img class=\"img-thumbnail\" class=\"berita\" src=\"../../assets/img/berita/$data[image]\">
                <h4 class=\"judul-side\"><a href=\"$data[link]\" target=\"_blank\">$data[judul_berita]</a></h4>
                <p class=\"isi_berita\">";
                  
                  
                  $jml_kata = 15;
                  for($i=0;$i<=$jml_kata;$i++){
                  echo $e[$i].' ';
                  }
                echo ". . . </p>
                <div class=\"more\">
                  <a class=\"berita\" href=\"$data[link]\" target=\"_blank\">>BACA LEBIH LANJUT</a>
                </div>
              </div>
              ";
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
