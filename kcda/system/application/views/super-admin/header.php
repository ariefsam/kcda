<!DOCTYPE html>
<html>
    <head>
        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1;charset=windows-1252" />
        <!-- End of Meta -->

        <base href="<?php echo base_url()?>super-admin/" />

        <!-- Page title -->
        <title><?php if(isset($title)) echo $title?> :: Sistem Pendataan Desa Lingkar Kampus IPB</title>
        <!-- End of Page title -->

        <!-- Libraries -->
        <link type="text/css" href="index_files/layout00.css" rel="stylesheet" />

        <script type="text/javascript" src="index_files/jquery-1.js"></script>
        <script type="text/javascript" src="index_files/easyTool.js"></script>
        <script type="text/javascript" src="index_files/jquery-u.js"></script>
        <script type="text/javascript" src="index_files/jquery00.js"></script>
        <script type="text/javascript" src="index_files/hoverInt.js"></script>
        <script type="text/javascript" src="index_files/superfis.js"></script>
        <script type="text/javascript" src="index_files/custom00.js"></script>
        <!-- End of Libraries -->
    </head>
    <body>
        <!-- Container -->
        <div name="top" id="container">

            <!-- Header -->
            <div id="header">

                <!-- Top -->
                <div id="top">
                    <!-- Logo -->
                    <div class="logo">
                        <?php /* <a href="home.akr" title="Administration Home" class="tooltip"><img src="../images/logo_akar.png" height="80px" alt="Logo Akars" /></a>*/?>
                    </div>
                    <!-- End of Logo -->

                    <!-- Meta information -->
                    <div class="meta">
                        <p>Selamat Datang Admin!</p>
                        <ul>
                            <li><a href="login/logout" title="Log keluar session Administrator" class="tooltip"><span class="ui-icon ui-icon-power"></span>Logout</a></li>
                            
                        </ul>
                    </div>
                    <!-- End of Meta information -->
                </div>
                <!-- End of Top-->

                <!-- The navigation bar -->
                <div id="navbar">
                    <ul class="nav">
                        <li><a href="home">Home</a>
                        <ul>
                            <li><a href="home/kecamatan">Kecamatan</a></li>
                            <li><a href="home/desa">Desa</a></li>
                        </ul>
                        </li>
                        <li><a href="data">Data</a></li>
                    </ul>
                </div>
                <!-- End of navigation bar" -->



            </div>
            <!-- End of Header -->

            <!-- Background wrapper -->
            <div id="bgwrap">

                <!-- Main Content -->
                <div id="content">
                    <div id="main">
