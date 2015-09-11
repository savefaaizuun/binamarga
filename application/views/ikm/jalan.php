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
		padding: 20px;
		background: #1B4E68 none repeat scroll 0% 0%;
		border-radius: 10px;
		margin: 20px 0px;
	}
	.h3, h3.voter  {
font-size: 24px;
color: #096A8F;
font-weight: bold;
}
</style>
<div id="body-login">
	<div class="container">
		<div class="panel-login">
			<img src="<?php echo base_url() ?>assets/img/icon-voter.jpg" height="120px" width="100%" alt="">
			<center><h3 class="voter">LOGIN VOTER</h3></center>
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel-form">
						<form accept-charset="UTF-8" role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="No Handphone" name="ho_hp" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Code Verifikasi" name="kode" type="text" value="">
								</div>
								
								<div class="row">
									<div class="col-xs-3">
										<input class="btn-success btn-block" type="submit" value="Login">
									</div>
									<div class="col-xs-1">							
									</div>
									<div class="col-xs-4">
										<button class="btn-danger btn-block">Get Code</button>
									</div>
								</div>
								
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>