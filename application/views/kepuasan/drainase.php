<style type="text/css">
	.panel-kepuasan{
			border: none;
			background-color: #F1F1F1;
			height: 320px;
			width: 320px;
			text-align:  center;
		}

</style>	
		
	<div id="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel-body">
				<div class="panel panel-default">
					<p><center>Ini adalah halaman untuk melihat hasil index kepuasan <?php echo $title; ?> dari kinerja yang di lakukan Dinas Bina Marga Kota Bandung</center></p>
					<div class="panel-body">
						<center>
							<div class="panel-kepuasan">
							<p>Apakah Anda ingin berpartisipasi memberikan vote?</p>

							<a href="<?php echo site_url('polling');?>" class="btn btn-success"><i class=""></i> Berpartisipasi</a>
							atau 
							<a href="<?php echo site_url() ?>hasil_polling/drainase" class="btn btn-info"><i class=""></i> Lihat Hasil</a>
							</div>
						</center>
					</div>		
				</div>
			</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		
		