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
             <div class="pemesan">
                <form class="home" method="post" action="<?php echo site_url('/backend/pegawai/input/inputPemesan/') ?>" enctype="multipart/form-data">
                    <div class="data">
                    <h3>Data Pemesan</h3>
                    </div>
                    <div class="data">
                        <input class="dataInput" type="hidden" name="id_pemesan" />
                    </div>
                    <div class="data">
                        <h4>Nama Pemesan</h4>
                        <input class="dataInput" type="text" name="nama_pemesan" />
                    </div>
                    <div class="data">
                        <h4>Alamat Email</h4>
                        <input class="dataInput" type="text" name="alamat_email" />
                    </div>
                    <div class="data">
                        <h4>No Handphone</h4>
                        <input class="dataInput" type="text" name="no_hp" />
                    </div>
                    <div class="data">
                        <h4>Jenis Kamar</h4>
                        <select class="dataInput" name="jns_kamar">
                            <option name="jns_kamar" value="family">Family</option>
                            <option name="jns_kamar" value="superior">Superior</option>
                            <option name="jns_kamar" value="suite">Suite</option>
                        </select>
                    </div class="data">
                    <div class="data">
                        <h4>Jumlah Tamu Dewasa</h4>
                        <input class="dataInput" type="text" name="jml_tamu_dewasa" />
                    </div>
                    <div class="data">
                        <h4>Jumlah Tamu Anak</h4>
                        <input class="dataInput" type="text" name="jml_tamu_anak" />
                    </div>
                    <div class="data">
                        <h4>Jumlah Kamar</h4>
                        <input class="dataInput" type="text" name="jml_kamar" />
                    </div>
                    <div class="data">
                        <h4>Tanggal Cekin</h4>
                        <input class="dataInput" type="text" name="tgl_cekin" placeholder="yyyy-mm-dd"/> 
                    </div>
                    <div class="data">
                        <h4>Tanggal Cekout</h4>
                        <input class="dataInput" type="text" name="tgl_cekout" placeholder="yyyy-mm-dd"/>
                    </div>
                    <div class="msgtrue">
                        <?php echo $this->session->flashdata('msgtrue');?>
                    </div>
                    <div class="msgfalse">
                        <?php echo $this->session->flashdata('msgfalse');?>
                    </div>
                    <div class="data"> 
                        <input class="btn-input" type="submit" value="Pesan"  />
                        <button class="btn-cancel"/><a href="<?php echo base_url('backend/pegawai/home'); ?>">Batal</a></button>
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
