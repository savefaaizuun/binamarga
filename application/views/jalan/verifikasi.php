<style>
#body-login{
width: 100%;
background: #8EC9CF;
}
.panel-login{
background: #C4E5EC none repeat scroll 0% 0%;
width: 90%;
margin-left: 5%;
}
.panel-form {
width: 40%;
padding: 30px 30px 10px 30px;
background: #1B4E68 none repeat scroll 0% 0%;
border-radius: 10px;
margin: 5% 30% 5% 30%;
}
.h3, h3.voter  {
font-size: 24px;
color: #096A8F;
font-weight: bold;
}
.p, p.voter {
	color: #FFFFFF;
	font-size: 12px;
}
.control-label {
	padding-top: 7px;
	margin-bottom: 0px;
	text-align: right;
	color: #FFF;
}
</style>
<div id="body-login">
	<div class="panel-login">
		<img src="<?php echo base_url() ?>assets/img/icon-voter.jpg" height="120px" width="100%" alt="">
		<center><h3 class="voter">LOGIN VOTER</h3></center>
		<div class="row vertical-offset-100">
			<div class="panel-form">
				<center><p class="voter">Masukkan Kode verifikasi yang telah di terima</p></center>
				<form class="form-horizontal" action="<?php echo base_url(); ?>jalan/verifykode" method="post" enctype="multipart/form-data" />
					<div class="form-group">
						<label class="control-label">Kode Verifikasi</label>
						<input class="form-control" placeholder="Kode Verifikasi" name="kode_verifikasi" type="text">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-success pull-right" style="width:98px;">SIGN IN</button>
					</div>
				</form>
				
				<form class="form-horizontal" action="<?php echo base_url(); ?>jalan/verifikasi" method="post" enctype="multipart/form-data" />
					<div class="row">
						<div class="col-sm-6">
							<p class="voter">Klik tombol Kirim Ulang jika Kode Verifikasi tidak terkirim.</p>
						</div>
						<div class="col-sm-2">
							
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<input type="hidden" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
								<button type="submit" class="btn btn-sm btn-danger pull-right">KIRIM ULANG</button>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>