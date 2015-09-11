<div class="menu"><!-- menu -->
<nav>
	<ul>
		<li>
			<a style="border-left: 2px solid rgb(255, 255, 255);"<?php echo ($page == 'site') ? "class='active'" : ""; ?>
			href="<?=base_url() ?>site">SELAYANG PANDANG</a>
			<ul>
				<li><?php echo anchor('visi', 'VISI');?></li>
				<li><?php echo anchor('misi', 'MISI');?></li>
				<li><?php echo anchor('tugas', 'TUGAS & FUNGSI');?></li>
				
			</ul>
		</li>
		<li>
			<a style="width:190px"<?php echo ($page == 'renstra') ? "class='active'" : ""; ?>
			href="<?=base_url() ?>renstra">RENSTRA & RENJA</a>
		</li>
		<li>
			<a style="width:123px"<?php echo ($page == 'kebijakan') ? "class='active'" : ""; ?>
			href="<?=base_url() ?>kebijakan">KEBIJAKAN</a>
		</li>
		<li>
			<a style="width:120px"<?php echo ($page == 'gallery') ? "class='active'" : ""; ?>
			href="<?=base_url() ?>gallery">GALLERY</a>
		</li>
		<li>
			<a <?php echo ($page == 'kegiatan') ? "class='active'" : ""; ?>
			href="<?=base_url() ?>kegiatan">KEGIATAN</a>
		</li>
		<li>
			<a style="width:198px"<?php echo ($page == 'kepuasan') ? "class='active'" : ""; ?>
			href="">INDEX KEPUASAN</a>
			<ul>
				<li><?php echo anchor('kepuasan/jalan', 'JALAN RAYA');?></li>
				<li><?php echo anchor('kepuasan/pju', 'PJU');?></li>
				<li><?php echo anchor('kepuasan/drainase', 'DRAINASE');?></li>
				<li><?php echo anchor('kepuasan/sungai', 'SUNGAI');?></li>
			</ul>
		</li>
		
		
	</ul>
</nav>
</div>