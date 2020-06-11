<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
        <?php require_once("header.php"); ?>
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->
		<?php require_once("header2.php"); ?>
	</head>
	
    <?php
		$mobile = false;
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'obile') > -1 ) {
			$mobile=true;			
		}
				
		$firefox = false;
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'irefox') > -1 ) {
			$firefox=true;			
		}
    ?>			
	<body>
    	<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1><a href="index.php"><img  <?php if ($firefox && !$mobile) { echo 'style="margin-left: -500px "' ;} elseif(! $mobile) { echo 'style="margin-left: -800px "' ;} ?> src="images/logo2.png" /></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<?php require_once("menu.php"); ?>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Taekwondo</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-contact">
			<div class="container">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row" style="font-family: Roboto, Arial, sans-serif !important">
								Sou suspeito para falar. Adoro a aula, tanto a do professor Anderson quanto a do mestre Marcos. Novamente: o intuito da academia não é apenas ensinar golpes de artes marciais. Aqui nós nos divertimos muito! Venha fazer parte desta família!
							</div>
						</div>
					</div>
			</div>
		</div>
		
		<div class="slider">
			<ul>
	     		<li><img src="images/taekwondo/taekwondo9.jpeg"/></li>
				<li><img src="images/taekwondo/ney.jpeg"/></li>
				<li><img src="images/taekwondo/time.jpeg"/></li>
				<li><img src="images/taekwondo/time2.jpeg"/></li>
				<li><img src="images/taekwondo/time4.jpeg"/></li>
				<li><img src="images/taekwondo/sabrina.jpeg"/></li>
				<li><img src="images/taekwondo/time3.jpeg"/></li>
				<li><img src="images/taekwondo/aniversario1.jpeg"/></li>
				<li><img src="images/taekwondo/aniversario2.jpeg"/></li>
				<li><img src="images/taekwondo/marcao2.jpeg"/></li>
				<li><img src="images/taekwondo/campeonato1.jpeg"/></li>
				<li><img src="images/taekwondo/time5.jpeg"/></li>
				<li><img src="images/taekwondo/medalhas.jpeg"/></li>
				<li><img src="images/taekwondo/criancas1.jpeg"/></li>
				<li><img src="images/taekwondo/decathlon1.jpeg"/></li>
				<li><img src="images/taekwondo/ney-amarela.jpg"/></li>
			</ul>
		</div>
		
		<div class="slider">
			<ul>
				<li><img src="images/taekwondo/gui1.jpeg"/></li>
				<li><img src="images/taekwondo/marcao3.jpeg"/></li>				
				<li><img src="images/taekwondo/marcao4.jpeg"/></li>				
				<li><img src="images/taekwondo/marcao-e-crianca1.jpeg"/></li>
				<li><img src="images/taekwondo/mauricio1.jpeg"/></li>
				<li><img src="images/taekwondo/time9.jpeg"/></li>
				<li><img src="images/taekwondo/time8.jpeg"/></li>
				<li><img src="images/taekwondo/time10.jpeg"/></li>
				<li><img src="images/taekwondo/time11.jpeg"/></li>
				<li><img src="images/taekwondo/time13.jpeg"/></li>
				<li><img src="images/taekwondo/trofeus1.jpeg"/></li>								
				<li><img src="images/taekwondo/luizinha1.jpeg"/></li>								
				<li><img src="images/taekwondo/familia1.jpeg"/></li>
				<li><img src="images/taekwondo/jornal1.jpeg"/></li>
				<li><img src="images/taekwondo/ney2.jpeg"/></li>
				<li><img src="images/taekwondo/time5.jpeg"/></li>
				<li><img src="images/taekwondo/time6.jpeg"/></li>
				<li><img src="images/taekwondo/time7.jpeg"/></li>
				<li><img src="images/taekwondo/mestres.jpg?a=1"/></li>		
			</ul>
		</div>

		
		<div class="slider">
			<ul>
				<li><img src="images/taekwondo/marcao-e-criancas5.jpg"/></li>
				<li><img src="images/taekwondo/marcao5.jpg"/></li>
				<li><img src="images/taekwondo/sabrina2.jpg"/></li>
				<li><img src="images/taekwondo/sabrina3.jpg"/></li>
				<li><img src="images/taekwondo/marcao-e-sabrina1.jpg"/></li>
				<li><img src="images/taekwondo/aula1.jpg?a=1"/></li>
			</ul>	
		</div>


		<div id="ytplayer"></div><br />
		<div id="ytplayer2"></div><br />
		<div id="ytplayer3"></div><br />
		<div id="ytplayer4"></div><br />
		<div id="ytplayer5"></div><br />
		<div id="ytplayer6"></div><br />
		<div id="ytplayer7"></div><br />
		<div id="ytplayer8"></div><br />
		<div id="ytplayer9"></div><br />
		<div id="ytplayer10"></div><br />
		<div id="ytplayer11"></div><br />
		<div id="ytplayer12"></div><br />
		<div id="ytplayer13"></div><br />
		<div id="ytplayer14"></div><br />
		<div id="ytplayer15"></div><br />
		<div id="ytplayer16"></div><br />
		<div id="ytplayer17"></div><br />			
		<div id="ytplayer18"></div><br />
		<div id="ytplayer19"></div><br />
		<div id="ytplayer20"></div><br />
		<div id="ytplayer21"></div><br />
		<div id="ytplayer22"></div><br />
		<div id="ytplayer23"></div><br />
		<div id="ytplayer24"></div><br />
		
		<br />
		
		<div>
		    Vídeos do Facebook:
		    <ul>
		        <li><a href="https://www.facebook.com/marcos.teis.7/videos/1167596036705865/" target="_blank"/>https://www.facebook.com/marcos.teis.7/videos/1167596036705865/</a></li>
		    </ul>
		</div>
		<script>
			// Load the IFrame Player API code asynchronously.
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/player_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			// Replace the 'ytplayer' element with an <iframe> and
			// YouTube player after the API code downloads.
			var player;
			function onYouTubePlayerAPIReady() {
				player = new YT.Player('ytplayer', {
				height: '360',
				width: '640',
				videoId: 'VmGozizMsxQ'
				});
				
				player2 = new YT.Player('ytplayer2', {
				height: '360',
				width: '640',
				videoId: 'dtel_jMbFiQ'
				});

				player3 = new YT.Player('ytplayer3', {
				height: '360',
				width: '640',
				videoId: 'UIJ5d73ZNhk'
				});

				player4 = new YT.Player('ytplayer4', {
				height: '360',
				width: '640',
				videoId: 'iRb0aqNQreo'
				});

				player5 = new YT.Player('ytplayer5', {
				height: '360',
				width: '640',
				videoId: '-bdzb7vJ-7M'
				});
				
				player6 = new YT.Player('ytplayer6', {
				height: '360',
				width: '640',
				videoId: '2I6xYqKA4Cs'
				});
				
				player7 = new YT.Player('ytplayer7', {
				height: '360',
				width: '640',
				videoId: 'H10D_yQ5Jvg'
				});
				
				player8 = new YT.Player('ytplayer8', {
				height: '360',
				width: '640',
				videoId: '5barNBg3Yd8'
				});
				
				player9 = new YT.Player('ytplayer9', {
				height: '360',
				width: '640',
				videoId: 'UUQ7cTMV_Bs'
				});
				
				player10 = new YT.Player('ytplayer10', {
				height: '360',
				width: '640',
				videoId: 'sjj2P_pYQLI'
				});
				
				player11 = new YT.Player('ytplayer11', {
				height: '360',
				width: '640',
				videoId: 'lqu2JsYDMxU'
				});
				
				player12 = new YT.Player('ytplayer12', {
				height: '360',
				width: '640',
				videoId: 'hLT9sC3h_gc'
				});
				
				player13 = new YT.Player('ytplayer13', {
				height: '360',
				width: '640',
				videoId: 'EOV7NminOsc'
				});

				player14 = new YT.Player('ytplayer14', {
				height: '360',
				width: '640',
				
				videoId: 'eLATk5lLzE8'
				});

				player15 = new YT.Player('ytplayer15', {
				height: '360',
				width: '640',
				videoId: 'IGMsQHEa6R0'
				});

				player16 = new YT.Player('ytplayer16', {
				height: '360',
				width: '640',
				videoId: 'NJKQSSfacyo'
				});

				player17 = new YT.Player('ytplayer17', {
				height: '360',
				width: '640',
				videoId: 'csRg5VeCrR8'
				});

				player18 = new YT.Player('ytplayer18', {
				height: '360',
				width: '640',
				videoId: 'hLT9sC3h_gc'
				});
				
				player19 = new YT.Player('ytplayer19', {
				height: '360',
				width: '640',
				videoId: 'g2hAHl7hcW8'
				});
				
				player20 = new YT.Player('ytplayer20', {
				height: '360',
				width: '640',
				videoId: 'ZpWyeMDgmL0'
				});
				
				player21 = new YT.Player('ytplayer21', {
				height: '360',
				width: '640',
				videoId: 'gOUy_6MUYxg'
				});

				player22 = new YT.Player('ytplayer22', {
				height: '360',
				width: '640',
				videoId: 'fnHLrLo5ZY0'
				});

				player23 = new YT.Player('ytplayer23', {
				height: '360',
				width: '640',
				videoId: 'WPsMBtpEZWg'
				});
				
				player24 = new YT.Player('ytplayer24', {
				height: '360',
				width: '640',
				videoId: 'WPsMBtpEZWg'
				});

			}
		</script>
		
		<br /><br />
		
		<!-- END fh5co-contact -->
		<footer>
			<div class="row copy-right" style="background-color: #222831; border-top: 1px solid rgba(255, 255, 255, 0.1)">
				<div class="col-md-6 col-md-offset-3 text-center">
					<p class="fh5co-social-icons">
						<a href="https://www.facebook.com/teis.academia/"><i class="icon-facebook2"></i></a>
						<a href="https://www.instagram.com/teis.academia/"><i class="icon-instagram"></i></a>
					</p>
					<p>Copyright 2016 Free Html5 <a href="#">'</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
				</div>
			</div>
		</footer>
	</div>
	<!-- END fh5co-page -->
	</div>
	<!-- END fh5co-wrapper -->
	<?php require_once("javascript.php"); ?>
	<script>
		$('.slider').carousel({dots: true, infinite: true, speed: 200});
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143754760-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-143754760-1');
	</script>

	</body>
</html>


