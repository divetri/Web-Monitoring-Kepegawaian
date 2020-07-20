<?php
include 'header.php';
include 'koneksi.php';
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$thn_pangkat=$_POST['thn_pangkat'];
	$golongan=$_POST['golongan'];
	$jabatan=$_POST['jabatan'];
	$temp_lahir=$_POST['temp_lahir'];
	$ttl=$_POST['ttl'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$kebangsaan=$_POST['kebangsaan'];
	$alamat=$_POST['alamat'];
	$rt_rw=$_POST['rt_rw'];
	$desa=$_POST['desa'];
	$camat=$_POST['camat'];
	$kota=$_POST['kota'];
	$pendidikan=$_POST['pendidikan'];
	$atasan=$_POST['atasan'];
	$nip_atasan=$_POST['nip_atasan'];
	$tmt_capeg=$_POST['tmt_capeg'];
	$jenis_peg=$_POST['jenis_peg'];
	$status_peg=$_POST['status_peg'];
	$ppsk=$_POST['ppsk'];
	$gajipokok=$_POST['gajipokok'];
	$penghasilan=$_POST['penghasilan'];
	$jab_struk=$_POST['jab_struk'];
	$tetanggung=$_POST['tetanggung'];
	$sk_akhir=$_POST['sk_akhir'];
	$tgl_sk_akhir=$_POST['tgl_sk_akhir'];
	$masa_gol=$_POST['masa_gol'];
	$masa_sel=$_POST['masa_sel'];
	$kredit=$_POST['kredit'];
	$tmtgaji=$_POST['tmtgaji'];
	

$query=mysqli_query($sambungan, "insert into karyawan values('$nip','$nama','$temp_lahir','$ttl','$agama','$kebangsaan','$alamat','$rt_rw','$desa','$camat','$kota','$jabatan','$golongan','$thn_pangkat','$kredit','$pendidikan','$atasan','$nip_atasan','$tmt_capeg','$jenis_peg','$status_peg','$ppsk','$gajipokok','$penghasilan','$jab_struk','$tetanggung','$sk_akhir','$tgl_sk_akhir','$masa_gol','$masa_sel','$jk','$tmtgaji')");

$pepangkat = date('Y-m-d', strtotime('+4 year', strtotime($thn_pangkat)));
$pegaji = date('Y-m-d',strtotime('+2 year',strtotime($tmtgaji)));
$qpangkat=mysqli_query($sambungan, "insert into pangkat values('$nip','$pepangkat','','','')");
$qgaji=mysqli_query($sambungan, "insert into gaji values('$nip','$pegaji','')");

if($query)
{
	echo" <script> window.alert('Data Berhasil Diinput');
    window.location = 'pegawai.php';
    </script>";
}
else
{
	echo" <script> window.alert('Data Gagal Diinput');
    window.location = 'pegawaibaru.php';
    </script>";
}
?>