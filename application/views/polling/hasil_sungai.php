<style>
	.progress {
height: 20px;
margin-bottom: 20px;
overflow: hidden;
background-color: #f5f5f5;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.progress {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#ebebeb),to(#f5f5f5));
background-image: -webkit-linear-gradient(top,#ebebeb 0,#f5f5f5 100%);
background-image: -moz-linear-gradient(top,#ebebeb 0,#f5f5f5 100%);
background-image: linear-gradient(to bottom,#ebebeb 0,#f5f5f5 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb',endColorstr='#fff5f5f5',GradientType=0);
}
.progress {
height: 12px;
background-color: #ebeef1;
background-image: none;
box-shadow: none;
}
.progress-bar {
float: left;
width: 0;
height: 100%;
font-size: 12px;
line-height: 20px;
color: #fff;
text-align: center;
background-color: #428bca;
-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
-webkit-transition: width .6s ease;
transition: width .6s ease;
}
.progress-bar {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#428bca),to(#3071a9));
background-image: -webkit-linear-gradient(top,#428bca 0,#3071a9 100%);
background-image: -moz-linear-gradient(top,#428bca 0,#3071a9 100%);
background-image: linear-gradient(to bottom,#428bca 0,#3071a9 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca',endColorstr='#ff3071a9',GradientType=0);
}
.progress-bar {
box-shadow: none;
border-radius: 3px;
background-color: #0090D9;
background-image: none;
-webkit-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-moz-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-ms-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-o-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-webkit-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-moz-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-ms-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-o-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
}
.progress-bar-pju {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#5cb85c),to(#449d44));
background-image: -webkit-linear-gradient(top,#5cb85c 0,#449d44 100%);
background-image: -moz-linear-gradient(top,#5cb85c 0,#449d44 100%);
background-image: linear-gradient(to bottom,#5cb85c 0,#449d44 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c',endColorstr='#ff449d44',GradientType=0);
}
.progress-bar-pju {
background-color: #8CC344;
background-image: none;
}
.progress-bar-pju {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#5bc0de),to(#31b0d5));
background-image: -webkit-linear-gradient(top,#5bc0de 0,#31b0d5 100%);
background-image: -moz-linear-gradient(top,#5bc0de 0,#31b0d5 100%);
background-image: linear-gradient(to bottom,#5bc0de 0,#31b0d5 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de',endColorstr='#ff31b0d5',GradientType=0);
}
.progress-bar-pju {
background-color: #00ADEE;
background-image: none;
}
.progress-bar-drainase {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#f0ad4e),to(#ec971f));
background-image: -webkit-linear-gradient(top,#f0ad4e 0,#ec971f 100%);
background-image: -moz-linear-gradient(top,#f0ad4e 0,#ec971f 100%);
background-image: linear-gradient(to bottom,#f0ad4e 0,#ec971f 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e',endColorstr='#ffec971f',GradientType=0);
}
.progress-bar-drainase {
background-color: #EF1A77;
background-image: none;
}
.progress-bar-sungai {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#d9534f),to(#c9302c));
background-image: -webkit-linear-gradient(top,#d9534f 0,#c9302c 100%);
background-image: -moz-linear-gradient(top,#d9534f 0,#c9302c 100%);
background-image: linear-gradient(to bottom,#d9534f 0,#c9302c 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f',endColorstr='#ffc9302c',GradientType=0);
}
.progress-bar-sungai {
background-color: #F1572A;
background-image: none;
}
.h4, h4.ikm{
	margin-top: 0px; margin-bottom: 5px;
	font-weight: bold;
	font-family: Helvetica;
	font-size: 16px;
}

.panel-kuisioner{
width: 80%;
background: #C4E5EC  none repeat scroll 0% 0%;
color: #FFFFFF;
margin: 0% 10%;
padding-bottom: 2%;
}

.panel-polling{
width: 80%;
background: #C4E5EC  none repeat scroll 0% 0%;
color: #FFFFFF;
margin: 0% 10%;
}
.panel-grafik{
width: 80%;
background: #C4E5EC  none repeat scroll 0% 0%;
color: #FFFFFF;
margin: 0% 10%;
padding-bottom: 2%;
}
.grafik{
padding-top: 2%;
background: #0A6B8B none repeat scroll 0% 0%;
padding: 2% 5%;
}

</style>
<div id="content">
  <div class="panel-polling">
    <img src="<?php echo base_url() ?>assets/img/icon-sungai.jpg" height="400px" width="100%" alt="">
  </div>
  <div class="panel-grafik">
    <div class="grafik">
      <div class="row">
			<div class="col-md-12">
				<center><h3>Index Kepuasan Masyarakat</h3></center>
				<br>
				<div class="col-md-12">
					<h4 class="ikm">SANGAT BAIK</h4>
					<div class="progress">
						<div data-percentage="0%" style="width: <?php echo $jawabansungai_d; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="ikm">BAIK</h4>
					<div class="progress">
						<div data-percentage="0%" style="width: <?php echo $jawabansungai_c; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="ikm">CUKUP BAIK</h4>
					<div class="progress">
						<div data-percentage="0%" style="width: <?php echo $jawabansungai_b; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="ikm">KURANG BAIK</h4>
					<div class="progress">
						<div data-percentage="0%" style="width: <?php echo $jawabansungai_a; ?>%;" class="progress-bar progress-bar-sungai" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<br>
				<center><a href="<?php echo base_url() ?>polling/logout"><button type="button" class="btn btn-warning ">Logout</button></a></center>
			</div>
		</div>
    </div>
  </div>
</div>