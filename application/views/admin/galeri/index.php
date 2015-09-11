
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
		Galeri
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> DBMP</a></li>
			<li><a href="#">Galeri</a></li>
			<li class="active">Foto</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box box-default color-palette-box">
						<div class="box-header with-border">
							<h3 class="box-title"><i class="fa fa-tag"></i> Galeri </h3>
						</div>
						<div class="box-body">
							<div>
								<a href='<?php echo site_url() ?>administrator/galeri/jalan' class="btn btn-primary">Jalan</a>
								<a href='<?php echo site_url() ?>administrator/galeri/pju' class="btn btn-primary">Pju</a>
								<a href='<?php echo site_url() ?>administrator/galeri/drainase' class="btn btn-primary">Drainase</a>
								<a href='<?php echo site_url() ?>administrator/galeri/sungai' class="btn btn-primary">Sungai</a>
							</div>
							<br>
							<div>
								<?php echo $output; ?>
							</div>
						</div><!-- /.box-body -->
					</div>				
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->




