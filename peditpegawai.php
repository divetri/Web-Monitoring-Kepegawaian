<?php
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
	$masa_gol=$_POST['masa_gol'];
	$masa_sel=$_POST['masa_sel'];
	$kredit=$_POST['kredit'];
	$tgl_sk_akhir=$_POST['tgl_sk_akhir'];
	$tmtgaji=$_POST['tmtgaji'];

$query=mysqli_query($sambungan, "update karyawan set nama='$nama', temp_lahir='$temp_lahir', tgl_lahir='$ttl', agama='$agama', kebangsaan='$kebangsaan', alamat='$alamat', rt_rw='$rt_rw', desa='$desa', camat='$camat', kota='$kota', jabatan='$jabatan', golongan='$golongan', thn_pangkat='$thn_pangkat', kredit='$kredit', pendidikan='$pendidikan', nama_atasan='$atasan', nip_atasan='$nip_atasan',  tmt_capeg='$tmt_capeg', jenis_peg='$jenis_peg', status_peg='$status_peg', ppsk='$ppsk', gajipokok='$gajipokok', penghasilan='$penghasilan', jab_struk='$jab_struk', tetanggung='$tetanggung', sk_akhir='$sk_akhir', tgl_sk_akhir='$tgl_sk_akhir', masa_gol='$masa_gol', masa_sel='$masa_sel', jk='$jk', tmtgaji='$tmtgaji' where nip='$nip'");
$pepangkat = date('Y-m-d', strtotime('+4 year', strtotime($thn_pangkat)));
$pegaji = date('Y-m-d',strtotime('+2 year',strtotime($thn_pangkat)));
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
    window.location = 'editpegawai.php?nip=$nip';
    </script>";
}
?>