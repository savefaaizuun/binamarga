
<style>

.panel-gallery{
width: 90%;
background: #C4E5EC;
padding-bottom: 20px;
}
.panel-foto{
width: 90%;
background: #C4E5EC;
padding: 0px 10px;
}
.h3, h3.foto-terbaru {
font-size: 20px;
color: #096A8F;
font-weight: bold;
margin: 20px 0px 10px 0px;
}
.foto-baru {
padding: 0px 10px 0px 10px;
}
.foto {
padding: 0px 10px 20px 10px;
}

</style>
<img src="<?php echo base_url() ?>assets/img/pic-visi.jpg" height="400px" width="100%" alt="">
<div id="main-content">
  <center>
  <div class="panel-gallery">
    <img src="<?php echo base_url() ?>assets/img/icon-gallery.jpg" height="100px" width="100%" alt="">
    <div class="row">
      <div class="col-sm-3">
        <a href="<?php echo base_url() ?>gallery"><img src="<?php echo base_url() ?>assets/img/gallery1.jpg" height="100px" width="100%" alt=""></a>
      </div>
      <div class="col-sm-3">
        <a href="<?php echo base_url() ?>gallery/pju"><img src="<?php echo base_url() ?>assets/img/gallery2.jpg" height="100px" width="100%" alt=""></a>
      </div>
      <div class="col-sm-3">
        <a href="<?php echo base_url() ?>gallery/drainase"><img src="<?php echo base_url() ?>assets/img/gallery3.jpg" height="100px" width="100%" alt=""></a>
      </div>
      <div class="col-sm-3">
        <a href="<?php echo base_url() ?>gallery/sungai"><img src="<?php echo base_url() ?>assets/img/gallery4.jpg" height="100px" width="100%" alt=""></a>
      </div>
    </div>
    <div class="row">
      <h3 class="foto-terbaru">FOTO TERBARU</h3>
    </div>
    
    <div class="panel-foto">
      <div class="row">
        <?php foreach($listJalan4->result_array() as $data){
        ?>
        <div class="col-xs-3">
          <div class="foto-baru">
            <a class="thumbnail-link" href="<?php echo base_url() ?>assets/uploads/<?php echo $data['url'];; ?>" data-lightbox="jalan-terbaru" ><img class="thumbnail" height="150px" width="100%" src="<?php echo base_url() ?>assets/uploads/<?php echo $data['url'];; ?>" alt=""/></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  </center>
</div>

<div id="content">
  <center>
  <div class="panel-gallery">
      <div class="panel-foto">
        <img src="<?php echo base_url() ?>assets/img/batas.jpg" height="100px" width="100%" alt="">      
        <div class="row">
        <?php foreach($listJalan as $data2){
        ?>
        <div class="col-xs-3">
          <div class="foto">
            <a class="thumbnail-link" href="<?php echo base_url() ?>assets/uploads/<?php echo $data2->url; ?>" data-lightbox="jalan" ><img class="thumbnail" height="150px" width="100%" src="<?php echo base_url() ?>assets/uploads/<?php echo $data2->url; ?>" alt=""/></a>
          </div>
        </div>
        <?php } ?>           
        </div>
        <?php echo $pagination;?>
        <br><br>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a href="<?php echo base_url() ?>profile/visi"><img src="<?php echo base_url() ?>assets/img/profile.jpg" height="200px" width="100%" alt=""></a>
        </div>
        <div class="col-sm-4">
          <a href="<?php echo base_url() ?>renstra"><img src="<?php echo base_url() ?>assets/img/renstra.jpg" height="200px" width="100%" alt=""></a>
        </div>
        <div class="col-sm-4">
          <a href="<?php echo base_url() ?>kegiatan"><img src="<?php echo base_url() ?>assets/img/kegiatan.jpg" height="200px" width="100%" alt=""></a>
        </div>
      </div>
      <br><br>
    </div>
</center>
</div>