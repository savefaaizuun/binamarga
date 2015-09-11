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

<div id="main-content">
  <div class="panel-article">
    <div class="row">
      <div class="col-sm-8">
        <div class="article">
          <h3>List Kegiatan</h3>
          <?php foreach($listBidang->result_array() as $data){
          ?>
          <div class="row">
            
            <div class="col-xs-1">
              <div class="point">
                <img src="<?php echo base_url(); ?>assets/img/point-artikel.jpg" width="100%" height="20px" alt="">
              </div>
            </div>
            <div class="col-xs-11">
              <p><a href="<?php echo base_url(); ?>kegiatan/bidang1/<?php echo $data['kegiatan_id']; ?>"><?php echo $data['judul']; ?></a></p>
            </div>  
          </div>
          <?php } ?>
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
              <img class=\"img-thumbnail\" class=\"berita\" src=\"../assets/img/berita/$data[image]\">
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