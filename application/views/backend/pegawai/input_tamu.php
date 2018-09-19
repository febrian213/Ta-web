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
        <p class="browserupgrade">You are using an <strong>ouinputated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    
    <div class="container">
        <nav class="top">
        </nav>
        <div class="content">
              <div class="tamu">
                <h3>Data Tamu</h3>
                <h4>Nama</h4><h4>No KTP</h4>
                <?php foreach($input as $row): ?>
                <form class="home" method="post" action="<?php echo site_url('/backend/pegawai/input/inputTamu/'.$row->no_hp) ?>" enctype="multipart/form-data">
                <div class="dataTamu">
                    <input type="hidden"/>
                    <input type="text" name="nama"/>
                    <input type="text" name="no_ktp"/>
                    <input type="hidden" name="id_pemesan" value="<?= $row->id_pemesan ?>"/>
                    <input class="btn-pemesan" type="submit" value="Input"  />
                </div>
                </form>
                <?php endforeach; ?>
                <div class="msgtrue">
                    <?php echo $this->session->flashdata('msgtrue')?>
                </div>
                <div class="msgfalse">
                    <?php echo $this->session->flashdata('msgfalse');?>
                </div> 
                <h3><a href="<?= base_url('backend/pegawai/home')?>">Selesai</a></h3>
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
