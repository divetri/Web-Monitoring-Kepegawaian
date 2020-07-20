<?php
    include"koneksi.php";
    include"tgl_indo.php";
    $nip=$_GET['nip'];
    $query_mysql = mysqli_query($sambungan,"SELECT
        kar.nama,
        kar.temp_lahir,
        kar.tgl_lahir,
        pan.nip_karyawan,
        kar.jabatan,
        kar.pendidikan,
        kar.nip_atasan,
        kar.nama_atasan,
        pan.uskp,
        kar.golongan,
        kar.kredit,
        kar.thn_pangkat,
        pan.usulan_golongan,
        pan.usulan_kredit,
        pan.periode,
        kar.masa_gol
        from pangkat pan
        inner join karyawan kar
        on pan.nip_karyawan=kar.nip where pan.nip_karyawan=$nip")or die(mysql_error()); 
    $d=mysqli_fetch_array($query_mysql);
?>
<html style="margin: 35px">
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
        @page 
                {
                    size: auto;   /* auto is the initial value */
                    margin: 0mm;  /* this affects the margin in the printer settings */
                }
        @media print {
        input.noPrint { display: none; }
        }
        .td1
                {
                  padding-top: 10px;
                }
        hr {
   color: #000000;
background-color: #000000;
height: 2px
}
        </style>
        
        
    </head>
    <body>
        <div>
            <table>
                <tr>
                    <td>
                        <img src="logonew.png" style="width: 70px;">
                    </td>
                    <td style="width: 100%;">
                        <center>
                        <div><b style="font-size: 18pt;">PEMERINTAH KOTA SEMARANG<br>DINAS PERDAGANGAN</b></div>
                        <div style="font-size: 12pt">Jl. Dr. Cipto Nomor 115 Semarang<br>Telp. (024)3547888-3544303, Fax (024)3544303</div></p>
                        </center>
                    </td>
                </tr>
            </table>
            <hr style="margin-top: 0; width: 100%;height: 2px;background-color: black">
        </div>
        <center>
            PETIKAN<br>
            KEPUTUSAN WALIKOTA SEMARANG<br>
            TENTANG<br>
            KENAIKAN PANGKAT PEGAWAI NEGERI SIPIL<br>
            DI LINGKUNGAN PEMERINTAHAN KOTA SEMARANG
        <p>WALIKOTA SEMARANG,</p>
        </center>
        <div>
            <table>
                <tr>
                    <td>Menimbang</td>
                    <td>:</td>
                    <td>dst;</td>
                </tr>
                <tr>
                    <td>Mengingat</td>
                    <td>:</td>
                    <td>dst;</td>
                </tr>
                <tr valign="top">
                    <td class="td1">
                       Memperhatikan
                    </td>
                    <td class="td1">
                        :
                    </td><td class="td1" colspan="2">
                        Persetujuan Teknis Kepala Kantor Regional I BKN Nomor BG-23374000705 tanggal 2 Maret 2015
                    </td> 
                </tr>
                <tr>
                    <td class="td1">
                       
                    </td>
                    <td>
                        
                    </td><td colspan="2">
                        <center>MEMUTUSKAN :</center>
                    </td> 
                </tr>
                <tr valign="top">
                    <td class="td1">Menetapkan</td>
                    <td class="td1">:</td>
                    <td colspan="2" class="td1">KEPUTUSAN WALIKOTA TENTANG KENAIKAN PANGKAT PEGAWAI NEGERI SIPIL DI LINGKUNGAN PEMERINTAH KOTA SEMARANG</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>1. Nama</td>
                    <td>: <?php echo $d[0]?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>2. Tempat/Tanggal Lahir</td>
                    <td>: <?php echo $d[1]; print", "; echo tgl_indo($d[2])?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>3. NIP</td>
                    <td>: <?php echo $d[3]?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>4. Pendidikan</td>
                    <td>: <?php echo $d[5]?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>5. Pangkat lama/golongan ruang/tmt</td>
                    <td>: <?php echo $d[9]?>, <?php echo tgl_indo($d[11])?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>6. Jabatan</td>
                    <td>: <?php echo $d[4]?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>7. Masa Kerja Golongan</td>
                    <td>: <?php echo $d[15]?></td>
                </tr>
                <tr><td></td>
                    <td></td>
                    <td>8. Unit Kerja</td>
                    <td>: DINAS PASAR</td>
                </tr>
                <tr><td></td>
                    <td></td>
                    <td>9. Instansi Induk</td>
                    <td>: PEMERINTAH KOTA SEMARANG</td>
                </tr>
                <tr valign="top"><td></td>
                    <td></td>
                    <td colspan="2" style="text-align: justify;">Terhitung mulai tanggal 01-04-2015 dinaikkan pangkatnya menjadi Pengatur golongan ruang II/c. dengan masa kerja golongan 25 tahun 00 bulan, dan diberikan gaji pokok sebesar Rp.akeh ditambah dengan penghasilan lain berdasarkan ketentuan peraturan perundang-undangan yang berlaku.</td>
                    <td></td>
                </tr>
                <tr valign="top">
                    <td>KEDUA</td>
                    <td>:</td>
                    <td colspan="2" style="text-align: justify;">Apabila dikemudian hari ternyata terdapat kekeliruan dalam Keputusan ini, akan diadakan perbaikan dan penghitungan kembali sebagaimana mestinya.</td>
                </tr>
                <tr valign="top">
                    <td>KETIGA</td>
                    <td>:</td>
                    <td colspan="2" style="text-align: justify;">Petikan Keputusan ini diberikan kepada yang bersangkutan, dan yang berkepentingan untuk dapat diketahui dan dipergunakan sebagaimana mestinya.</td>
                </tr>
            </table>
        </div>
        <p>&nbsp;</p>
      <div style="float: left; width: 50%">
            <center>
                Mengetahui/Mengesahkan :<br>
                Kepala Dinas Perdagangan Kota Semarang
                <br><br><br><br><br><br><br>
                <u>Yellow</u><br>
                Nip.
            </center>
        </div>
        <div style="float: right; width: 50%">
            <center>
                    Semarang, <?php 
                    echo tanggal(date('Y-m-d'));
                    
                    ?><br>       
                Pegawai Yang Bersangkutan
                <br><br><br><br><br><br><br>
                <u>Black</u><br>
                Nip.
            </center>
        </div>
        <script>
            window.print();
        </script>

        
    </body>
</html>
