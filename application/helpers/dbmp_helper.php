<?php 

function format_tanggal($tgl){
	$tgl = date('j F Y H:i', strtotime($tgl));
	return $tgl;
}

function format_hari($tgl){
	$tgl = date('N Y-m-j', strtotime($tgl));
	return $tgl;
}

function hari($var = '')
{
$hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');

$pecah = explode(" ", $var);
$pecah2 = explode("-", $pecah[0]);

$pecah3 = explode(":", $pecah[1]);
return $hari[$pecah[0] - 1];
}

function tanggal($var = '')
{
$tgl = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

$pecah = explode(" ", $var);
$pecah2 = explode("-", $pecah[0]);

$pecah3 = explode(":", $pecah[1]);
return $pecah2[2]." ".$tgl[$pecah2[1]-1]." ".$pecah2[0]." | ".$pecah3[0].":".$pecah2[1];
}


function hello(){
	echo "hello world";
}