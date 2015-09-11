<style>
  #article {
width: 100%;
background: #FFF none repeat scroll 0% 0%;
margin-top: 10px;
}
h3{
color: #00B6E8;
font-weight: bold;
}
h4.title > a, h4.title > a:visited{
color: #00B6E8;
}
h4.title > a:hover{
color: #0D6FA5;
text-decoration: none;
}
</style>
<div id="article">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="<?php echo base_url() ?>assets/img/artikel.jpg" height="80px" width="100%" >
        <div class="row">
          <div class="col-sm-12">
            <h3>Daftar Artikel</h3>
            
            <?php foreach($list_artikel->result_array() as $data){
            // hapus semua tag html agar jadi plain text (string)
            "<div class=\"row\">
              <div class=\"col-sm-12\"><h4 class=\"title\"><a href=\"../site/artikel/$data[article_id]\">$data[title_article]</a></h4>
              
            </div>
          </div>";
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>