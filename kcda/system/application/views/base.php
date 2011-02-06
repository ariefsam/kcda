<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <base href="<?php echo base_url()?>" />
        <link type="text/css" href="style.css" rel="stylesheet" />
        <link rel="icon" href="images/icon.png" />
        <script type="text/javascript" src="jquery.js"></script>
        <title>Sistem Pendataan Desa Lingkar Kampus IPB</title>
    </head>
    <body>
    <div id="container">
        <div id="header">
            <div id="logo">
                <img src="images/logo_ipb.png" />
            </div>
            <div id="judul">
                Sistem Pendataan Desa Lingkar Kampus IPB
            </div>
            <div id="head1">
                <img src="images/logo_gsb.png" />
                <img src="images/logo_lppm.png" />
            </div>
        </div>
        <div id="navbar">
            <div id="nav">
                <a href="#">Halaman Depan</a>
                <a href="#" class="active">Data</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Bantuan</a>
            </div>
            <div id="submenu">
                <a href="#">Lihat Data</a>
                <a href="#" class="active">Deskriptif</a>
                <a href="#">Analisis</a>
                <a href="#">Perbarui</a>
            </div>
        </div>
        <div id="breadcrumb">
            <div id="isi">
                Home
            </div>
        </div>
        <div id="content">
            <div id="right">
                <div class="top">
                    <div class="top1">
                        <img alt="" src="images/information.png" /> &nbsp;
                        Informasi
                    </div>
                </div>
                <div class="mid">
                    <table class="variabel">
                        <tr>
                            <td>Variabel</td>
                            <td>
                                <select name="variabel" id="variabel" onchange="load_lihat(this.value)">
                                    <option selected>--Pilih--</option>
                                    <option value="jumlah_penduduk">Jumlah Penduduk</option>
                                    <option value="mortalitas">Mortalitas</option>
                                    <option value="natalitas">Natalitas</option>
                                    <option value="migrasi">Migrasi</option>
                                    <option value="pendidikan">Pendidikan</option>
                                    <option value="kesehatan">Kesehatan</option>
                                    <option value="keagamaan">Keagamaan</option>
                                    <option value="keamanan">Keamanan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Desa</td>
                            <td>
                                <select name="desa" id="desa">
                                    <?php
                                    foreach($daftar_desa as $desa)
                                    {?>
                                    <option value="<?php echo $desa['id']?>"><?php echo $desa['nama']?></option>
                                    <?php

                                    }?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Lihat</td>
                            <td>
                                <select name="lihat" id="lihat">
                                    <option>--Pilih--</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <script type="text/javascript">
                    function load_lihat(jenis)
                    {
                        $('#lihat').load('index.php/deskriptif/load_lihat/' + jenis);
                    }
                </script>
                <div class="bottom">

                </div><br />
            </div>
            
            <div id="middle">
                
                    <?php $this->load->view($view_content)?>
                <div class="bottom">

                </div>
            </div>

        </div>
        <div id="footer">
            Copyright &copy; 2011 Gamma Sigma Beta<br />Powered by <a href="http://kompugel.com">Kompugel</a>
        </div>

    </div>
    </body>
</html>
