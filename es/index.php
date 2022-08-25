<?php
if(isset($_GET['utm_medium'])){
	setcookie("utm_medium", $_GET['utm_medium']);
}
if(isset($_GET['utm_campaign'])){
	setcookie("utm_campaign", $_GET['utm_campaign']);
}
if(isset($_GET['utm_content'])){
	setcookie("utm_content", $_GET['utm_content']);
}
if(isset($_GET['utm_term'])){
	setcookie("utm_term", $_GET['utm_term']);
}
if(isset($_GET['utm_source'])){
	setcookie("utm_source", $_GET['utm_source']);
}
?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Союз</title>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5L74FZ8');</script>
	<!-- End Google Tag Manager -->

	<link rel="stylesheet" href="/js/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="/css/slick.css">
	<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/responsive.css">

	<!-- Facebook Pixel Code -->
	<script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2547485445528333');
      fbq('track', 'PageView');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2547485445528333&ev=PageView&noscript=1" />
	</noscript>
	<!-- End Facebook Pixel Code -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L74FZ8"
									height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="over-wrapper">
	<div id="mobile-indicator"></div>
	<div id="sm-indicator"></div>
	<header>
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 header-col-l">
						<div class="header-logo"><a href="#"><img src="/images/logo-en.png" alt="Soyuz" title="Soyuz"></a></div>
						<div class="lang-selector">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="langMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="/images/es.svg">
								</a>

								<div class="dropdown-menu" aria-labelledby="langMenuLink">
									<a class="dropdown-item" href="/"><img src="/images/ru.svg"> Рус</a>
									<a class="dropdown-item" href="/en/"><img src="/images/gb.svg"> Eng</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 header-col-r">
						<div class="header-contacts">
							<div class="header-soclinks-wrapper">
								<div class="header-soclinks">
									<a class="soclink soclink-youtube"
										 href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber"
										 target="_blank"></a>
								</div>
							</div>
							<div class="header-contacts-l">
								<div class="header-phone"><a href="tel: 8 800 234-99-00">8 800 234-99-00</a></div>
								<div class="header-button"><a class="btn btn-callback" href="#" data-toggle="modal" data-target="#callbackModal">Solicitar llamada</a></div>
							</div>
							<div class="header-contacts-r"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#orderModal">Enviar solicitud</a></div>
						</div>
					</div>
				</div>
				<div class="row row-menu">
					<div class="col-12 col-lg-6 header-col-menu">
						<div class="header-menu-wrapper">
							<div class="menu-trigger"><span></span><span></span><span></span></div>

							<div class="header-menu">
								<div class="close"></div>
								<div class="header-menu-inner">
									<ul class="nav navbar-nav">
										<li><a href="#about">Sobre nosotros</a></li>
										<li><a href="#services">Servicios</a></li>
										<li><a href="#types">Tipos de andamios</a></li>
										<li><a href="#projects">Proyectos</a></li>
										<li><a href="#contacts">Contactos</a></li>
										<li>
											<div class="lang-selector">
												<a href="/">Рус</a>
												<a href="/en/" >Eng</a>
												<a href="/es/" class="active">Esp</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="main main-home">
		<div class="section section-top">
			<div class="section-pic-r" style="background-image:url(/files/top-new.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="section-content">
							<div class="h1">Producci&oacute;n, venta y&nbsp;alquiler de&nbsp;andamios</div>
							<div class="features-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Velocidad de&nbsp;montaje 3&nbsp;veces mayor</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Seguridad m&aacute;xima de&nbsp;trabajos en&nbsp;altura</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Producci&oacute;n, venta y&nbsp;alquiler por todo el&nbsp;mundo</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-form section-meeting section-meeting-new">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-sm-6 order-sm-2">
							<div class="order-form">
								<div class="h2">Todo sobre la&nbsp;empresa SOYUZ en&nbsp;2&nbsp;minutos</div>
								<p>&iexcl;Mire el&nbsp;v&iacute;deo para conocernos mejor! Esto no&nbsp;le&nbsp;llevar&aacute; mucho tiempo.
								</p>
								<div class="meeting-soclinks-wrapper">
									<div class="h3">S&iacute;ganos en&nbsp;las redes sociales</div>
									<div class="meeting-soclinks">
										<div class="meeting-soclinks-item">
											<a href="https://www.youtube.com/embed/3rjD0E4IZiM"
												 target="_blank" class="meeting-soclink">
												<div class="ico ico-youtube"></div>
												<div class="name">YouTube</div>
											</a>
										</div>
										<div class="meeting-soclinks-item">
											<a href="https://www.instagram.com/soyuzscaffolding/" target="_blank" class="meeting-soclink">
												<div class="ico ico-instagram"></div>
												<div class="name">Instagram</div>
											</a>
										</div>
										<div class="meeting-soclinks-item">
											<a href="https://www.facebook.com/soyuzscaffolding/" target="_blank" class="meeting-soclink">
												<div class="ico ico-fb"></div>
												<div class="name">Facebook</div>
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 order-sm-1">
							<div class="section-pic"><a href="https://www.youtube.com/embed/3rjD0E4IZiM" class="video fancybox-video">
									<!-- href="https://www.youtube.com/embed/XNFm1u6JgvM?autoplay=1" -->
									<div class="video-pic">
										<div class="play-button"></div>
										<img src="/files/video-pic-new.jpg">
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a name="about"></a>
		<div class="section section-about">

			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">01</div>
						<div class="h2">Nuestra empresa en&nbsp;cifras</div>
					</div>
					<div class="numbers-list">
						<div class="row">
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal1">
									<div class="numbers-tmb-num"><span>1 000</span> toneladas</div>
									<div class="numbers-tmb-descr">
										<p>stock de&nbsp;andamios en&nbsp;almac&eacute;n</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="/files/num-pic-1.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal2">
									<div class="numbers-tmb-num"><span>13 000</span> m&sup2;</div>
									<div class="numbers-tmb-descr">
										<p>&aacute;rea de&nbsp;producci&oacute;n</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="/files/num-pic-2.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal3">
									<div class="numbers-tmb-num"><span>100 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>estructuras entregadas a&nbsp;los clientes</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="/files/num-pic-3.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal4">
									<div class="numbers-tmb-num"><span>1 000 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>m&sup2; ensamblados</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="/files/num-pic-4.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a name="types"></a>
		<div class="section section-types">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">02</div>
						<div class="h2">Tipos de&nbsp;andamios</div>
					</div>
					<div class="custom-slider-wrapper">
						<div class="custom-slider types-slider">
							<!-- НАЧАЛО-->
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-20.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-20-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio en&nbsp;voladizo</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 12--><a class="type-tmb" href="/load-es/type-modal-12.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-12-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio jaula</div>
										<p>birdcage</p>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-25.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-25-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Encofrado circular</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-22.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-22-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Puentes peatonales / para vehículos</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-21.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-21-newest.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio para construcci&oacute;n de&nbsp;buques</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 14--><a class="type-tmb" href="/load-es/type-modal-14.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-14-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio para superficies inclinadas</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 9--><a class="type-tmb" href="/load-es/type-modal-9.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-9-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio voladizo suspendido</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-23.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-23-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio en voladizo</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-24.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-24-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio suspendido (con m&eacute;nsulas)</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-26.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-26-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Podios</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-27.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-27-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Torre autosoportada</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-28.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-28-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Pasos elevados para instalaciones de&nbsp;suministro</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-es/type-modal-1.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-1-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Tramos de&nbsp;escalera compactos</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 2--><a class="type-tmb" href="/load-es/type-modal-2.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-2-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Tramos de&nbsp;escalera para eventos p&uacute;blicos</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 3--><a class="type-tmb" href="/load-es/type-modal-3.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-3-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio para cargas extremadamente pesadas</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 4--><a class="type-tmb" href="/load-es/type-modal-4.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-4-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio resistente para encofrado</div>
<!--										<p>опалубочные столы, столы перекрытий, штапельные башни</p>-->
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 6--><a class="type-tmb" href="/load-es/type-modal-6.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-6-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio móvil</div>
										<p>torres sobre ruedas</p>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 7--><a class="type-tmb" href="/load-es/type-modal-7.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-7-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio autosoportado para fachadas</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 8--><a class="type-tmb" href="/load-es/type-modal-8.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-8-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio suspendido</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 5--><a class="type-tmb" href="/load-es/type-modal-5.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-5-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio para fachadas</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 10--><a class="type-tmb" href="/load-es/type-modal-10.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-10-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Puentes peatonales / para vehículos</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 11--><a class="type-tmb" href="/load-es/type-modal-11.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-11-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio apto para transportar con gr&uacute;a</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 13--><a class="type-tmb" href="/load-es/type-modal-13.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-13-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Andamio para trabajos en&nbsp;el&nbsp;interior</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 15--><a class="type-tmb" href="/load-es/type-modal-15.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-15-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Escenarios</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 16--><a class="type-tmb" href="/load-es/type-modal-16.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-16-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Vallas publicitarias</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 17--><a class="type-tmb" href="/load-es/type-modal-17.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-17-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Luz y&nbsp;sonido</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 18--><a class="type-tmb" href="/load-es/type-modal-18.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-18-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Instalaciones deportivas</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 19--><a class="type-tmb" href="/load-es/type-modal-19.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-19-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Gradas</div>
									</div>
								</a>
							</div>
							<!-- КОНЕЦ-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-specs">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">03</div>
								<div class="h2">Características principales</div>
							</div>
							<div class="specs-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-1.png"></div>
											<div class="specs-tmb">
												<div class="h3">Elementos etiquetados</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-2.png"></div>
											<div class="specs-tmb">
												<div class="h3">Suministrado en&nbsp;palets</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-3.png"></div>
											<div class="specs-tmb">
												<div class="h3">Peso máximo de&nbsp;elemento</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="section-pic">
							<img src="/files/specs-en.jpg">
							<div class="specs-caption">
								* Capacidad portante de&nbsp;plataformas depende de&nbsp;la&nbsp;longitud del tramo
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-video-slider">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">04</div>
						<div class="h2">Tutoriales de&nbsp;montaje</div>
					</div>
					<div class="custom-slider-wrapper video-slider-wrapper">
						<div class="custom-slider video-slider">
							<div class="slide">
								<a href="https://www.youtube.com/embed/eDhO9vkuLh8" class="fancybox-video video-slider-tmb"
									 rel="video_gal">
									<img src="https://img.youtube.com/vi/eDhO9vkuLh8/hqdefault.jpg">
									<div class="play-button"></div>
								</a>
							</div>
							<div class="slide">
								<a href="https://www.youtube.com/embed/ggGct61nb7k" class="fancybox-video video-slider-tmb"
									 rel="video_gal">
									<img src="https://img.youtube.com/vi/ggGct61nb7k/hqdefault.jpg">
									<div class="play-button"></div>
								</a>
							</div>
							<div class="slide">
								<a href="https://www.youtube.com/embed/VFSSd0D-h0s" class="fancybox-video video-slider-tmb"
									 rel="video_gal">
									<img src="https://img.youtube.com/vi/VFSSd0D-h0s/hqdefault.jpg">
									<div class="play-button"></div>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="section section-about">

			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">05</div>
						<div class="h2">Учебные центры</div>
					</div>
					<div class="centers-list">
						<div class="row">
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal1">
									<div class="center-tmb-pic">
										<img src="/files/center-1-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Учебный центр г.&nbsp;Мытищи&nbsp;МО</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal2">
									<div class="center-tmb-pic">
										<img src="/files/center-2-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Учебный центр г.&nbsp;Екатеринбург</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal3">
									<div class="center-tmb-pic">
										<img src="/files/center-3-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Учебный центр г.&nbsp;Благовещенск</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal4">
									<div class="center-tmb-pic">
										<img src="/files/center-4-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Учебный комбинат г.&nbsp;Санкт-Петербург</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<a name="services"></a>
		<div class="section section-services">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-4 col-lg-3">
							<div class="section-header">
								<div class="section-num">06</div>
								<div class="h2">Servicios</div>
							</div>
							<div class="section-lead">
								<p>Soyuz: la&nbsp;empresa rusa pionera en&nbsp;la&nbsp;producci&oacute;n de&nbsp;andamios a&nbsp;gran escala</p>
							</div>

						</div>
						<div class="col-12 col-sm-12 col-md-8 col-lg-9">
							<div class="services-list">
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Venta</div>
										<p>Estamos encantados de&nbsp;asesorarle en&nbsp;su&nbsp;compra de&nbsp;andamios SOYUZ&nbsp;&mdash; &#8470;&nbsp;1&nbsp;en Rusia</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(/files/serv-new-1.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Alquiler</div>
										<p>Alquile por un&nbsp;tiempo necesario y&nbsp;a&nbsp;buen precio</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(/files/serv-new-2.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Montaje</div>
										<p>Deposita la&nbsp;confianza en&nbsp;organizar y&nbsp;llevar a&nbsp;cabo trabajos peligrosos a&nbsp;los profesionales</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(/files/serv-new-3.jpg);"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-form section-presentation">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-sm-6 order-sm-2">
							<div class="order-form">
								<div class="h2">Solicitar presentación</div>
								<p>Por favor, deje sus contactos y&nbsp;le&nbsp;proporcionaremos la&nbsp;informaci&oacute;n m&aacute;s detallada.</p>
								<form id="presentationForm">
									<input type="hidden" name="subject" value="Союз — заявка на презентацию">
									<?php if ($utm_medium): ?><input type="hidden" name="utm_medium"
																									 value="<?php echo $utm_medium; ?>"><?php endif; ?>
									<?php if ($utm_campaign): ?><input type="hidden" name="utm_campaign"
																										 value="<?php echo $utm_campaign; ?>"><?php endif; ?>
									<?php if ($utm_content): ?><input type="hidden" name="utm_content"
																										value="<?php echo $utm_content; ?>"><?php endif; ?>
									<?php if ($utm_term): ?><input type="hidden" name="utm_term"
																								 value="<?php echo $utm_term; ?>"><?php endif; ?>
									<?php if ($utm_source): ?><input type="hidden" name="utm_source"
																									 value="<?php echo $utm_source; ?>"><?php endif; ?>
									<?php if ($cid): ?><input type="hidden" name="glid" value="<?php echo $cid; ?>"><?php endif; ?>
									<?php if ($yclid): ?><input type="hidden" name="yclid" value="<?php echo $yclid; ?>"><?php endif; ?>

									<div class="row">
										<div class="col-12 col-lg-6 col-xl-7">
											<div class="form-group">
												<label class="placeholder" for="presentation_name">Su nombre</label>
												<input type="text" name="presentation_name" id="presentation_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="presentation_phone">Telefono</label>
												<input class="input-phone-int" type="text" name="presentation_phone" id="presentation_phone"
															 required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-7">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Enviar solicitud</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>Haciendo clic en&nbsp;&laquo;Enviar&raquo; usted acepta el&nbsp;tratamiento de&nbsp;sus datos personales conforme al&nbsp;<a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
									</div>
								</form>
							</div>
						</div>
						<div class="col-12 col-sm-6 order-sm-1">
							<div class="section-pic"><img src="/files/presentation.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Преимущества-->
		<div class="section section-pros-2">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">07</div>
						<div class="h2">Ventajas de&nbsp;nuestros productos</div>
						<div class="section-sub-ttl">
							<p>Los andamios serie SmartScaff est&aacute;n desarrollados minuciosamente y&nbsp;hasta los m&iacute;nimos detalles est&aacute;n cuidados. Es&nbsp;la&nbsp;raz&oacute;n porque se&nbsp;ensamblan de&nbsp;manera r&aacute;pida y&nbsp;segura.</p>
						</div>
					</div>
					<div class="scaff-list">
						<div class="row">
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-1.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Rosca autolimpiable con delimitador de&nbsp;altura</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-2.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Multidireccional: posici&oacute;n a&nbsp;cualquier &aacute;ngulo</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-3.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Tama&ntilde;o est&aacute;ndar del tubo &oslash;48mm permite acoplar elementos en&nbsp;cualquier punto mediante abrazadera &uacute;nica</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-4.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Marcas de&nbsp;colores para identificar tama&ntilde;os</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-5.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Tama&ntilde;os m&eacute;tricos (distancias entre ejes de&nbsp;postes) m&uacute;ltiplos e&nbsp;intercambiables</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-6.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Alta capacidad portante de&nbsp;plataforma (hasta 600&nbsp;kg/m&sup2;)</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-7.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Compatibles con Layher, Scafom-Rux, Plettac, Pilosio, MJ-Geruest, Alfix, Condor y&nbsp;otros fabricantes extranjeros</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="/files/scaff-8.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Sin elementos de&nbsp;madera</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Преимущества END-->

		<a name="projects"></a>
		<div class="section section-projects">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">08</div>
						<div class="h2">Proyectos</div>
					</div>
					<div class="projects-list">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal14">
									<div class="project-tmb-pic" style="background-image:url(/files/project-14-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">01</div>
										<div class="project-tmb-cont">
											<div class="h3">Parque SKOLKOVO</div>
											<p>Moscú</p>
										</div>
									</div>
								</div>
							</div>
							<!--div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal1">
									<div class="project-tmb-pic" style="background-image:url(/files/193.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">02</div>
										<div class="project-tmb-cont">
											<div class="h3">Zavod MK, S. A. A.</div>
											<p>Izhevsk</p>
										</div>
									</div>
								</div>
							</div-->
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal9">
									<div class="project-tmb-pic" style="background-image:url(/files/project-9-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">02</div>
										<div class="project-tmb-cont">
											<div class="h3">Lajta Tsentr fachada mediática</div>
											<p>San Petersburgo</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal3">
									<div class="project-tmb-pic" style="background-image:url(/files/lahta-centr.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">03</div>
										<div class="project-tmb-cont">
											<div class="h3">Lajta Tsentr</div>
											<p>San Petersburgo</p>
										</div>
									</div>
								</div>
							</div>
							<!--div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal4">
									<div class="project-tmb-pic" style="background-image:url(/files/uc-2.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">04</div>
										<div class="project-tmb-cont">
											<div class="h3">Centro de&nbsp;formaci&oacute;n</div>
											<p>Mytishchi, &oacute;blast de&nbsp;Mosc&uacute;</p>
										</div>
									</div>
								</div>
							</div-->
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal5">
									<div class="project-tmb-pic" style="background-image:url(/files/project-5-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">04</div>
										<div class="project-tmb-cont">
											<div class="h3">Severstal</div>
											<p>Cherepovets</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal6">
									<div class="project-tmb-pic" style="background-image:url(/files/project-6-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">05</div>
										<div class="project-tmb-cont">
											<div class="h3">F&aacute;brica de&nbsp;celulosa y&nbsp;papel Segezha</div>
											<p>Segezha</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal7">
									<div class="project-tmb-pic" style="background-image:url(/files/project-7-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">06</div>
										<div class="project-tmb-cont">
											<div class="h3">Eventos</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal8">
									<div class="project-tmb-pic" style="background-image:url(/files/project-8-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">07</div>
										<div class="project-tmb-cont">
											<div class="h3">Mercado Konkovo</div>
											<p>Moscú</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal2">
									<div class="project-tmb-pic" style="background-image:url(/files/184.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">08</div>
										<div class="project-tmb-cont">
											<div class="h3">Inter RAO - Electrogueneratsia, S.A.</div>
											<p>Central termoeléctrica Kaliningradskaia-2, Kaliningrado</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal10">
									<div class="project-tmb-pic" style="background-image:url(/files/project-10-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">09</div>
										<div class="project-tmb-cont">
											<div class="h3">Centro de&nbsp;seguridad industrial Alandr</div>
											<p>Moscú</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal11">
									<div class="project-tmb-pic" style="background-image:url(/files/project-11-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">10</div>
										<div class="project-tmb-cont">
											<div class="h3">Planta de&nbsp;extracci&oacute;n y&nbsp;procesamiento de&nbsp;minerales</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal12">
									<div class="project-tmb-pic" style="background-image:url(/files/project-12-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">11</div>
										<div class="project-tmb-cont">
											<div class="h3">F&aacute;brica de&nbsp;celulosa y&nbsp;papel</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal13">
									<div class="project-tmb-pic" style="background-image:url(/files/project-13-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">12</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal15">
									<div class="project-tmb-pic" style="background-image:url(/files/project-15-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">13</div>
										<div class="project-tmb-cont">
											<div class="h3">Planta de&nbsp;procesamiento de&nbsp;gas natural</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal16">
									<div class="project-tmb-pic" style="background-image:url(/files/project-16-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">14</div>
										<div class="project-tmb-cont">
											<div class="h3">Planta de&nbsp;cemento</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal17">
									<div class="project-tmb-pic" style="background-image:url(/files/project-17-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">15</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
											<p>Reparación mayor</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal18">
									<div class="project-tmb-pic" style="background-image:url(/files/project-18-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">16</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>Trabajos tecnológicos</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal19">
									<div class="project-tmb-pic" style="background-image:url(/files/project-19-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">17</div>
										<div class="project-tmb-cont">
											<div class="h3">F&aacute;brica de&nbsp;celulosa y&nbsp;papel</div>
											<p>Montaje de&nbsp;tuber&iacute;a tecnol&oacute;gica</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal20">
									<div class="project-tmb-pic" style="background-image:url(/files/project-20-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">18</div>
										<div class="project-tmb-cont">
											<div class="h3">Astillero</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal21">
									<div class="project-tmb-pic" style="background-image:url(/files/project-21-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">19</div>
										<div class="project-tmb-cont">
											<div class="h3">Complejo petroquímico</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal22">
									<div class="project-tmb-pic" style="background-image:url(/files/project-22-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">20</div>
										<div class="project-tmb-cont">
											<div class="h3">Torres de&nbsp;andamiaje</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal23">
									<div class="project-tmb-pic" style="background-image:url(/files/project-23-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">21</div>
										<div class="project-tmb-cont">
											<div class="h3">Empresa de&nbsp;industria qu&iacute;mica</div>
											<p>Encofrado circular depósito</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal24">
									<div class="project-tmb-pic" style="background-image:url(/files/project-24-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">22</div>
										<div class="project-tmb-cont">
											<div class="h3">Planta química</div>
											<p>Trabajo en&nbsp;espacios confinados</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal25">
									<div class="project-tmb-pic" style="background-image:url(/files/project-25-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">23</div>
										<div class="project-tmb-cont">
											<div class="h3">Andamio suspendido</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal26">
									<div class="project-tmb-pic" style="background-image:url(/files/project-26-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">24</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal27">
									<div class="project-tmb-pic" style="background-image:url(/files/project-27-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">25</div>
										<div class="project-tmb-cont">
											<div class="h3">Empresa de&nbsp;industria qu&iacute;mica</div>
											<p>Reparación mayor, segundo depósito</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal28">
									<div class="project-tmb-pic" style="background-image:url(/files/project-28-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">26</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
											<p>Hormigonado segunda fase</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal29">
									<div class="project-tmb-pic" style="background-image:url(/files/project-29-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">27</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal30">
									<div class="project-tmb-pic" style="background-image:url(/files/project-30-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">28</div>
										<div class="project-tmb-cont">
											<div class="h3">Refiner&iacute;a de&nbsp;petr&oacute;leo</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal31">
									<div class="project-tmb-pic" style="background-image:url(/files/project-31-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">29</div>
										<div class="project-tmb-cont">
											<div class="h3">Encofrado circular depósito </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal32">
									<div class="project-tmb-pic" style="background-image:url(/files/project-32-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">30</div>
										<div class="project-tmb-cont">
											<div class="h3">Construcción naval</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal33">
									<div class="project-tmb-pic" style="background-image:url(/files/project-33-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">31</div>
										<div class="project-tmb-cont">
											<div class="h3">Refinería de petróleo</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-pros section-values">
			<div class="section-pic-r" style="background-image:url(/files/values-pic.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">09</div>
								<div class="h2">Nuestros valores</div>
							</div>
							<div class="pros-list pros-list-alt">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-4.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Seguridad</div>
											<p>Sin accidentes durante trabajos en&nbsp;altura</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-5.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Eficiencia</div>
											<p>Versatilidad y&nbsp;velocidad de&nbsp;montaje 3&nbsp;veces m&aacute;s r&aacute;pida</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-6.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Confianza</div>
											<p>F&aacute;brica de&nbsp;andamios SOYUZ es&nbsp;su&nbsp;socio confiable en&nbsp;tareas de&nbsp;andamiaje</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Качество-->
		<div class="section section-quality">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">10</div>
						<div class="h2">&Aacute;rea de&nbsp;producci&oacute;n propia</div>
					</div>
				</div>
			</div>
			<div class="quality-item">
				<div class="quality-item-pic" style="background-image:url(/files/quality-pic-1.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6">
							<div class="quality-item-descr">

								<div class="quality-lead">
									<p>Nuestra &aacute;rea de&nbsp;producci&oacute;n ocupa 13&nbsp;000&nbsp;m&sup2; que incluye:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Ferrer&iacute;a de&nbsp;alta precisi&oacute;n (f&aacute;brica metal&uacute;rgica)</div>
									</li>
									<li>
										<div class="cont">Estaciones de&nbsp;soldadura autom&aacute;tica</div>
									</li>
									<li>
										<div class="cont">L&iacute;neas de&nbsp;moldeado por rodillos</div>
									</li>
									<li>
										<div class="cont">Producci&oacute;n de&nbsp;moldes</div>
									</li>
									<li>
										<div class="cont">Sector de&nbsp;corte por l&aacute;ser</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="quality-item quality-item-alt">
				<div class="quality-item-pic" style="background-image:url(/files/quality-pic-3.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 offset-md-4 offset-lg-6">
							<div class="quality-item-descr">

								<div class="quality-lead">
									<p>Nuestro laboratorio y&nbsp;departamento de&nbsp;control t&eacute;cnico aseguran:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Control de&nbsp;composici&oacute;n qu&iacute;mica, estructura del metal y&nbsp;caracter&iacute;sticas f&iacute;sico-mec&aacute;nicas del acero
										</div>
									</li>
									<li>
										<div class="cont">Control de&nbsp;calidad de&nbsp;piezas fundidas: ensayo de&nbsp;radiograf&iacute;a para comprobar ausencia de&nbsp;discontinuidades (cavidades)
										</div>
									</li>
									<li>
										<div class="cont">Control visual y&nbsp;verificaci&oacute;n de&nbsp;tama&ntilde;os con calibres</div>
									</li>
									<li>
										<div class="cont">Ensayos de&nbsp;resistencia de&nbsp;andamios</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Качество END-->

		<div class="section section-pros">
			<div class="section-pic-r" style="background-image:url(/files/pros-pic.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">11</div>
								<div class="h2">F&aacute;brica de&nbsp;andamios SOYUZ&nbsp;es</div>
							</div>
							<div class="pros-list">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-1.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Nivel internacional y&nbsp;alta calidad de&nbsp;andamios</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-2.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">&Aacute;rea de&nbsp;producci&oacute;n propia</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-3.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Elementos siempre en&nbsp;stock</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Факты-->
		<div class="section section-facts">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">12</div>
						<div class="h2">Más datos sobre SOYUZ</div>
						<div class="section-sub-ttl">
							<p>Los porqu&eacute;s de&nbsp;la&nbsp;rapidez y&nbsp;seguridad de&nbsp;nuestros andamios</p>
						</div>
					</div>
					<div class="facts-list">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Producci&oacute;n y&nbsp;venta desde 2004</div>
										<p>Env&iacute;os a&nbsp;13&nbsp;pa&iacute;ses del mundo</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">An&aacute;lisis de&nbsp;experiencia de&nbsp;los top 4&nbsp;fabricantes a&nbsp;nivel mundial</div>
										<p>Andamios SOYUZ han reunido las ventajas de&nbsp;los top 4&nbsp;fabricantes mundiales y&nbsp;la&nbsp;experiencia real de&nbsp;los expertos en&nbsp;montaje</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Ciclo de&nbsp;producci&oacute;n completo</div>
										<p>Control de&nbsp;calidad en&nbsp;cada etapa: del metal fundido hasta el&nbsp;andamiaje levantado in&nbsp;situ</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Vida &uacute;til m&aacute;s de&nbsp;20&nbsp;a&ntilde;os</div>
										<p>Todos los elementos est&aacute;n protegidos contra la&nbsp;corrosi&oacute;n mediante galvanizado en&nbsp;caliente con espesor 60-80 micr&oacute;n</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Aceros especiales para tubos y&nbsp;moldes</div>
										<p>Acero de&nbsp;alta resistencia, diapas&oacute;n t&eacute;rmico de&nbsp;&minus;70&nbsp;a +425&nbsp;С&deg;</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="/images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Elementos sometidos a&nbsp;ensayos reales</div>
										<p>Los elementos portantes y&nbsp;el&nbsp;acoplamiento en&nbsp;cu&ntilde;a han sido testados usando piezas reales en&nbsp;un&nbsp;taller especializado de&nbsp;ensayos</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Факты END-->

		<!-- Клиенты-->
		<div class="section section-clients">
			<div class="section-clients-pic" style="background-image: url(/files/section-clients-pic.jpg)"></div>
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="section-header">
								<div class="section-num">13</div>
								<div class="h2">Nuestros clientes</div>
								<div class="section-sub-ttl">
									<p>Compa&ntilde;&iacute;as m&aacute;s grandes del mundo:</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clients-list">
						<div class="row">
							<div class="client-tmb"><img src="/files/client-1.png"></div>
							<div class="client-tmb"><img src="/files/client-2.png"></div>
							<div class="client-tmb"><img src="/files/client-3.png"></div>
							<div class="client-tmb"><img src="/files/client-4.png"></div>
							<div class="client-tmb"><img src="/files/client-5.png"></div>
							<div class="client-tmb"><img src="/files/client-6.png"></div>
							<div class="client-tmb"><img src="/files/client-7.png"></div>
							<div class="client-tmb"><img src="/files/client-8.png"></div>
							<div class="client-tmb"><img src="/files/client-9.png"></div>
							<div class="client-tmb"><img src="/files/client-10.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Клиенты END-->

		<!-- Сертификаты-->
		<div class="section section-cert">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">14</div>
						<div class="h2">Nuestros certificados</div>
					</div>
					<div class="cert-list">
						<div class="row">
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="/files/cert-1.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="/files/cert-1-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>GOST R 9001-2015 <br> (ISO 9001:2015)</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="/files/cert-2.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="/files/cert-2-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificado de&nbsp;conformidad GOST</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="/files/cert-3.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="/files/cert-3-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Carta del Ministerio para Situaciones de&nbsp;Emergencia de&nbsp;la&nbsp;Federaci&oacute;n Rusa</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="/files/cert-4.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="/files/cert-4-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificado de&nbsp;origen SТ-1</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="/files/cert-5.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="/files/cert-5-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificado de&nbsp;conformidad inflamabilidad, seguridad contra incendios</p>
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Сертификаты END-->

		<div class="section section-team">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">15</div>
						<div class="h2">Equipo</div>
					</div>
					<div class="team-wrapper">
						<div class="row">
							<div class="col-xs-12 col-md-4 col-lg-3">
								<div class="team-descr">
									<div class="team-descr-item">
										<div class="h3"><span>18</span> años</div>
										<p>de&nbsp;experiencia laboral</p>
									</div>
									<div class="team-descr-item">
										<div class="h3"><span>202</span></div>
										<p>empleados<br>(a partir del 01.01.2022)</p>
									</div>
									<!-- <div class="team-descr-item">
										<div class="h3"><span>1350 +</span></div>
										<p>operarios de&nbsp;montaje</p>
									</div> -->
									<div class="team-descr-item">
										<div class="h3"><span>5</span></div>
										<p>centros de&nbsp;formaci&oacute;n</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-8 col-lg-9">
								<div class="custom-slider-wrapper">
									<div class="custom-slider team-slider">
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/1.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Oleg V. Smirnov</div>
													<div class="team-tmb-post">Director General</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/2.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander A. Zazygin</div>
													<div class="team-tmb-post">Director de&nbsp;tecnología</div>
												</div>
											</div>
										</div>
										
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(../files/staff/7-1.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Stanislav R. Gordeev</div>
													<div class="team-tmb-post">Director <br> comercial</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/4.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander I. Popov</div>
													<div class="team-tmb-post">Director financiero</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/7-old.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Stanislav V. Mineakhmetov</div>
													<div class="team-tmb-post">Head of<br>sales department</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/21.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Evgeniy Y. Balaev</div>
													<div class="team-tmb-post">Head of<br>sales department</div>
												</div>
											</div>
										</div>



										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(../files/staff/7.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Dmitriy N. Sidorenko</div>
													<div class="team-tmb-post">Proyectista<br>jefe</div>
												</div>
											</div>
										</div>
										
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/25.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander V. Grigoriev</div>
													<div class="team-tmb-post">Deputy Director for supply and external cooperation</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/14.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Vitaliy V. Limonov</div>
													<div class="team-tmb-post">Proyectista<br>jefe</div>
												</div>
											</div>
										</div>
										
<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(/files/staff/18.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Elena V. Pershenkova</div>-->
<!--													<div class="team-tmb-post">Chief<br>accountant</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->

										<!-- <div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/21.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Evgeniy Y. Balaev</div>
													<div class="team-tmb-post">Head of<br>sales department</div>
												</div>
											</div>
										</div> -->

										

										<?/*
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/22.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Artem A. Vatlin</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>

										*/?>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/8.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Denis A. Myagkov</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>


<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(/files/staff/11.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Igor N. Veretennikov</div>-->
<!--													<div class="team-tmb-post">Agente<br>comercial</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/19.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Nikita D. Utrobin</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/20.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Nikita A. Zaletov</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/24.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Rustam R. Nuriakhmetov</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>
<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(/files/staff/32.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Anton N. Totoldin</div>-->
<!--													<div class="team-tmb-post">Agente<br>comercial</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/33.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Denis A. Cherepanov</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/34.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Dmitry V. Potekhin</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>

										<?/*

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/28.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Grigoriy V.Chumakov</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>



										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/29.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Vyacheslav V.Lavrentyev</div>
													<div class="team-tmb-post">Agente<br>comercial</div>
												</div>
											</div>
										</div>

										*/?>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/26.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Genrietta O. Kuznetsova</div>
													<div class="team-tmb-post">Manager for supply and external cooperation</div>
												</div>
											</div>
										</div>


										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/15.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Grigoriy A. Obukhov</div>
													<div class="team-tmb-post">Jefe del Departamento de&nbsp;diseño</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/16.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Andrey L. Smorchkov</div>
													<div class="team-tmb-post">Ingeniero Jefe de&nbsp;proyectos</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/23.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Vitaliy S. Markov</div>
													<div class="team-tmb-post">Design<br>engineer</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/30.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Vladimir V. Goncharov</div>
													<div class="team-tmb-post">Design<br>engineer</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/31.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Andrey A. Ursegov</div>
													<div class="team-tmb-post">Design<br>engineer</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/17.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander S. Lukashevskiy</div>
													<div class="team-tmb-post">Ingeniero de&nbsp;producción y&nbsp;tecnología</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="section section-form section-sample">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-sm-6 order-sm-2">
							<div class="order-form">
								<div class="h2">Solicitar un modelo de prueba</div>
								<p>Solicite una muestra de andamios para ensamblaje de prueba y revisión</p>
								<form id="sampleForm">
									<input type="hidden" name="subject" value="Союз — заявка на образец">
									<?php if ($utm_medium): ?><input type="hidden" name="utm_medium"
																									 value="<?php echo $utm_medium; ?>"><?php endif; ?>
									<?php if ($utm_campaign): ?><input type="hidden" name="utm_campaign"
																										 value="<?php echo $utm_campaign; ?>"><?php endif; ?>
									<?php if ($utm_content): ?><input type="hidden" name="utm_content"
																										value="<?php echo $utm_content; ?>"><?php endif; ?>
									<?php if ($utm_term): ?><input type="hidden" name="utm_term"
																								 value="<?php echo $utm_term; ?>"><?php endif; ?>
									<?php if ($utm_source): ?><input type="hidden" name="utm_source"
																									 value="<?php echo $utm_source; ?>"><?php endif; ?>
									<?php if ($cid): ?><input type="hidden" name="glid" value="<?php echo $cid; ?>"><?php endif; ?>
									<?php if ($yclid): ?><input type="hidden" name="yclid" value="<?php echo $yclid; ?>"><?php endif; ?>

									<div class="row">
										<div class="col-12 col-lg-6 col-xl-7">
											<div class="form-group">
												<label class="placeholder" for="sample_name">Su nombre</label>
												<input type="text" name="sample_name" id="sample_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="sample_phone">Telefono</label>
												<input class="input-phone-int" type="text" name="sample_phone" id="sample_phone" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-10">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Solicitar visita de nuestro representante</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al&nbsp; <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
									</div>
								</form>
							</div>
						</div>
						<div class="col-12 col-sm-6 order-sm-1">
							<div class="section-pic section-pic-alt"><img src="/files/sample.jpg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a name="contacts"></a>
		<div class="section section-contacts">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6">
						<div class="contacts-descr">
							<div class="h2">Contactos</div>
							<div class="h5">Llamada gratuita en el territorio de Rusia:</div>
							<div class="contacts-phone-wrapper"><a class="contacts-phone" href="tel:8 800 234-99-00">8 800 234-99-00</a>
								<div class="contacts-messengers"><a href="https://wa.me/88002349900"><img src="/images/ico-whatsapp.png"></a><a href="tg://resolve?domain=88002349900"><img src="/images/ico-telegram.png"></a><a href="viber://chat?number=88002349900&quot;"><img src="/images/ico-viber.png"></a></div>
							</div>
							<div class="h5">Correo electronico:</div>
							<p><a href="mailto:info@soyuz.pro">info@soyuz.pro</a></p>
							<div class="h5">Direccion:</div>
							<p>c/Votkinskoe shosse, 33A, Izhevsk, 426039</p>
							<div class="h5">Horario:</div>
							<p>de lunes a viernes: 9:00-20:00, sabado-domingo: 10:00 - 19:00</p>
							<div class="soclinks"><a class="soclink soclink-vk" href="https://vk.com/soyzzcl" target="_blank"></a><a class="soclink soclink-ok" href="https://ok.ru/group/55021903872223" target="_blank"></a></div>
							<div class="copyright">
								<p>&copy; Fabrica de andamios "Soyuz" 2019. Todos los derechos reservados</p>
							</div>
							<div class="footer-dev">
								<a href="http://paradigma-digital.ru/" class="footer-dev-link" target="_blank">
									Created by —<br>
									<span>Paradigma Digital Agency</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contacts-map" id="contactsMap"></div>
		</div>
	</div>

	<div class="modal fade form-modal type-modal" id="typeModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>
	<div class="modal fade form-modal" id="typeOrderModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Заказать леса</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
						<form id="typeOrderForm">
							<input type="hidden" name="subject" value="Союз — заказ лесов">
							<?php if ($utm_medium): ?><input type="hidden" name="utm_medium"
																							 value="<?php echo $utm_medium; ?>"><?php endif; ?>
							<?php if ($utm_campaign): ?><input type="hidden" name="utm_campaign"
																								 value="<?php echo $utm_campaign; ?>"><?php endif; ?>
							<?php if ($utm_content): ?><input type="hidden" name="utm_content"
																								value="<?php echo $utm_content; ?>"><?php endif; ?>
							<?php if ($utm_term): ?><input type="hidden" name="utm_term"
																						 value="<?php echo $utm_term; ?>"><?php endif; ?>
							<?php if ($utm_source): ?><input type="hidden" name="utm_source"
																							 value="<?php echo $utm_source; ?>"><?php endif; ?>
							<?php if ($cid): ?><input type="hidden" name="glid" value="<?php echo $cid; ?>"><?php endif; ?>
							<?php if ($yclid): ?><input type="hidden" name="yclid" value="<?php echo $yclid; ?>"><?php endif; ?>

							<input type="hidden" name="type_order_item" id="type_order_item">
							<div class="form-group">
								<label class="placeholder" for="type_order_name">Ваше имя</label>
								<input type="text" name="type_order_name" id="type_order_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="type_order_phone">Telefono</label>
								<input class="input-phone-int" type="text" name="type_order_phone" id="type_order_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Оставить заявку</button>
							</div>
							<div class="form-agree">
								<p>Нажимая кнопку «Отправить» вы даете свое согласией на&nbsp;обработку ваших персональных данных
									согласно <a href="#">Пользовательскому соглашению</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade form-modal" id="typeConsultModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Получить консультацию</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
						<form id="typeConsultForm">
							<input type="hidden" name="subject" value="Союз — заявка на консультацию по лесам">
							<?php if ($utm_medium): ?><input type="hidden" name="utm_medium"
																							 value="<?php echo $utm_medium; ?>"><?php endif; ?>
							<?php if ($utm_campaign): ?><input type="hidden" name="utm_campaign"
																								 value="<?php echo $utm_campaign; ?>"><?php endif; ?>
							<?php if ($utm_content): ?><input type="hidden" name="utm_content"
																								value="<?php echo $utm_content; ?>"><?php endif; ?>
							<?php if ($utm_term): ?><input type="hidden" name="utm_term"
																						 value="<?php echo $utm_term; ?>"><?php endif; ?>
							<?php if ($utm_source): ?><input type="hidden" name="utm_source"
																							 value="<?php echo $utm_source; ?>"><?php endif; ?>
							<?php if ($cid): ?><input type="hidden" name="glid" value="<?php echo $cid; ?>"><?php endif; ?>
							<?php if ($yclid): ?><input type="hidden" name="yclid" value="<?php echo $yclid; ?>"><?php endif; ?>

							<input type="hidden" name="type_consult_item" id="type_consult_item">
							<div class="form-group">
								<label class="placeholder" for="type_consult_name">Ваше имя</label>
								<input type="text" name="type_consult_name" id="type_consult_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="type_consult_phone">Telefono</label>
								<input class="input-phone-int" type="text" name="type_consult_phone" id="type_consult_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Оставить заявку</button>
							</div>
							<div class="form-agree">
								<p>Нажимая кнопку «Отправить» вы даете свое согласией на&nbsp;обработку ваших персональных данных
									согласно <a href="#">Пользовательскому соглашению</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="galleryModal1" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-1-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-1-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-1-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-1-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-1-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-1-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal2" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-2-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-2-7.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal3" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-3-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-3-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-3-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-3-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-3-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-3-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal4" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-4-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal5" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-5-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-5-9.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal6" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-6-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-6-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-6-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-6-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-6-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal7" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-7-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-9.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-10.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-11.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-12.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-13.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-14.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-15.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-16.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-17.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-18.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-7-19.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="galleryModal8" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-8-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-9.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-10.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-11.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-12.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-13.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-14.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-15.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-8-16.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal9" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-9-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-9-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-9-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-9-4.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal10" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-10-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-10-7.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal11" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-11-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-11-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-11-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal12" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-12-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-12-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-12-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-12-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-12-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-12-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal13" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-13-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-13-8.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal14" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-14-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-14-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-14-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-14-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-14-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-14-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal15" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-15-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-15-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-15-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-15-4.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal16" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-16-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-16-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-16-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-16-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-16-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal17" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-17-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-17-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-17-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-17-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-17-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal18" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-18-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-18-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-18-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-18-4.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal19" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-19-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-19-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-19-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal20" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-20-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-20-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-20-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-20-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-20-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-20-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal21" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-21-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-21-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-21-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-21-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-21-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal22" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-22-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-22-9.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal23" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-23-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-23-9.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal24" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-24-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-24-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-24-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal25" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-25-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-25-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-25-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal26" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-26-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-26-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-26-3.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal27" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-27-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-27-9.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal28" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-28-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-9.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-10.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-11.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-12.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-13.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-14.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-15.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-16.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-17.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-28-18.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal29" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-29-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-29-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-29-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-29-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-29-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal30" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-30-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-30-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-30-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-30-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-30-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal31" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-31-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-31-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-31-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-31-4.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal32" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-32-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-6.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-7.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-8.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-9.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-10.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-11.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-12.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-13.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-14.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-15.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-16.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-17.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-18.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-19.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-32-20.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal33" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-33-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-33-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-33-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-33-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-33-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-33-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="numModal1" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/num-1-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-1-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-1-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-1-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-1-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="numModal2" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/num-2-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-2-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-2-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-2-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-2-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="numModal3" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/num-3-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-3-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-3-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-3-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-3-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="numModal4" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/num-4-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-4-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-4-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-4-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/num-4-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade form-modal" id="callbackModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Solicitar llamada</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Por favor, deje sus contactos y le proporcionaremos la informacion mas detallada.</p>
						<form id="callbackForm">
							<div class="form-group">
								<label class="placeholder" for="callback_name">Su nombre</label>
								<input type="text" name="callback_name" id="callback_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="callback_phone">Telefono</label>
								<input class="input-phone-int" type="text" name="callback_phone" id="callback_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Enviar</button>
							</div>
							<div class="form-agree">
								<p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade form-modal" id="orderModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Enviar solicitud</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Please, leave your contact data below and we’ll contact you back.</p>
						<form id="order_2_Form">
							<div class="form-group">
								<label class="placeholder" for="order_2_name">Su nombre</label>
								<input type="text" name="order_2_name" id="order_2_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="order_2_phone">Telefono</label>
								<input class="input-phone-int" type="text" name="order_2_phone" id="order_2_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Enviar solicitud</button>
							</div>
							<div class="form-agree">
								<p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="centerModal1" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/project-4-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-5.jpg"></div>
						<div class="slide"><img data-lazy="/files/project-4-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="centerModal2" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/center-2-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-2-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-2-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-2-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-2-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="centerModal3" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/center-3-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-3-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-3-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-3-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-3-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="centerModal4" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/files/center-4-1.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-4-2.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-4-3.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-4-4.jpg"></div>
						<div class="slide"><img data-lazy="/files/center-4-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade form-modal success-modal" id="successModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Solicitud recibida</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>¡Le responderemos en breve!</p>
				</div>
			</div>
		</div>
	</div>

	<script>

		var curLang = "es";

	</script>

	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/js/bootstrap-select.min.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script src="/js/additional-methods.min.js"></script>
	<script src="/js/jquery.maskedinput.min.js"></script>
	<script src="/js/slick.min.js"></script>
	<script src="/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script src="/js/main.js"></script>

</div>
</body>
</html>
