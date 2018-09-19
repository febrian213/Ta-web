<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>DX Hotel Indonesia</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="multiscroll plugin by Alvaro Trigo. Create divided multi-scrolling pages with two splited vertical layouts or panels." />
	<meta name="keywords"  content="multiscroll,jquery,alvaro,trigo,plugin,divided,splitscreen,screen,panels,layouts,vertical,split,splited" />

	<link rel="shortcut icon" href="favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/template/jquery.multiscroll.css')?>" />		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/template/examples.css')?>" />		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/template/main.css')?>" />		
	<script src="<?php echo base_url('js/vendors/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/vendors/jquery.easings.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/js/jquery.multiscroll.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/js/main.js')?>"></script>
	<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- footer -->
	<div id="footer">&copy; 2015 DX hotel Indonesia</div>
	<!-- end -->
	<!-- menu -->
	<ul id="menu">
		<li class="up" data-menuanchor="home"><a href="#home">Home</a></li>
		<li class="up" data-menuanchor="ourhotel"><a href="#ourhotel">Our Hotel</a></li>
		<li class="up 3">
			<a href="#">Room</a>
			<!-- menu dropdown -->
			<ul class="menu up-3">
				<li class="arrow-up"></li>
				<li class="dropdown" data-menuanchor="family"><a href="#family">Family Room</a></li>
				<li class="dropdown" data-menuanchor="superior"><a href="#superior">Superior Room</a></li>
				<li class="dropdown" data-menuanchor="suite"><a href="#suite">Suite Room</a></li>
			</ul>
			<!-- end -->
		</li>
		<li class="up" data-menuanchor="reservasi"><a href="#reservasi">Reservasi</a></li>
	</ul>
	<!-- end -->
	<!-- container -->
	<div id="myContainer">
		<!--ms-left-->
		<div class="ms-left">
			<!-- home -->
			<div class="ms-section" id="left1">
				<img src="<?php echo base_url('img/49af606aeb92cf01c75644fa61fcc47e.jpg')?>" alt="1">
				<h5>Selamat Datang di DX Hotel Indonesia</h5>
				<p class="p-home">
					DX Hotel Indonesia mendedikasikan dan mempersembahkan pengalaman 
					unik yang terjangkau untuk anda melalui perpaduan bentuk mulai 
					dari bentuk bangunan, fasilitas sampai dengan pelayanan yang diberikan.  
					DX Hotel Indonesia dirancang khusus oleh kolaborasi besar seorang arsitek 
					lingkungan ternama Popo Danes bersama seorang desainer super Jepang Nobuyuki 
					Narabayashi (the former Super Potato Tokyo's designer) demi mengedepankan gaya 
					hidup yang modern dan unik.
				</p>
			</div>
			<!-- end -->
			<!-- hotel -->
			<div class="ms-section" id="left2">
				<div class="content-left">
					<img class="img-hotel" src="<?php echo base_url('img/jogja.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/super1.jpg')?>" alt="1">
				</div>
				<p class="p-hotel">
					Alamat : Jl. Sosrowijayan no.1, Malioboro, Yogyakarta<br>
					Nomer Telepon : (088) 9868542
				</p>
			</div>
			<!-- end -->
			<!-- kelas -->
			<div class="ms-section" id="left3">
				<div class="content-left">
					<img class="img-hotel" src="<?php echo base_url('img/family3.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/family1.jpg')?>" alt="1">
				</div>
				<p class="p-hotel">
					Fasilitas : TV, AC, kulkas, wifii, ruang keluarga, teras depan<br>
					Tarif : Rp.1.500.000/hari
				</p>
			</div>
			<div class="ms-section" id="left4">
				<div class="content-left">
					<img class="img-hotel" src="<?php echo base_url('img/super1.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/super4.jpg')?>" alt="1">
				</div>
				<p class="p-hotel">
					Fasilitas : TV, AC, kulkas, wifii, ruang keluarga<br>
					Tarif : Rp.1.000.000/hari
				</p>
			</div>
			<div class="ms-section" id="left5">
				<div class="content-left">
					<img class="img-hotel" src="<?php echo base_url('img/suite1.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/suite3.jpg')?>" alt="1">
				</div>
				<p class="p-hotel">
					Fasilitas : TV, AC, kulkas, wifii<br>
					Tarif : Rp.500.000/hari
				</p>
			</div>
			<!-- end -->
			<!-- reserfasi -->
			<div class="ms-section" id="left6">
				<!-- booking -->
				<div class="booking">
					<form class="#" method="post" action="<?php echo site_url('input/inputPemesan/') ?>" enctype="multipart/form-data">
						<div class="input">
							<span>Tanggal Checkin</span>
							<input class="input-text" type="text" name="tgl_cekin" placeholder="yyyy-mm-dd"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Tanggal Checkout</span>
							<input class="input-text" type="text" name="tgl_cekout" placeholder="yyyy-mm-dd"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Kelas Kamar</span>
							<select class="input-option" name="jns_kamar">
								<option name="jns_kamar" value="family">Family</option>
                                <option name="jns_kamar" value="superior">Superior</option>
                                <option name="jns_kamar" value="suite">Suite</option>
							</select>
							<div class="clear"></div>
						</div>
						<div class="input">
							<input class="input-text" type="hidden" name="id_pemesan" />
						</div>
						<div class="input">
							<span>Jumlah Kamar</span>
							<input class="input-text" type="text" name="jml_kamar" placeholder="Jumlah Kamar"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Jumlah Tamu</span>
							<input class="input-text" type="text" name="jml_tamu_dewasa" placeholder="Dewasa"/>
							<div class="clear"></div>
							<input class="input-text" type="text" name="jml_tamu_anak" placeholder="Anak-anak"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Nama Pemesan</span>
							<input class="input-text" type="text" name="nama_pemesan" placeholder="Nama Pemesan"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Nomer Handphone</span>
							<input class="input-text" type="text" name="no_hp" placeholder="Nomer Handphone"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<span>Alamat Email</span>
							<input class="input-text" type="email" name="alamat_email" placeholder="Alamat Email"/>
							<div class="clear"></div>
						</div>
						<div class="input">
							<button type="reset">reset form</button>
							<button type="submit">send</button>
						</div>
						<div class="msgtrue">
                            <?php echo $this->session->flashdata('msgtrue');?>
                        </div>
                        <div class="msgfalse">
                            <?php echo $this->session->flashdata('msgfalse');?>
                        </div>
					</form>   
				</div>
				<!-- end -->
			</div>
			<!-- end -->
		</div>
		<!-- end -->
		<!--ms-right-->
		<div class="ms-right">
			<!-- home -->
			<div class="ms-section" id="right1">
				<h1 class="dx">DX Hotel</h1>
				<img class="right" src="<?php echo base_url('img/49af606aeb92cf01c75644fa61fcc47e.jpg')?>" alt="1">
			</div>
			<!-- end -->
			<!-- hotel -->
			<div class="ms-section" id="right2">
				<h1 class="right">Jogja</h1>
				<div class="content-right">
					<img class="img-hotel" src="<?php echo base_url('img/family1.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/suite1.jpg')?>" alt="1">
				</div>
			</div>
			<!-- end -->
			<!-- kelas -->
			<div class="ms-section" id="right3">
				<h1 class="right">Family</h1>
				<div class="content-right">
					<img class="img-hotel" src="<?php echo base_url('img/family2.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/family4.jpg')?>" alt="1">
				</div>
			</div>
			<div class="ms-section" id="right4">
				<h1 class="right">Superior</h1>
				<div class="content-right">
					<img class="img-hotel" src="<?php echo base_url('img/super3.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/super2.jpg')?>" alt="1">
				</div>
			</div>
			<div class="ms-section" id="right5">
				<h1 class="right">Suite</h1>
				<div class="content-right">
					<img class="img-hotel" src="<?php echo base_url('img/suite4.jpg')?>" alt="1">
					<img class="img-hotel" src="<?php echo base_url('img/suite2.jpg')?>" alt="1">
				</div>
			</div>
			<!-- end -->
			<!-- reservasi -->
			<div class="ms-section" id="right6">
				<h1> </h1>
			</div>
			</div>	
		</div>
		<!-- end -->
	<!-- end -->
	<script>
			$('#myContainer').multiscroll({
            	sectionsColor: ['#DE564B', '#4E564B', '#3F564B', '#2A564B', '#1B564B', '#DE564B',],
            	anchors: ['home', 'ourhotel', 'family', 'superior', 'suite', 'reservasi'],
            	menu: '#menu',
            	easing: 'easeOutBack'
            });
			$(".3").hover(function(){
				$(".up-3").toggle();
			});
	</script>
</body>
</html>