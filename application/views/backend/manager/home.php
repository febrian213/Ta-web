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
                <form method="post" action="<?php print site_url();?>/backend/manager/home/search" enctype="multipart/form-data">
                    <input type="text" name="search" placeholder="Masukan Kode Pemesan"/>
                    <input class="search" type="submit" value="Cari" />
                    <a href="<?php echo site_url('backend/login/quit') ?>">logout</a>
                </form>
            </span>
        </nav>
        <div class="content">
            <form class="data" method="post" action="<?= site_url('backend/manager/home/delete') ?>">
                <table>
                    <tr>
                        <td></td>
                        <td>Kode Pemesan</td>
                        <td>Nama Pemesan</td>
                        <td>Alamat Email</td>
                        <td>Nomer Handpohone</td>
                        <td>Jenis Kamar</td>
                        <td>Jumlah Tamu Dewasa</td>
                        <td>Jumlah Tamu Anak</td>
                        <td>Jumlah Kamar</td>
                        <td>Tanggal Cekin</td>
                        <td>Tanggal Cekout</td>
                    </tr>
                    <?php foreach($view as $row): ?>
                    <tr>
                        <td><input type="checkbox" name="msg[]" value="<?php echo $row->id_pemesan; ?>"></td>
                        <td><?= $row->id_pemesan ?></td>
                        <td><?= $row->nama_pemesan ?></td>
                        <td><?= $row->alamat_email ?></td>
                        <td><?= $row->no_hp ?></td>
                        <td><?= $row->jns_kamar ?></td>
                        <td><?= $row->jml_tamu_dewasa ?></td>
                        <td><?= $row->jml_tamu_anak ?></td>
                        <td><?= $row->jml_kamar ?></td>
                        <td><?= $row->tgl_cekin ?></td>
                        <td><?= $row->tgl_cekout ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <div class="msgfalse">
                    <?php echo $this->session->flashdata('msgfalse');?>
                </div>
                <div class="action">
                    <span><input type="checkbox" id="checkAll" name="checkAll">Pilih semua</span>
                    <input type="submit" value="Hapus">
                    <a href="<?php echo site_url('backend/manager/home') ?>">
                        <input type="button" value="Tampilkan Semua">
                    </a>
                </div>
            </form>
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
