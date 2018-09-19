<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DX Hotel Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">
     <link rel="stylesheet" href="<?php echo base_url('css/office/main.css') ?>">
     <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    
    <div class="container">
        <nav class="top">
            <span class="left">
                <ul class="menu">
                    <li><a href="<?php echo base_url('backend/manager/')?>">Data Pemesan</a></li>
                    <li><a href="<?php echo base_url('backend/manager/data_tamu')?>">Data Tamu</a></li>
                    <li><a href="<?php echo base_url('backend/manager/data_akun_pegawai') ?>">Data Akun Pegawai</a></li>
                </ul>
            </span>
            <span class="right">
                <form method="post" action="<?php print site_url();?>/backend/manager/home/search_tamu " enctype="multipart/form-data">
                    <a href="<?php echo site_url('backend/login/quit') ?>">logout</a>
                </form>
            </span>
        </nav>
        <div class="content">
            <div class="pemesan">
                <form class="home" method="post" action="<?php echo site_url('backend/manager/data_akun_pegawai/insert') ?>" enctype="multipart/form-data">
                    <div class="data">
                        <h3>Data Akun Pegawai</h3>
                    </div>
                    <div class="data">
                        <input class="dataInput" type="hidden" name="id" />
                    </div>
                    <div class="data">
                        <h4>Username</h4>
                        <input class="dataInput" type="text" name="username" />
                    </div>
                    <div class="data">
                        <h4>Nama</h4>
                        <input class="dataInput" type="text" name="nama" />
                    </div>
                    <div class="data">
                        <h4>Password</h4>
                        <input class="dataInput" type="text" name="password" />
                    </div>
                    <div class="action tambah-akun">
                        <input type="submit" value="Tambah Akun">
                        <a href="<?php echo site_url('backend/manager/data_akun_pegawai') ?>"><input type="button" value="Kembali"></a>
                    </div>
                </form>
            </div>
        </div>
        <footer><span>copyright&copy; 2015 DX Hotel Indonesia</span></footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="<?php echo base_url('js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('js/main.js') ?>"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
