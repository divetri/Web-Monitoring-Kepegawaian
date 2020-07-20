<html style="margin: 35px">
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
        @media print {
        input.noPrint { display: none; }
        }
        @page 
                {
                    size: auto;   /* auto is the initial value */
                    margin: 0mm;  /* this affects the margin in the printer settings */
                }
        .td1
                {
                  padding-top: 10px;
                }
        .td2    {
                width: 100px;
                white-space: nowrap;
        }
        hr {
   color: #000000;
background-color: #000000;
height: 2px
}
        </style>
        
        
    </head>
    <body style="font-size: 12">
        DATA KELUARGA YANG MENJADI TANGGUNGAN PEGAWAI<br>
        A. KAWIN SAH DENGAN ISTRI / SUAMI
        <div style="margin-top: 10px;margin-bottom: 10px; font-size: 12;">
            <center>
                <table cellspacing="0" border="1" style="width: 100%">
                <thead>
                    <center>
                    <th>NO</th>
                    <th>NAMA ISTRI / SUAMI</th>
                    <th>TEMPAT TANGGAL<br>LAHIR</th>
                    <th>PEKERJAAN</th>
                    <th>TANGGAL<br>PERKAWINAN</th>
                    <th>ISTRI<br>SUAMI KE</th>
                    <th>CERAI/PUTUSAN<br>PENGADILAN TGL</th>
                    <th>KETERANGAN</th>
                    </center>
                </thead>
                <?php 
                $no=1;
                $totalsks=0;
                $totalnilai=0;
                $koneksi=mysqli_connect("localhost", "root","" , "monitoring4");
                $sql= mysqli_query($koneksi,"select b.kode_mk, b.sks, b.nama, a.mahasiswa_nilai  from  data_mk b inner join  data_nilai a on a.mk_id=b.id where mahasiswa_id=1");            
                while ($data= mysqli_fetch_array($sql)){
                ?>
                <center><tbody>
                    <tr>
                        <td>
                <center><?php echo ("$no") ;?></center>
                        </td>
                        <td>
                            <?php echo ("$data[kode_mk]") ;?>
                        </td>
                        <td>
                            <?php echo ("$data[nama]") ;?>
                        </td>
                        <td> <center>
                            <?php echo ("$data[sks]") ;?></center>
                        </td>
                        <td> <center>
                            <?php 
                            $mhs_nilai=$data['mahasiswa_nilai'];
                            if($mhs_nilai=='A'){
                                $nilai="A";
                                $skor=4;
                                }
                            else if($mhs_nilai=='B'){
                                $nilai="B";
                                $skor=3;
                                }
                            else if($mhs_nilai=='C'){
                                $nilai="C";
                                $skor=2;
                                }
                            else if($mhs_nilai=='D'){
                                $nilai="D";
                                $skor=1;
                                }
                            else if($mhs_nilai=='E'){
                                $nilai="E";
                                $skor=0;
                                }
                            else
                            {
                                if( $mhs_nilai>80 and  $mhs_nilai<=100){
                                $nilai="A";
                                $skor=4;
                                }
                                elseif ( $mhs_nilai<=80 and  $mhs_nilai>60) {
                                      $nilai="B";
                                      $skor=3;
                                }
                                 elseif ( $mhs_nilai<=60 and  $mhs_nilai>40) {
                                      $nilai="C";
                                      $skor=2;
                                }
                                 elseif ( $mhs_nilai<=40 and  $mhs_nilai>20) {
                                      $nilai="D";
                                      $skor=1;
                                }
                                 elseif ( $mhs_nilai<=20 and  $mhs_nilai>0) {
                                      $nilai="E";
                                      $skor=0;
                                };

                            }
                            echo ("$nilai") ;?></center>
                        </td>
                        <td> <center>
                            <?php
                           
                            $sks=$data['sks'];
                            $total= $skor*$sks ;
                            echo ("$total") ;?></center>
                        </td>
                    </tr><?php $no++; 
                            $totalsks=$totalsks+$sks;
                            $totalnilai=$totalnilai+$total;
                            }; ?>
                    <tr>
                        <td colspan="3"> <center>
                        Jumlah</center>
                        </td>
                        <td> <center><?php echo("$totalsks")?></center></td>
                        <td> </td>
                        <td> <center><?php echo("$totalnilai")?></center></td>
                    </tr>
                </tbody>
                            
            </table></center>
            Total IP adalah <?php $ip=$totalnilai/$totalsks;
            echo("$ip");?>
        </div>
        B. ANAK-ANAK YANG MENDAPAT TUNJANGAN
        Mempunyai anak-anak seperti daftar dibawah ini, yaitu
        Anaka Kandung(ak)Anak Tiri(at)Anak Angkat(aa) yang masih menjadi tanggungan belum mempunyai pekerjaan sendiri dan masuk dalam Daftar Gaji<br>
        Anaka Kandung(ak)Anak Tiri(at)Anak Angkat(aa) yang masih menjadi tanggungan tetapi tidak masuk dalam Daftar Gaji
         <div style="margin-top: 10px;margin-bottom: 10px; font-size: 12;">
            <center>
                <table cellspacing="0" border="1" style="width: 100%">
                <tr>
                    <center>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">ANAK-ANAK</th>
                    <th rowspan="2">TEMPAT TANGGAL<br>LAHIR</th>
                    <th rowspan="2">LP</th>
                    <th rowspan="2">STS</th>
                    <th rowspan="2">DARI<br>ISTRI<br>KE</th>
                    <th colspan="2">SUDAH/BELUM</th>
                    <th rowspan="2">MASIH SEKOLAH<br>TIDAK SEKOLAH<br>SD/SMP/SMU</th>
                    <th rowspan="2">TANGGAL<br>KELULUSAN<br>STUDI</th>
                    <th rowspan="2">PUTUSAN<br>PENGADILAN</th>
                    </center>
                </tr>
                <tr>
                    <th>KAWIN TGL</th>
                    <th>BEKERJA TGL</th>
                </tr>
                <?php 
                $no=1;
                $totalsks=0;
                $totalnilai=0;
                $koneksi=mysqli_connect("localhost", "root","" , "monitoring4");
                $sql= mysqli_query($koneksi,"select b.kode_mk, b.sks, b.nama, a.mahasiswa_nilai  from  data_mk b inner join  data_nilai a on a.mk_id=b.id where mahasiswa_id=1");            
                while ($data= mysqli_fetch_array($sql)){
                ?>
                <center><tbody>
                    <tr>
                        <td>
                <center><?php echo ("$no") ;?></center>
                        </td>
                        <td>
                            <?php echo ("$data[kode_mk]") ;?>
                        </td>
                        <td>
                            <?php echo ("$data[nama]") ;?>
                        </td>
                        <td> <center>
                            <?php echo ("$data[sks]") ;?></center>
                        </td>
                        <td> <center>
                            <?php 
                            $mhs_nilai=$data['mahasiswa_nilai'];
                            if($mhs_nilai=='A'){
                                $nilai="A";
                                $skor=4;
                                }
                            else if($mhs_nilai=='B'){
                                $nilai="B";
                                $skor=3;
                                }
                            else if($mhs_nilai=='C'){
                                $nilai="C";
                                $skor=2;
                                }
                            else if($mhs_nilai=='D'){
                                $nilai="D";
                                $skor=1;
                                }
                            else if($mhs_nilai=='E'){
                                $nilai="E";
                                $skor=0;
                                }
                            else
                            {
                                if( $mhs_nilai>80 and  $mhs_nilai<=100){
                                $nilai="A";
                                $skor=4;
                                }
                                elseif ( $mhs_nilai<=80 and  $mhs_nilai>60) {
                                      $nilai="B";
                                      $skor=3;
                                }
                                 elseif ( $mhs_nilai<=60 and  $mhs_nilai>40) {
                                      $nilai="C";
                                      $skor=2;
                                }
                                 elseif ( $mhs_nilai<=40 and  $mhs_nilai>20) {
                                      $nilai="D";
                                      $skor=1;
                                }
                                 elseif ( $mhs_nilai<=20 and  $mhs_nilai>0) {
                                      $nilai="E";
                                      $skor=0;
                                };

                            }
                            echo ("$nilai") ;?></center>
                        </td>
                        <td> <center>
                            <?php
                           
                            $sks=$data['sks'];
                            $total= $skor*$sks ;
                            echo ("$total") ;?></center>
                        </td>
                    </tr><?php $no++; 
                            $totalsks=$totalsks+$sks;
                            $totalnilai=$totalnilai+$total;
                            }; ?>
                    <tr>
                        <td colspan="3"> <center>
                        Jumlah</center>
                        </td>
                        <td> <center><?php echo("$totalsks")?></center></td>
                        <td> </td>
                        <td> <center><?php echo("$totalnilai")?></center></td>
                    </tr>
                </tbody>
                            
            </table></center>
            Total IP adalah <?php $ip=$totalnilai/$totalsks;
            echo("$ip");?>
        </div>
        B. ANAK-ANAK YANG TIDAK MENDAPAT TUNJANGAN
        <div style="margin-top: 10px;margin-bottom: 10px; font-size: 12;">
            <center>
                <table cellspacing="0" border="1" style="width: 100%">
                <tr>
                    <center>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">ANAK-ANAK</th>
                    <th rowspan="2">TEMPAT TANGGAL<br>LAHIR</th>
                    <th rowspan="2">LP</th>
                    <th rowspan="2">STS</th>
                    <th rowspan="2">DARI<br>ISTRI<br>KE</th>
                    <th colspan="2">SUDAH/BELUM</th>
                    <th rowspan="2">MASIH SEKOLAH<br>TIDAK SEKOLAH<br>SD/SMP/SMU</th>
                    <th rowspan="2">TANGGAL<br>KELULUSAN<br>STUDI</th>
                    <th rowspan="2">PUTUSAN<br>PENGADILAN</th>
                    </center>
                </tr>
                <tr>
                    <th>KAWIN TGL</th>
                    <th>BEKERJA TGL</th>
                </tr>
                <?php 
                $no=1;
                $totalsks=0;
                $totalnilai=0;
                $koneksi=mysqli_connect("localhost", "root","" , "monitoring4");
                $sql= mysqli_query($koneksi,"select b.kode_mk, b.sks, b.nama, a.mahasiswa_nilai  from  data_mk b inner join  data_nilai a on a.mk_id=b.id where mahasiswa_id=1");            
                while ($data= mysqli_fetch_array($sql)){
                ?>
                <center><tbody>
                    <tr>
                        <td>
                <center><?php echo ("$no") ;?></center>
                        </td>
                        <td>
                            <?php echo ("$data[kode_mk]") ;?>
                        </td>
                        <td>
                            <?php echo ("$data[nama]") ;?>
                        </td>
                        <td> <center>
                            <?php echo ("$data[sks]") ;?></center>
                        </td>
                        <td> <center>
                            <?php 
                            $mhs_nilai=$data['mahasiswa_nilai'];
                            if($mhs_nilai=='A'){
                                $nilai="A";
                                $skor=4;
                                }
                            else if($mhs_nilai=='B'){
                                $nilai="B";
                                $skor=3;
                                }
                            else if($mhs_nilai=='C'){
                                $nilai="C";
                                $skor=2;
                                }
                            else if($mhs_nilai=='D'){
                                $nilai="D";
                                $skor=1;
                                }
                            else if($mhs_nilai=='E'){
                                $nilai="E";
                                $skor=0;
                                }
                            else
                            {
                                if( $mhs_nilai>80 and  $mhs_nilai<=100){
                                $nilai="A";
                                $skor=4;
                                }
                                elseif ( $mhs_nilai<=80 and  $mhs_nilai>60) {
                                      $nilai="B";
                                      $skor=3;
                                }
                                 elseif ( $mhs_nilai<=60 and  $mhs_nilai>40) {
                                      $nilai="C";
                                      $skor=2;
                                }
                                 elseif ( $mhs_nilai<=40 and  $mhs_nilai>20) {
                                      $nilai="D";
                                      $skor=1;
                                }
                                 elseif ( $mhs_nilai<=20 and  $mhs_nilai>0) {
                                      $nilai="E";
                                      $skor=0;
                                };

                            }
                            echo ("$nilai") ;?></center>
                        </td>
                        <td> <center>
                            <?php
                           
                            $sks=$data['sks'];
                            $total= $skor*$sks ;
                            echo ("$total") ;?></center>
                        </td>
                    </tr><?php $no++; 
                            $totalsks=$totalsks+$sks;
                            $totalnilai=$totalnilai+$total;
                            }; ?>
                    <tr>
                        <td colspan="3"> <center>
                        Jumlah</center>
                        </td>
                        <td> <center><?php echo("$totalsks")?></center></td>
                        <td> </td>
                        <td> <center><?php echo("$totalnilai")?></center></td>
                    </tr>
                </tbody>
                            
            </table></center>
            Total IP adalah <?php $ip=$totalnilai/$totalsks;
            echo("$ip");?>
        </div>
        1. lmaolmaolmaolmaolmaolmao<br>
        2. xdxdxdxdxdxdxdxdxdxdxdxd<br>
        3. omegalulomgealulomegalul<br>
        <script>
            window.print();
        </script>

        
    </body>
</html>
