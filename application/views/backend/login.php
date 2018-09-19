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
		<div class="content login">
			<div class="message"></div>
			<form class="data" method="post" action="<?= site_url('backend/Login/check') ?>">
			<?php echo $this->session->flashdata('msgfalse');?>
			<?php echo $this->session->flashdata('msgtrue');?>
			<div class="row"><input type="text" name="username" placeholder="username" /></div>
			<div class="row"><input type="password" name="password" placeholder="password" /></div>
            <div class="row">
                <select name="jabatan">
                    <option name="jabatan" value="manager">Manager</option>
                    <option name="jabatan" value="pegawai">Pegawai</option>
                </select>
            </div>
			<div class="row">
				<button type="reset">reset form</button>
				<button type="submit">confirmation</button>
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
