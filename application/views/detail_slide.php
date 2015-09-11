<style>
	#slide {
    width: 100%;
    background: #FFF none repeat scroll 0% 0%;
    margin-top: 10px;
}
</style>
<div id="slide">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
            <?php
				echo "<h3>" .$slide['title_slide']. "</h3>";
			?>
			<div class="row">
				<div class="col-sm-12">
        <?php 
        $tgl = format_tanggal($slide['update_at']); ?>
				<?php echo " $tgl  WIB" ?>
				</div>
			</div>
			<br>
				<img class="img-thumbnail" src="<?php echo base_url('assets/img/slide/'.$slide['image']);?>" height="350px" width="700px">
			<?php
				echo "<p>" .$slide['article_slide']. "</p>";
			?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>