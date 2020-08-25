<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
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
					<div class="col-md-8 col-md-offset-2  col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Idade limite</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<div id="fh5co-contact">
			<div class="container">
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row" style="font-family: Roboto, Arial, sans-serif !important">
								Em relação a idade limite, temos por exemplo o pai do mestre (de mais de 70 anos e um chute bomba admirável) e crianças treinando conosco. Não há idade limite para se divertir! Venha por favor fazer uma aula gratuita para conhecer! Como falar de algo sem conhecer?
								<br /><br />
								Nossa, que medo, meu filho vai se machucar. Não vai não. Nos dê uma chance uma vez por favor. Ninguém aqui vai incentivar o seu filho a ficar trocando socos na rua. Aqui temos um ambiente familiar, fique tranquilo. Nem a criança será exigida de ser o Jiraya. Fique tranquilo. Queremos vocês aqui neste ambiente também!
								<br /><br />	
								Quanto a questões físicas, sinceramente queremos muito você aqui, mas não somos médicos. Não vou te prometer uma cura de catarata por exemplo. O que te peço: se confiar, venha fazer uma aula gratuita. Ou assistir se quiser.
							</div>
						</div>
					</div>
			</div>
		</div>

		<div class="slider">
			<ul>
				<li><img src="images/idade-limite/banner-criancas.jpg"/></li>
				<li><img src="images/taekwondo/gui1.jpeg"/></li>
				<li><img src="images/taekwondo/aniversario1.jpeg"/></li>
				<li><img src="images/taekwondo/ney.jpeg"/></li>
				<li><img src="images/taekwondo/ney2.jpeg"/></li>
				<li><img src="images/taekwondo/luizinha1.jpeg"/></li>
				<li><img src="images/taekwondo/marcao-e-crianca1.jpeg"/></li>
				<li><img src="images/taekwondo/marcao-e-crianca3.jpg"/></li>
				<li><img src="images/taekwondo/marcao-e-criancas1.jpg"/></li>				
				<li><img src="images/taekwondo/marcao-e-criancas3.jpg"/></li>				
				<li><img src="images/taekwondo/marcao-e-criancas5.jpg"/></li>								
				<li><img src="images/taekwondo/ney-amarela.jpg"/></li>				
				<li><img src="images/taekwondo/marcao-e-criancas6.jpg"/></li>
			</ul>
		</div>

		<div class="slider">
			<ul>
				<li><img src="images/taekwondo/crianca2.jpg"/></li>
				<li><img src="images/taekwondo/crianca3.jpg"/></li>
				<li><img src="images/taekwondo/crianca4.jpg"/></li>
				<li><img src="images/taekwondo/crianca5.jpg"/></li>
				<li><img src="images/taekwondo/criancas2.jpg"/></li>
				<li><img src="images/taekwondo/criancas3.jpg"/></li>
				<li><img src="images/taekwondo/marcao-anderson-crianca1.jpg"/></li>
				<li><img src="images/taekwondo/marcao-e-crianca2.jpg"/></li>
				<li><img src="images/taekwondo/marcao-e-crianca4.jpg"/></li>				
				<li><img src="images/taekwondo/marcao-e-criancas2.jpg"/></li>				
				<li><img src="images/taekwondo/marcao-e-criancas4.jpg"/></li>	
				<li><img src="images/taekwondo/marcao-e-criancas5.jpg"/></li>
				<li><img src="images/taekwondo/crianca6.jpg"/></li>
			</ul>
		</div>		
		<div id="ytplayer"></div><br />
		<div id="ytplayer2"></div><br />
		<div id="ytplayer3"></div><br />
		<div id="ytplayer4"></div><br />

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
					videoId: 'lqu2JsYDMxU'
					});
					
					player2 = new YT.Player('ytplayer2', {
					height: '360',
					width: '640',
					videoId: 'IGMsQHEa6R0'
					});
					
					player3 = new YT.Player('ytplayer3', {
					height: '360',
					width: '640',
					videoId: 'NJKQSSfacyo'
					});
					
					player4 = new YT.Player('ytplayer4', {
					height: '360',
					width: '640',
					videoId: 'csRg5VeCrR8'
					});
				}
            </script>

		<!-- END fh5co-contact -->
		<footer>
			<div class="row copy-right" style="background-color: #222831; border-top: 1px solid rgba(255, 255, 255, 0.1)">
				<div class="col-md-6 col-md-offset-3 text-center">
					<p class="fh5co-social-icons">
						<a href="https://www.facebook.com/teis.academia/"><i class="icon-facebook2"></i></a>
						<a href="https://www.instagram.com/teis.academia/"><i class="icon-instagram"></i></a>
						<!--<a href="#"><i class="icon-youtube"></i></a>-->
					</p>
					<p>Copyright 2016 Free Html5 <a href="#">'</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
				</div>
			</div>
		</footer>
	</div>
	<!-- END fh5co-page -->
	</div>
	<!-- END fh5co-wrapper -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php require_once("javascript.php"); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143754760-1"></script>
	<script>
		$('.slider').carousel({dots: true, infinite: true, speed: 200});
	</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-143754760-1');
	</script>
	</body>
</html>
