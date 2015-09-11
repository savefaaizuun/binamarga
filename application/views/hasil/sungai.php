<style type="text/css">
	.plot {
		    margin-bottom: 30px;
		    margin-left: auto;
		    margin-right: auto;
		}

		#sungai .jqplot-meterGauge-tick {
		    font-size: 12pt;
		}

		#sungai .jqplot-meterGauge-label {
		    font-size: 18pt;
		    position:center;
		}
</style>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center>
					<h3>Sungai</h3>
					<div id="sungai" class="plot" style="width:500px;height:300px;"></div>
				</center>
			</div>
		</div>
	</div>
</div>

	
<script type="text/javascript" class="code">
$(document).ready(function(){

   s1 = [<?php echo $rata; ?>];
   

   plot4 = $.jqplot('sungai',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               label: "<?php if ($rata >= 3.25){
  			              echo 'Sangat Baik';
			              } elseif ($rata >= 2.51) {
			               
			                echo 'Baik';
			              } elseif ($rata >= 1.76) {
			                
			                echo 'Kurang Baik';
			              } else {
			                
			                echo 'Tidak Baik'; 
			               }?>",
               labelPosition: 'bottom',
               labelHeightAdjust: -5,
               intervalOuterRadius: 85,
               ticks: [1, 2, 3, 4],
               intervals:[1, 2, 3, 4],
               intervalColors:['#F30C0C', '#F6E416', '#1AED15', '#1497EA']
           }
       }
   });
});
</script>
	
