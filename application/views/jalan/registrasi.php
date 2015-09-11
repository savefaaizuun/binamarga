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
		<img src="<?php echo base_url() ?>assets/img/icon-register.jpg" height="120px" width="100%" alt="">
		<center><h3 class="voter">REGISTER</h3></center>
		<div class="row vertical-offset-100">
			<div class="panel-form">
				<center><p class="voter">Masukan nomor handphone anda dan tunggu balasan kode verifikasi melalui SMS</p></center>
				<form class="form-horizontal" action="<?php echo base_url(); ?>jalan/verifikasi" method="post" enctype="multipart/form-data" />
					<div class="form-group">
						<label class="control-label">No Handphone</label>
						<input type="text" name="mobile" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-danger pull-right" style="width:72px;">KIRIM</button>
					</div>
					<div class="form-group">
						<a href="<?php echo base_url(); ?>" class="btn btn-sm btn-warning pull-right">KEMBALI</a>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>