<style>
#panel-article{
width: 100%;
background: #8EC9CF;
}
.panel-article{
width: 80%;
background: #FFFFFF;
padding-top: 10px;
padding-bottom: 40px;
margin: 0% 10%;
}
.article{
	padding: 0px 20px 20px 20px;
	
}
.sidebar{
	padding: 0px 30px 20px 20px;
	border-left-style: solid;
	border-left-width: 1px;
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
a.artikel {
color: #000;
text-decoration: none;
}
.p, p.lanjut  {
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
.side-article{
	margin-bottom: 10px;
}
.komentar {
	margin : 20px;
}
</style>

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
  
  
<div id="main-content">
	<div class="panel-article">
		<div class="row">
			<div class="col-sm-8">
				<div class="article">
					<h3 class="judul-artikel">Menjelang Puasa, Perbaikan Jalan Pantura Dikebut</h3>
					<h5 class="tanggal">Kamis, 9 Juli 2015 | 11:15 WIB</h5>
					<img src="<?php echo base_url() ?>assets/img/img-artikel.jpg" height="300px" width="100%" alt="">
					<div class="isi-article">
						<p>TEMPO.CO, Jakarta - Komisi V DPR RI mendesak pemerintah khususnya Kementerian Pekerjaan Umum dan Perumahan Rakyat menuntaskan perbaikan infrastruktur jalan dan jembatan sebelum Lebaran 2015 agar masyarakat dapat mudik dengan nyaman.</p>
						<p>"Dari awal kami sudah minta pemerintah mengevaluasi penyelenggaraan mudik sebelumnya, dan membuat perencanaan yang matang menghadapi Lebaran tahun ini, " kata Wakil Ketua Komisi V DPR RI Michael Watimena di Padang, Sumatera Barat, Kamis 28 Mei 2015.</p>
						<p>Ia menyampaikan hal itu usai pelaksanaan grup diskusi terbatas guna meminta masukan Rancangan Undang-Undang Arsitek dengan sejumlah pihak terkait.</p>
						<p>Michael mengatakan dengan adanya antisipasi perbaikan infrastruktur sejak jauh hari diharapkan proses pelaksanaan ibadah Ramadhan dan Idul Fitri akan terselenggara dengan baik, salah satunya didukung kondisi jalan yang layak serta moda transportasi yang memadai. </p>
						<p>Untuk wilayah Sumatera, jalan yang menghubungkan antarprovinsi yang menjadi kewenangan pemerintah pusat sudah harus tuntas kalau bisa dua minggu sebelum lebaran, kata dia. Lebih lanjut ia mengatakan DPR tidak mau lagi perbaikan jalan dan jembatan menjelang Lebaran menjadi semacam proyek abadi karena selalu diperbaiki setiap tahun.</p>
						<p>"Karena itu harus dibuat perencanaan yang lebih matang sejak awal agar jalan tersebut tidak setiap tahun menjelang lebaran diperbaiki," ujar dia. Michael juga  juga melihat saat ini sudah cukup banyak jalur alternatif yang dibuat sehingga arus mudik tidak lagi tertumpu pada satu jalur saja.</p>
						<p>Sementara, Kepala Dinas Prasarana Jalan Pemukiman dan Tata Ruang Sumbar Suprapto mengatakan secara umum kondisi jalan di daerah ini relatif baik. "Kalau Lebaran di Sumbar relatif baik, yang perlu menjadi perhatian adalah provinsi ini rawan bencana sehingga yang perlu dipersiapkan adalah antisipasi bencana," kata dia. </p>
						<p>Ia mengatakan mengantisipasi bencana alam saat Lebaran pihaknya sudah menyiapkan tim yang akan bergerak cepat. "Ada 12 lokasi zona merah yang akan disiagakan tim minimal dua minggu sebelum Lebaran," kata dia. </p>
					</div>
					<h4 class="berita-terkait">BERITA TERKAIT</h4>
					<p>REI JABAR : Kami Tak Libatkan Garap Proyek 14 menara Rusunawa Bandung</p>
					<p>Pemkot Bandung Siapkan 13 Rusun</p>
					<p>Progres Insfrastruktur Bandung Jelang KAA Capai 90%</p>
					<p>Konferensi Asia Afrika 2015 : Kehadiran Jet Pribadi Dibatasi</p>
					<p>Bandung Bakal Punya Kolam Renang Standar Olimpiade</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="sidebar">
					<h3 class="side">SHARE LINK</h3>
					<img src="<?php echo base_url() ?>assets/img/share.jpg" height="50px" width="100%" alt="">
					<h3 class="side">ARTIKEL LAINNYA</h3>
					<div class="box-side">
						<img src="<?php echo base_url() ?>assets/img/konten2.jpg" height="175px" width="100%" alt="">
						<h4 class="judul-side">200 PJU Klasik Hiasi Jalanan Kota Bandung</h4>
						<div class="side-article">
							BANDUNG - Demi mempercantik estetika kota jelang peringatan Konferensi Asia Afrika (KAA), Pemkot Bandung memasang lebih dari 200 penerangan jalan umum (PJU) bergaya klasik di se jumlah ruas jalan di Kota Bandung dengan total anggaran sekitar Rp3,5 miliar.
						</div>
						<a class="artikel" href=""><p class="lanjut">>BACA LEBIH LANJUT</p></a>
					</div>
					<div class="box-side">
						<img src="<?php echo base_url() ?>assets/img/konten3.jpg" height="175px" width="100%" alt="">
						<h4 class="judul-side">200 PJU Klasik Hiasi Jalanan Kota Bandung</h4>
						<div class="side-article">
							BANDUNG - Demi mempercantik estetika kota jelang peringatan Konferensi Asia Afrika (KAA), Pemkot Bandung memasang lebih dari 200 penerangan jalan umum (PJU) bergaya klasik di se jumlah ruas jalan di Kota Bandung dengan total anggaran sekitar Rp3,5 miliar.
						</div>
						<a class="artikel" href=""><p class="lanjut">>BACA LEBIH LANJUT</p></a>
					</div>
					<div class="box-side">
						<img src="<?php echo base_url() ?>assets/img/konten4.jpg" height="175px" width="100%" alt="">
						<h4 class="judul-side">200 PJU Klasik Hiasi Jalanan Kota Bandung</h4>
						<div class="side-article">
							BANDUNG - Demi mempercantik estetika kota jelang peringatan Konferensi Asia Afrika (KAA), Pemkot Bandung memasang lebih dari 200 penerangan jalan umum (PJU) bergaya klasik di se jumlah ruas jalan di Kota Bandung dengan total anggaran sekitar Rp3,5 miliar.
						</div>
						<a class="artikel" href=""><p class="lanjut">>BACA LEBIH LANJUT</p></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="komentar">
				<img src="<?php echo base_url() ?>assets/img/komentar.jpg" height="500px" width="100%" alt="">
			</div>
		</div>
		
		
	</div>
	
</div>