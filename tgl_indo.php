<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 	if(($tanggal=='0000-00-00')||($tanggal=='')){
 		return " ";
 	}
 	else{
 			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
 	}
}
function tanggal($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
 	if(($tanggal=='0000-00-00')||($tanggal=='')){
 		return " ";
 	}
 	else{
 			return '______' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
 	}
}