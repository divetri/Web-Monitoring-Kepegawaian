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
    <body>
        <div>
             <center><br>
                <b>SURAT KETERANGAN</b><br> 
                <b>UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA</b><br>
            </center>
        </div>
        <hr>
        <div style="width: 100%;float: left;font-size: 12"><br>
        <?php 
            include "koneksi.php";
            include "tgl_indo.php";
            $nip=$_GET['nip'];
            $query=mysqli_query($sambungan, "SELECT * from karyawan where nip='$nip'");
            $data=mysqli_fetch_array($query);
        ?>
            <table>
                <tr>
                    <td colspan="2">
                        NAMA INSTANSI
                    </td>
                    <td>
                        :
                    </td><td nowrap="" colspan="3">
                        DINAS PERDAGANGAN KOTA SEMARANG
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        ALAMAT LENGKAP INSTANSI
                    </td>
                    <td>
                        :
                    </td><td colspan="3">
                        JL. Dr. Cipto No. 115 Semarang
                    </td>
                </tr>
                <tr>
                    <td class="td1" colspan="2">
                       INSTANSI INDUK
                    </td>
                    <td class="td1">
                        :
                    </td><td class="td1" colspan="3">
                        PEMERINTAH KOTA SEMARANG
                    </td> 
                </tr>
                <tr>
                    <td nowrap="" colspan="2">
                       BENDAHARA PEMBUAT D. GAJI
                    </td>
                    <td>
                        :
                    </td><td colspan="3">
                        MUSAFAK
                    </td> 
                </tr>
                <tr>
                    <td class="td1">I.</td>
                    <td class="td1"> DATA PEGAWAI</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1. Nama Lengkap</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[1];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>2. NIP</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[0];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Pangkat Golongan(ruang)</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[12];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>4. T.m.t./Golongan(ruang)</td>
                    <td>:</td>
                    <td colspan="3"><?php echo tgl_indo($data[13]);?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>5. Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[2]; print", "; echo tgl_indo($data[3]);?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>6. Jenis Kelamin</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[30];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>7. Agama/Kebangsaan</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[4]; print " / "; echo $data[5];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>8. Alamat Lengkap</td>
                    <td>:</td>
                    <td colspan="3"><?php echo $data[6];?></td>
                </tr>
                <tr><td></td>
                    <td></td>
                    <td></td>
                    <td>RT./RW</td>
                    <td class="td2">: <?php echo $data[7];?></td>
                </tr>
                <tr><td></td>
                    <td></td>
                    <td></td>
                    <td>Desa/Kelurahan</td>
                    <td>: <?php echo $data[8];?></td>
                </tr>
                <tr><td></td>
                    <td></td><td></td>
                    <td>Kecamatan</td>
                    <td>: <?php echo $data[9];?></td>
                </tr>
                <tr><td></td>
                    <td></td><td></td>
                    <td>Kota</td>
                    <td>: <?php echo $data[10];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>9. T.m.t. Capeg</td>
                    <td>:</td>
                    <td><?php echo tgl_indo($data[18]);?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>10. Jenis Kepegawaian</td>
                    <td>:</td>
                    <td><?php echo $data[19];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>11. Status Kepegawaian</td>
                    <td>:</td>
                    <td><?php echo $data[20];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>12. Digaji menurut(PP/SK)</td>
                    <td>:</td>
                    <td><?php echo $data[21];?></td>
                    <td>G. Pokok <?php echo $data[22];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>13. Besarnya Penghasilan</td>
                    <td>:</td>
                    <td>Rp. <?php echo $data[22];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>14. Jabatan Struktural/fungsional</td>
                    <td>:</td>
                    <td><?php echo $data[24];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>15. Jumlah keluarga tertanggung</td>
                    <td>:</td>
                    <td><?php echo $data[25];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>16. SK terakhir yang dimiliki</td>
                    <td>:</td>
                    <td><?php echo $data[26];?></td>
                    <td>Tgl. <?php echo tgl_indo($data[27]);?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>17. Masa kerja Golongan</td>
                    <td>:</td>
                    <td><?php echo $data[28];?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>18. Masa kerja keseluruhan</td>
                    <td>:</td>
                    <td><?php echo $data[29];?></td>
                </tr>
            </table>
        </div>
        <p>&nbsp;</p>   
        <p align="justify">Keterangan ini saya buat dengan sesungguhnya dan apabila keterangan ini tidak benar (palsu), saya bersedia dituntut dimuka Pengadilan berdasarkan Undang-undang yang berlaku, dan bersedia mengembalikan semua uang tunjangan yang telah saya terima yang seharusnya bukan menjadi hak saya.</p>
        <p>&nbsp;</p>
        <div style="float: left; width: 50%">
            <center>
                Mengetahui/Mengesahkan :<br>
                Kepala Dinas Perdagangan Kota Semarang
                <br><br><br><br><br><br><br>
                <u><?php echo $data[16];?></u><br>
                NIP. <?php echo $data[17];?>
            </center>
        </div>
        <div style="float: right; width: 50%">
            <center>
                    Semarang, <?php 
                    echo tanggal(date('Y-m-d'));//current date time
                    ?><br>       
                Pegawai Yang Bersangkutan
                <br><br><br><br><br><br><br>
                <u><?php echo $data[1];?></u><br>
                NIP. <?php echo $data[0];?>
            </center>
      
        <script>
            window.print();
        </script>

        
    </body>
</html>
