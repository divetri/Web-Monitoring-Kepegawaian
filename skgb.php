<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        body  {
            font-family: arial;
            font-size: 12pt;
        }
        .td1
                {
                  padding-top: 10px;
                }
        .td2    {
                width: 100px;
                white-space: nowrap;
        }
        hr  {
                   color: #000000;
                background-color: #000000;
                height: 2px
                }
        .gray {
                position: absolute;
                left: 250px;
                top: 380px;
                opacity: 0.5;
                z-index: -1; 
                filter: grayscale(100%); /* Current draft standard */
                -webkit-filter: grayscale(100%); /* New WebKit */
                -moz-filter: grayscale(100%);
                -ms-filter: grayscale(100%); 
                -o-filter: grayscale(100%); /* Not yet supported in Gecko, Opera or IE */ 
                filter: url(resources.svg#desaturate); /* Gecko */
                filter: gray; /* IE */
                -webkit-filter: grayscale(1); /* Old WebKit */

            }

        </style>
        
        
    </head>
    <body>
        <div>
            <table style="">
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
        <div style="width: 50%;float: left;font-size: 12"><br>
            <table>
                <tr>
                    <td>
                        Nomor
                    </td>
                    <td>
                        :
                    </td><td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Lampiran
                    </td>
                    <td>
                        :
                    </td><td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                       Perihal
                    </td>
                    <td>
                        :
                    </td><td>
                        <u><b>Kenaikan Gaji Berkala</b></u>
                    </td> 
                </tr>                
            </table>
        </div>
        <div style="width: 50%; float: right; font-size: 12pt">
                <div style="text-align: left;">
                    Semarang, <?php 
                    include "tgl_indo.php";
                    ?></div>
                <div style="font-size: 12pt">Yth. <b>KEPALA BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH KOTA SEMARANG<br></b></div>
                di.<br>
                <div style="text-align: center;"><b><U>S E M A R A N G</U></b></div>
        </div>
        <p>&nbsp;</p><br>
        <p align="justify">Dengan ini diberitahukan bahwa berhubung dengan telah dipenuhinya masa kerja dan syarat-syarat lainnya kepada</p>
        <img class="gray" src="logonew.png">
        <table>
            <tr>
                <td>1. Nama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>2. NIP</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>3. Tanggal Lahir</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>4. Pangkat</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>5. Jabatan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td style="padding-top: 1em;">6. Instansi</td>
                <td style="padding-top: 1em;">:</td>
                <td style="padding-top: 1em;"></td>
            </tr>
             <tr>
                <td style="padding-top: 1em;">7. Gaji Pokok</td>
                <td style="padding-top: 1em;">:</td>
                <td style="padding-top: 1em;"></td>
            </tr>
            </table>
            <p>Atas dasar Surat Keputusan terakhir tentang gaji/pangkat yang ditetapkan</p>
            <table>
            <tr>
                <td>a. Oleh Pejabat</td>
                <td>:</td>
                <td>WALIKOTA SEMARANG</td>
            </tr>
            <tr>
                <td>b. Tanggal</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>c. Nomor</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>d. Gaji Pokok Lama</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>e. Tgl Mulai Berlakunya gaji tsb</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>f. Massa kerja golongan pada tgl tsb</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p>Diberikan <b><u>Kenaikan Gaji Berkala</u></b> hingga memperoleh</p>
        <table>
            <tr>
                <td>8. Gaji Pokok Baru</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>9. Berdasarkan masa kerja</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>10. Dalam golongan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>11. Mulai tanggal</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>
        <p>Berdasarkan Peraturan Pemerintah Nomor 30 Tahun 2015 kepada pegawai tersebut dapat dibayarkan penghasilannya berdasarkan gaji pokok yang baru</p>
        <div style="float: right; width: 50%">
            <center>
                       
                Pegawai Yang Bersangkutan
                <br><br><br><br><br>
                <u>Black</u><br>
                Nip.
            </center>
        </div>
      
        <script>
            window.print();
        </script>

        
    </body>
</html>
