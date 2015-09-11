<style>
#panel-tugas{
width: 100%;
background: #FFFFFF;
}
#panel-tugas{
width: 100%;
background: #FFF;
position: center;
}
.panel-kegiatan{
width: 90%;
background: #C4E5EC;
}
.panel-icon{
width: 90%;
background: #C4E5EC;
padding-bottom: 40px;
}
.icon-kegiatan{
margin-top: 10px;
}
.decs-tugas1{
background: #173A4D ;
color: #FFFFFF;
font-size: 12px;
padding-bottom: 10px;
padding-left: 50px; padding-right: 50px;
}
.desc-tugas2{
background: #0A6B8B  ;
color: #FFFFFF;
font-size: 12px;
padding-bottom: 10px;
padding-left: 50px; padding-right: 50px;
}
.desc-tugas3{
background: #7BABB9  ;
color: #FFFFFF;
font-size: 12px;
padding-bottom: 10px;
padding-left: 50px; padding-right: 50px;
}
.h3, h3  {
font-size: 24px;
color: #096A8F;
font-weight: bold;
}
.h4, h4.tahap  {
font-size: 18px;
color: #096A8F;
font-weight: bold;
padding: 30px 0px 20px 0px;
margin: 0px 0px;
}
p {
margin: 0px 0px 10px;
color: #096A8F;
font-size: 14px;
}

#table-kegiatan {
  width: 90%;
  background: #FFF;
  position: center;
}

.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: #C4E5EC;
}
.tr, tr.upt {
background: #7BABB9 none repeat scroll 0% 0%;
color: #FFFFFF;
}
.th, th.upt {
background: #7BABB9 none repeat scroll 0% 0%;
color: #FFFFFF;
}
.th, th.header {
background: #0A6B8B none repeat scroll 0% 0%;
color: #FFFFFF;
border-width: 1px; border-style: solid;
}
.th, th.jumlah {
background: #7BABB9 none repeat scroll 0% 0%;
color: #FFFFFF;
}
</style>
<div id="panel-tugas">
  <center>
  <div class="container">
    <div class="panel-kegiatan">
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
        <div class="row">
          <div class="col-sm-12">
            <div class="icon-kegiatan">
              <img src="<?php echo base_url() ?>assets/img/icon-kegiatan.jpg" height="100px" width="100%" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3>KEGIATAN</h3>
            <p style="padding-bottom: 20px;">Kegiatan Pembangunan Jalan di Kota Bandung terdiri dari beberapa tahap pengerjaan di antaranya : </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img src="<?php echo base_url() ?>assets/img/tahap1.jpg" height="180px" width="100%" alt="">
          </div>
          <div class="col-sm-3">
            <img src="<?php echo base_url() ?>assets/img/tahap2.jpg" height="180px" width="100%" alt="">
          </div>
          <div class="col-sm-3">
            <img src="<?php echo base_url() ?>assets/img/tahap3.jpg" height="180px" width="100%" alt="">
          </div>
          <div class="col-sm-3">
            <img src="<?php echo base_url() ?>assets/img/tahap4.jpg" height="180px" width="100%" alt="">
          </div>
        </div>
        <h4 class="tahap">LELANG TAHAP 1</h4>
        
        <div id="table-kegiatan">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th class="header">No</th>
                <th class="header">NAMA PEKERJAAN</th>
                <th class="header">KECAMATAN</th>
                <th class="header">MASA PELAKSANAAN</th>
                <th class="header">PAGU</th>
                <th class="header">PERUSAHAAN PEMENANG</th>
                <th class="header">NILAI KONTRAK RP.</th>
              </tr>
              <tr>
                <th class="upt"></th>
                <th class="upt">UPT Bojonegara, cibeunying, Tegallega</th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt" style="border-right-width: 1px; border-right-style: solid;"></th>
              </tr>
              <tr>
                <td>1</td>
                <td>Peningkatan JL. Cipaganti</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Peningkatan JL. Kapten Tata Negara</td>
                <td>Sukajadi</td>
                <td>120</td>
                <td>7.452.766.000</td>
                <td>PT. BIRO A.S.R.I</td>
                <td>5.867.128.000</td>
              </tr>
              
              
            </table>
            <tr class="upt">
                <th class="upt"></th>
                <th class="upt">UPT Bojonegara, cibeunying, Tegallega</th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt"></th>
                <th class="upt" style="border-right-width: 1px; border-right-style: solid;"></th>
              </tr>
            
          </div>

        </div>

      </div>
    </div>
  </div>
  </center>
</div>