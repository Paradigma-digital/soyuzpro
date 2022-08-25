<?php
// if(isset($_GET['utm_medium'])){
// 	setcookie("utm_medium", $_GET['utm_medium']);
// }
// if(isset($_GET['utm_campaign'])){
// 	setcookie("utm_campaign", $_GET['utm_campaign']);
// }
// if(isset($_GET['utm_content'])){
// 	setcookie("utm_content", $_GET['utm_content']);
// }
// if(isset($_GET['utm_term'])){
// 	setcookie("utm_term", $_GET['utm_term']);
// }
// if(isset($_GET['utm_source'])){
// 	setcookie("utm_source", $_GET['utm_source']);
// }

$utm_medium = $_GET['utm_medium'];
$utm_campaign = $_GET['utm_campaign'];
$utm_content = $_GET['utm_content'];
$utm_term = $_GET['utm_term'];
$utm_source = $_GET['utm_source'];
$cid = $_GET['cid'];
$yclid = $_GET['yclid'];


?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="facebook-domain-verification" content="ahq6gc8ql1ib10sq6e2n56l53pt3hq" />
	<title>Союз</title>
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
              'gtm.start':
                  new Date().getTime(), event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src =
              'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5L74FZ8');</script>
	<!-- End Google Tag Manager -->

	<link rel="icon" type="image/png" href="/icon-16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/icon-32.png" sizes="32x32">

	<link rel="stylesheet" href="js/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">

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
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L74FZ8"
					height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="over-wrapper">
	<div id="mobile-indicator"></div>
	<div id="sm-indicator"></div>
	<header>
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 header-col-l">
						<div class="header-logo"><a href="#"><img src="images/logo.png" alt="Союз" title="Союз"></a></div>
						<div class="lang-selector">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="langMenuLink"
									 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="images/ru.svg">
								</a>

								<div class="dropdown-menu" aria-labelledby="langMenuLink">
									<a class="dropdown-item" href="/en/"><img src="images/gb.svg"> Eng</a>
									<a class="dropdown-item" href="/es/"><img src="images/es.svg"> Esp</a>
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
									<a class="soclink soclink-vk"
										 href="https://vk.com/public212424102"
										 target="_blank"></a>
								</div>
							</div>
							<div class="header-contacts-l">
								<div class="header-phone"><a href="tel: 8 800 234-99-00" class="callibri_phone">8 800 234-99-00</a>
								</div>
								<div class="header-button"><a class="btn btn-callback" href="#" data-toggle="modal"
																							data-target="#callbackModal">Заказать звонок</a></div>
							</div>
							<div class="header-contacts-r"><a class="btn btn-1" href="#" data-toggle="modal"
																								data-target="#orderModal">Оставить заявку</a></div>
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
										<li><a href="#about">О компании</a></li>
										<li><a href="#types">Типы лесов</a></li>
										<li><a href="#services">Услуги</a></li>
										<li><a href="#projects">Проекты</a></li>
										<li><a href="#contacts">Контакты</a></li>
										<li class="d-block d-md-none">
											<div class="header-soclinks">
												<a class="soclink soclink-youtube"
													 href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber"
													 target="_blank"></a>
												<a class="soclink soclink-vk" href="https://vk.com/public212424102" target="_blank"></a>
											</div>
										</li>
										<li class="d-block d-md-none">
											<div class="lang-selector">
												<a href="/" class="active">Рус</a>
												<a href="/en/">Eng</a>
												<a href="/es/">Esp</a>
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
			<div class="section-pic-r" style="background-image:url(files/top-new.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="section-content">
							<div class="h1">Производство, продажа и&nbsp;аренда строительных лесов</div>
							<div class="features-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Скорость сборки лесов в&nbsp;3&nbsp;раза выше</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Максимальная безопасность работ на&nbsp;высоте</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Производство, продажа и&nbsp;аренда по&nbsp;всему миру</div>
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
								<div class="h2">Все о&nbsp;компании &laquo;СОЮЗ&raquo; за&nbsp;2&nbsp;минуты</div>
								<p>Посмотрите видео, чтобы познакомиться с нашей компанией поближе! Это не займет много времени.
								</p>
								<div class="meeting-soclinks-wrapper">
									<div class="h3">Присоединяйтесь к&nbsp;нам в&nbsp;социальных сетях</div>
									<div class="meeting-soclinks">
										<div class="meeting-soclinks-item">
											<a href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber"
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
							<div class="section-pic"><a href="https://www.youtube.com/embed/BQg8SfRtiDU" class="video fancybox-video">
									<!-- href="https://www.youtube.com/embed/XNFm1u6JgvM?autoplay=1" -->
									<div class="video-pic">
										<div class="play-button"></div>
										<img src="files/video-pic-new.jpg">
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
						<div class="h2">О&nbsp;компании в&nbsp;цифрах</div>
					</div>
					<div class="numbers-list">
						<div class="row">
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal1">
									<div class="numbers-tmb-num"><span>1 000</span> тонн</div>
									<div class="numbers-tmb-descr">
										<p>запас лесов на&nbsp;складе</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="files/num-pic-1.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal2">
									<div class="numbers-tmb-num"><span>13 000</span> м&sup2;</div>
									<div class="numbers-tmb-descr">
										<p>производственных площадей</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="files/num-pic-2.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal3">
									<div class="numbers-tmb-num"><span>100 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>сданных конструкций</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="files/num-pic-3.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal4">
									<div class="numbers-tmb-num"><span>1 000 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>собранных м&sup2;</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="files/num-pic-4.jpg">
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
						<div class="h2">Типы лесов</div>
					</div>
					<div class="custom-slider-wrapper">
						<div class="custom-slider types-slider">
							<!-- НАЧАЛО-->
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-20.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-20-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Консольно-опорные леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 12--><a class="type-tmb" href="load/type-modal-12.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-12-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Объёмные леса</div>
										<p>birdcage</p>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-25.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-25-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Круговые леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-22.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-22-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Мостовые переходы / переезды</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-21.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-21-newest.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Доковые леса</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 14--><a class="type-tmb" href="load/type-modal-14.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-14-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Леса на&nbsp;наклонных поверхностях</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 9--><a class="type-tmb" href="load/type-modal-9.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-9-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Консольно-подвесные леса</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-23.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-23-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Консольно-опорные леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-24.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-24-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Консольные леса (балконы)</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-26.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-26-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Подиумы</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-27.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-27-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Свободностоящие башенные леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-28.html" data-toggle="modal"
														data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-28-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Эстакады для инженерных коммуникаций</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 1--><a class="type-tmb" href="load/type-modal-1.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-1-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Компактные маршевые лестничные башни</div>
									</div>
								</a>
							</div>


							<div class="slide">
								<!-- 2--><a class="type-tmb" href="load/type-modal-2.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-2-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Маршевые лестничные башни для массовых мероприятий</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 3--><a class="type-tmb" href="load/type-modal-3.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-3-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Несущие леса для особо-высоких нагрузок</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 4--><a class="type-tmb" href="load/type-modal-4.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-4-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Несущие леса под опалубку</div>
										<p>опалубочные столы, столы перекрытий, штапельные башни</p>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 6--><a class="type-tmb" href="load/type-modal-6.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-6-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Мобильные леса на&nbsp;колесах</div>
										<p>вышки-туры</p>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 7--><a class="type-tmb" href="load/type-modal-7.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-7-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Свободностоящие фасадные леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 8--><a class="type-tmb" href="load/type-modal-8.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-8-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Подвесные леса</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 5--><a class="type-tmb" href="load/type-modal-5.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-5-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Фасадные леса</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 10--><a class="type-tmb" href="load/type-modal-10.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-10-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Мостовые переходы/переезды</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 11--><a class="type-tmb" href="load/type-modal-11.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-11-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Леса, переносимые краном</div>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 13--><a class="type-tmb" href="load/type-modal-13.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-13-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Внутренние леса</div>
										<p>в&nbsp;замкнутых пространствах</p>
									</div>
								</a>
							</div>

							<div class="slide">
								<!-- 15--><a class="type-tmb" href="load/type-modal-15.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-15-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Сцены</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 16--><a class="type-tmb" href="load/type-modal-16.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-16-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Рекламные конструкции</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 17--><a class="type-tmb" href="load/type-modal-17.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-17-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Свето-звуковые порталы</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 18--><a class="type-tmb" href="load/type-modal-18.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-18-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Спортивные конструкции и&nbsp;сооружения</div>
									</div>
								</a>
							</div>
							<div class="slide">
								<!-- 19--><a class="type-tmb" href="load/type-modal-19.html" data-toggle="modal"
														 data-target="#typeModal">
									<div class="type-tmb-pic"><img src="files/types/type-19-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Трибуны</div>
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
								<div class="h2">Основные характеристики</div>
							</div>
							<div class="specs-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="images/spec-1.png"></div>
											<div class="specs-tmb">
												<div class="h3">Элементы промаркированы</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="images/spec-2.png"></div>
											<div class="specs-tmb">
												<div class="h3">Поставляется в&nbsp;паллетах</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="images/spec-3.png"></div>
											<div class="specs-tmb">
												<div class="h3">Максимальная масса элемента</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="section-pic">
							<img src="files/specs-new.jpg">
							<div class="specs-caption">
								* Несущая способность настилов зависит от&nbsp;длины пролета
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
						<div class="h2">Видеоинструкции по&nbsp;сборке</div>
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
								<div class="h2">Услуги</div>
							</div>
							<div class="section-lead">
								<p>Союз первый и&nbsp;крупнейший производитель строительных лесов в&nbsp;России</p>
							</div>

						</div>
						<div class="col-12 col-sm-12 col-md-8 col-lg-9">
							<div class="services-list">
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Продажа</div>
										<p>Станьте обладателем строительных лесов марки Союз – №1&nbsp;в&nbsp;России</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(files/serv-new-1.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Аренда</div>
										<p>Воспользуйтесь на&nbsp;нужный срок и&nbsp;по разумной цене</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(files/serv-new-2.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Монтаж</div>
										<p>Доверьте организацию и&nbsp;выполнение опасных работ профессионалам в&nbsp;своей области</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(files/serv-new-3.jpg);"></div>
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
								<div class="h2">Закажите презентацию</div>
								<p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения
									деталей.</p>
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
												<label class="placeholder" for="presentation_name">Ваше имя</label>
												<input type="text" name="presentation_name" id="presentation_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="presentation_phone">Телефон</label>
												<input class="input-phone" type="text" name="presentation_phone" id="presentation_phone"
															 required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-7">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Оставить заявку</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных
											согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому
												соглашению</a></p>
									</div>
								</form>
							</div>
						</div>
						<div class="col-12 col-sm-6 order-sm-1">
							<div class="section-pic"><img src="files/presentation.png"></div>
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
						<div class="h2">Преимущества нашей продукции</div>
						<div class="section-sub-ttl">
							<p>Леса серии SmartScaff продуманы до&nbsp;мелочей, именно поэтому они собираются быстро
								и&nbsp;безопасно.</p>
						</div>
					</div>
					<div class="scaff-list">
						<div class="row">
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-1.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Самоочищающаяся резьба с&nbsp;автоматическим ограничителем высоты выкрутки домкрата</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-2.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Автоматические и&nbsp;произвольные углы установки элементов</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-3.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Универсальный размер трубы в&nbsp;&oslash;48мм, позволяет в&nbsp;любых точках соединять элементы
											между собой одним видом хомутов</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-4.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Цветовая навигация по&nbsp;каждому типоразмеру</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-5.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Кратные и&nbsp;взаимозаменяемые метрические размеры по&nbsp;осям элементов</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-6.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Высокая несущая способность рабочего уровня лесов (до&nbsp;600&nbsp;кг/м&sup2;)</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-7.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Совместимость с ведущими мировыми производителями</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-8.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Полное отсутствие деревянных элементов лесов</p>
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
						<div class="h2">Проекты</div>
					</div>
					<div class="projects-list">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal14">
									<div class="project-tmb-pic" style="background-image:url(files/project-14-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">01</div>
										<div class="project-tmb-cont">
											<div class="h3">"Сколково Парк"</div>
											<p>г.&nbsp;Москва</p>
										</div>
									</div>
								</div>
							</div>
							<!--div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal1">
									<div class="project-tmb-pic" style="background-image:url(files/193.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">02</div>
										<div class="project-tmb-cont">
											<div class="h3">ООО "Завод МК"</div>
											<p>г.&nbsp;Ижевск</p>
										</div>
									</div>
								</div>
							</div-->
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal9">
									<div class="project-tmb-pic" style="background-image:url(files/project-9-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">02</div>
										<div class="project-tmb-cont">
											<div class="h3">Лахта Центр Медиа фасад</div>
											<p>г. Санкт-Петербург</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal3">
									<div class="project-tmb-pic" style="background-image:url(files/lahta-centr.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">03</div>
										<div class="project-tmb-cont">
											<div class="h3">Лахта-Центр</div>
											<p>г. Санкт Петербург</p>
										</div>
									</div>
								</div>
							</div>
							<!--div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal4">
									<div class="project-tmb-pic" style="background-image:url(files/uc-2.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">04</div>
										<div class="project-tmb-cont">
											<div class="h3">Учебный центр</div>
											<p>г. Мытищи МО</p>
										</div>
									</div>
								</div>
							</div-->
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal5">
									<div class="project-tmb-pic" style="background-image:url(files/project-5-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">04</div>
										<div class="project-tmb-cont">
											<div class="h3">Северсталь</div>
											<p>г. Череповец</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal6">
									<div class="project-tmb-pic" style="background-image:url(files/project-6-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">05</div>
										<div class="project-tmb-cont">
											<div class="h3">Сегежский ЦБК</div>
											<p>г. Сегежа</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal7">
									<div class="project-tmb-pic" style="background-image:url(files/project-7-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">06</div>
										<div class="project-tmb-cont">
											<div class="h3">Event-мероприятия</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal8">
									<div class="project-tmb-pic" style="background-image:url(files/project-8-tmb.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">07</div>
										<div class="project-tmb-cont">
											<div class="h3">Коньково Маркет</div>
											<p>г. Москва</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal2">
									<div class="project-tmb-pic" style="background-image:url(files/184.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">08</div>
										<div class="project-tmb-cont">
											<div class="h3">АО "Интер РАО – Электрогенерация"</div>
											<p>"Калининградская ТЭЦ-2" г.&nbsp;Калининград</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal10">
									<div class="project-tmb-pic" style="background-image:url(files/project-10-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">09</div>
										<div class="project-tmb-cont">
											<div class="h3">Центр промышленной безопасности Аландр</div>
											<p>г. Москва</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal11">
									<div class="project-tmb-pic" style="background-image:url(files/project-11-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">10</div>
										<div class="project-tmb-cont">
											<div class="h3">ГОК</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal12">
									<div class="project-tmb-pic" style="background-image:url(files/project-12-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">11</div>
										<div class="project-tmb-cont">
											<div class="h3">ЦБК</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal13">
									<div class="project-tmb-pic" style="background-image:url(files/project-13-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">12</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal15">
									<div class="project-tmb-pic" style="background-image:url(files/project-15-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">13</div>
										<div class="project-tmb-cont">
											<div class="h3">ГПЗ</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal16">
									<div class="project-tmb-pic" style="background-image:url(files/project-16-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">14</div>
										<div class="project-tmb-cont">
											<div class="h3">Цементный завод</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal17">
									<div class="project-tmb-pic" style="background-image:url(files/project-17-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">15</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>Остановочный ремонт</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal18">
									<div class="project-tmb-pic" style="background-image:url(files/project-18-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">16</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>Технологические работы</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal19">
									<div class="project-tmb-pic" style="background-image:url(files/project-19-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">17</div>
										<div class="project-tmb-cont">
											<div class="h3">ЦБК</div>
											<p>Монтаж технологических трубопроводов</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal20">
									<div class="project-tmb-pic" style="background-image:url(files/project-20-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">18</div>
										<div class="project-tmb-cont">
											<div class="h3">Судостроительный завод</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal21">
									<div class="project-tmb-pic" style="background-image:url(files/project-21-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">19</div>
										<div class="project-tmb-cont">
											<div class="h3">Нефтехимический комбинат</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal22">
									<div class="project-tmb-pic" style="background-image:url(files/project-22-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">20</div>
										<div class="project-tmb-cont">
											<div class="h3">Вышки-туры</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal23">
									<div class="project-tmb-pic" style="background-image:url(files/project-23-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">21</div>
										<div class="project-tmb-cont">
											<div class="h3">Химкомбинат</div>
											<p>Круговая обстройка емкости</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal24">
									<div class="project-tmb-pic" style="background-image:url(files/project-24-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">22</div>
										<div class="project-tmb-cont">
											<div class="h3">Химзавод</div>
											<p>Работа в&nbsp;стесненных условиях</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal25">
									<div class="project-tmb-pic" style="background-image:url(files/project-25-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">23</div>
										<div class="project-tmb-cont">
											<div class="h3">Подвесные леса</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal26">
									<div class="project-tmb-pic" style="background-image:url(files/project-26-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">24</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal27">
									<div class="project-tmb-pic" style="background-image:url(files/project-27-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">25</div>
										<div class="project-tmb-cont">
											<div class="h3">Химкомбинат</div>
											<p>Остановочный ремонт, вторая емкость</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal28">
									<div class="project-tmb-pic" style="background-image:url(files/project-28-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">26</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
											<p>Заливка второй очереди</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal29">
									<div class="project-tmb-pic" style="background-image:url(files/project-29-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">27</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal30">
									<div class="project-tmb-pic" style="background-image:url(files/project-30-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">28</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal31">
									<div class="project-tmb-pic" style="background-image:url(files/project-31-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">29</div>
										<div class="project-tmb-cont">
											<div class="h3">Круговая обстройка емкости</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal32">
									<div class="project-tmb-pic" style="background-image:url(files/project-32-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">30</div>
										<div class="project-tmb-cont">
											<div class="h3">Судостроение</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal33">
									<div class="project-tmb-pic" style="background-image:url(files/project-33-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">31</div>
										<div class="project-tmb-cont">
											<div class="h3">НПЗ</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal34">
									<div class="project-tmb-pic" style="background-image:url(files/project-34-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">32</div>
										<div class="project-tmb-cont">
											<div class="h3">ОПЛ</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal35">
									<div class="project-tmb-pic" style="background-image:url(files/project-35-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">33</div>
										<div class="project-tmb-cont">
											<div class="h3">Ледостойкая платформа</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal36">
									<div class="project-tmb-pic" style="background-image:url(files/project-36-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">34</div>
										<div class="project-tmb-cont">
											<div class="h3">Лестничные переходы</div>
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
			<div class="section-pic-r" style="background-image:url(files/values-pic.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">09</div>
								<div class="h2">Наши ценности</div>
							</div>
							<div class="pros-list pros-list-alt">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-4.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Безопасность</div>
											<p>От несчастных случаев при работах на высоте</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-5.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Эффективность</div>
											<p>Скорость сборки в 3 раза выше и технологичность лесов</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-6.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Доверие</div>
											<p>ЗСЛ &laquo;Союз&raquo; &mdash; ваш надежный партнер для решения задач в сфере строительных
												лесов.</p>
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
						<div class="h2">Собственное производство</div>
					</div>
				</div>
			</div>
			<div class="quality-item">
				<div class="quality-item-pic" style="background-image:url(files/quality-pic-1.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6">
							<div class="quality-item-descr">

								<div class="quality-lead">
									<p>Общая площадь производственных площадей&nbsp;&mdash; 13&nbsp;000&nbsp;м&sup2;, которая
										включает:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Высокоточное литейное производство (металлургический завод)</div>
									</li>
									<li>
										<div class="cont">Посты автоматической сварки</div>
									</li>
									<li>
										<div class="cont">Линии роликовой формовки</div>
									</li>
									<li>
										<div class="cont">Формовочное производство</div>
									</li>
									<li>
										<div class="cont">Участки лазерной резки</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="quality-item quality-item-alt">
				<div class="quality-item-pic" style="background-image:url(files/quality-pic-3.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8 col-lg-6 offset-md-4 offset-lg-6">
							<div class="quality-item-descr">

								<div class="quality-lead">
									<p>Собственная лаборатория и&nbsp;отдел технического контроля завода строительных лесов &laquo;СОЮЗ&raquo;
										позволяют обеспечить:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Контроль химического состава, структуры металла и&nbsp;физико-механических
											характеристик стали
										</div>
									</li>
									<li>
										<div class="cont">Контроль качества литьевых блоков на&nbsp;наличие &laquo;раковин&raquo; (пустот) с&nbsp;помощью
											радиографии
										</div>
									</li>
									<li>
										<div class="cont">Визуальный контроль и&nbsp;сверка размеров с&nbsp;калибрами</div>
									</li>
									<li>
										<div class="cont">Реальные тесты образцов лесов на&nbsp;прочность</div>
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
			<div class="section-pic-r" style="background-image:url(files/pros-pic.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">11</div>
								<div class="h2">ЗСЛ &laquo;СОЮЗ&raquo; это</div>
							</div>
							<div class="pros-list">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-1.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Международный уровень и&nbsp;высокое качество лесов</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-2.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Собственное производство</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="images/pros-3.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Постоянное наличие элементов на&nbsp;нашем складе</div>
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
						<div class="h2">Факты о&nbsp;ЗСЛ &laquo;СОЮЗ&raquo;</div>
						<div class="section-sub-ttl">
							<p>Почему наши леса быстрые и&nbsp;безопасные</p>
						</div>
					</div>
					<div class="facts-list">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Опыт работы производственного объединения с&nbsp;2004 года</div>
										<p>Поставки в&nbsp;13&nbsp;стран мира</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Анализ ТОП&nbsp;4 мировых производителей</div>
										<p>Леса СОЮЗ объединили преимущества 4-х мировых производителей и&nbsp;реальный опыт монтажников
											лесов</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Полный цикл производства</div>
										<p>Контроль качества продукции от&nbsp;жидкого металла до&nbsp;готовых лесов на&nbsp;вашем
											объекте</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Срок службы 20&nbsp;лет</div>
										<p>Все элементы защищены от&nbsp;коррозии методом горячего оцинкования с&nbsp;толщиной покрытия
											60-80&nbsp;мк</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Специальные стали для труб и&nbsp;литьевых блоков</div>
										<p>Высокая прочность стали, температурный диапазон работы изделий от &minus;70 до&nbsp;+425&nbsp;С&deg;</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Элементы лесов проверены реальными тестами</div>
										<p>Несущие элементы лесов и&nbsp;клиновой узел проверены на&nbsp;реальных образцах в&nbsp;специализированном
											испытательном центре</p>
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
			<div class="section-clients-pic" style="background-image: url(files/section-clients-pic.jpg)"></div>
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="section-header">
								<div class="section-num">13</div>
								<div class="h2">Наши заказчики</div>
								<div class="section-sub-ttl">
									<p>Крупнейшие мировые компании:</p>
								</div>
							</div>
						</div>
					</div>
					<div class="clients-list">
						<div class="row">
							<div class="client-tmb"><img src="files/client-1.png"></div>
							<div class="client-tmb"><img src="files/client-2.png"></div>
							<div class="client-tmb"><img src="files/client-3.png"></div>
							<div class="client-tmb"><img src="files/client-4.png"></div>
							<div class="client-tmb"><img src="files/client-5.png"></div>
							<div class="client-tmb"><img src="files/client-6.png"></div>
							<div class="client-tmb"><img src="files/client-7.png"></div>
							<div class="client-tmb"><img src="files/client-8.png"></div>
							<div class="client-tmb"><img src="files/client-9.png"></div>
							<div class="client-tmb"><img src="files/client-10.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Клиенты END-->

		<!-- Стандарты -->
		<div class="section section-standart">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="standart-img">
							<a href="#" data-toggle="modal" data-target="#standartModal">
								<img src="assets/images/st.png" alt="">
							</a>
						</div>	
					</div>
					<div class="col-lg-6 standart-col">
						<div class="h2">Стандарты качества</div>
						<p>
							Основной целью ООО ЗСЛ «СОЮЗ» является обеспечение высокого качества изготавливаемого оборудования для безопасного доступа на высоту с целью максимального удовлетворения требований заказчика.
						</p>
						<p>
							Предприятие работает в соответствии с современными российскими и международными стандартами в области системы менеджмента, что подтверждено соответствующими сертификатами.
						</p>
						<a href="#" class="standart-politic" data-toggle="modal" data-target="#standartModal">Политика в области качества</a>
					</div>
				</div>
			</div>
		</div>		
		<!-- Стандарты END -->

		<!-- Сертификаты-->
		<div class="section section-cert">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">14</div>
						<div class="h2">Наши сертификаты</div>
					</div>
					<div class="cert-list">
						<div class="row">
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-1.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-1-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>ГОСТ Р ИСO 9001-2012 <br> (ISO 9001:2015)</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-2.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-2-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат соответствия ГОСТ</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-3.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-3-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Письмо МЧС РОССИИ</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-4.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-4-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат происхождения СТ-1</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-5.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-5-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат соответствия на горючесть, на пожарную безопасность</p>
									</div>
								</a></div>
								
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-6.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-6-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Патент на промышленный образец "№ 126997" ФЛАНЕЦ</p>
									</div>
								</a></div>
								
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-7.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-7-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Патент на промышленный образец "№ 126998" ДЕРЖАТЕЛЬ РИГЕЛЯ</p>
									</div>
								</a></div>
								
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-8.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-8-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Патент на промышленный образец "№ 125493" ХОМУТ</p>
									</div>
								</a></div>
						</div>
						<!-- <div class="row">
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-1.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-1-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>ISO 9001-2015</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-2.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-2-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат соответствия ГОСТ</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-3.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-3-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Письмо МЧС РОССИИ</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-4.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-4-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат происхождения СТ-1</p>
									</div>
								</a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-5.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-5-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Сертификат соответствия на горючесть, на пожарную безопасность</p>
									</div>
								</a></div>
						</div> -->
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
						<div class="h2">Команда</div>
					</div>
					<div class="team-wrapper">
						<div class="row">
							<div class="col-xs-12 col-md-4 col-lg-3">
								<div class="team-descr">
									<div class="team-descr-item">
										<div class="h3"><span>18</span> лет</div>
										<p>опыта работы</p>
									</div>
									<div class="team-descr-item">
										<div class="h3"><span>202</span></div>
										<p>сотрудника<br>(на 01.01.2022 г.)</p>
									</div>
									<!-- <div class="team-descr-item">
										<div class="h3"><span>1350 +</span></div>
										<p>монтажников</p>
									</div> -->
									<div class="team-descr-item">
										<div class="h3"><span>5</span></div>
										<p>учебных центров</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-8 col-lg-9">
								<div class="custom-slider-wrapper">
									<div class="custom-slider team-slider">
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/1.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Смирнов Олег Владимирович</div>
													<div class="team-tmb-post">Генеральный</br>директор</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/2.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Зазыгин Александр Александрович</div>
													<div class="team-tmb-post">Технический</br>директор</div>
												</div>
											</div>
										</div>
										<!-- <div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/3.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Даутов Ирек</br>Дамирович</div>
													<div class="team-tmb-post">Директор</br>по производству</div>
												</div>
											</div>
										</div> -->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/7-1.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Гордеев Станислав Романович</div>
													<div class="team-tmb-post">Коммерческий</br>директор</div>
												</div>
											</div>
										</div>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/4.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Попов Александр Иванович</div>
													<div class="team-tmb-post">Финансовый</br>директор</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/7-old.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Минеахметов Станислав</br>Владиславович</div>
													<div class="team-tmb-post">Руководитель</br>отдела продаж</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/21.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Балаев Евгений</br>Юрьевич</div>
													<div class="team-tmb-post">Руководитель</br>отдела продаж</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/25.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Григорьев Александр Владимирович</div>
													<div class="team-tmb-post">Заместитель директора по&nbsp;снабжению и&nbsp;внешней кооперации
													</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/14.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Лимонов Виталий Владимирович</div>
													<div class="team-tmb-post">Главный</br>конструктор</div>
												</div>
											</div>
										</div>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/7.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Сидоренко Дмитрий Николаевич</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>
										
										
										
<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(files/staff/18.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Першенкова Елена Вениаминовна</div>-->
<!--													<div class="team-tmb-post">Главный</br>бухгалтер</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->

										<!-- <div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/21.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Балаев Евгений</br>Юрьевич</div>
													<div class="team-tmb-post">Руководитель</br>отдела продаж</div>
												</div>
											</div>
										</div> -->

										

										

										<? /*

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/22.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Ватлин Артем Александрович </div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>

										*/ ?>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/8.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Мягков Денис Александрович</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>


<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(files/staff/11.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Веретенников Игорь Николаевич</div>-->
<!--													<div class="team-tmb-post">Руководитель</br>проектов</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/19.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Утробин Никита Дмитриевич</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/20.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Залётов Никита Александрович</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/24.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Нуриахметов Рустам Равилевич</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>
<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(files/staff/32.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Тотолдин Антон Николаевич</div>-->
<!--													<div class="team-tmb-post">Руководитель</br>проектов</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<!-- <div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/33.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Черепанов Денис Александрович</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div> -->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/34.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Потехин Дмитрий Владимирович</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>

										<? /*

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/28.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Чумаков Григорий Владимирович</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/29.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Лаврентьев Вячеслав Николаевич</div>
													<div class="team-tmb-post">Руководитель</br>проектов</div>
												</div>
											</div>
										</div>

										*/ ?>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/26.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Кузнецова Генриетта Олеговна</div>
													<div class="team-tmb-post">Менеджер по&nbsp;снабжению и&nbsp;внешней кооперации</div>
												</div>
											</div>
										</div>


										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/15.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Обухов Григорий Алексеевич</div>
													<div class="team-tmb-post">Начальник конструкторского отдела</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/16.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Сморчков Андрей Леонидович</div>
													<div class="team-tmb-post">Главный</br>инженер проектов</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/23.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Марков Виталий Сергеевич</div>
													<div class="team-tmb-post">Инженер-</br>конструктор</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/30.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Гончаров Владимир Валентинович</div>
													<div class="team-tmb-post">Инженер-</br>конструктор</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/31.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Урсегов Андрей Александрович</div>
													<div class="team-tmb-post">Инженер-</br>конструктор</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(files/staff/17.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Лукашевский Александр Сергеевич</div>
													<div class="team-tmb-post">Ведущий инженер</br>ПТО</div>
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
								<div class="h2">Закажите образец лесов</div>
								<p>Закажите образец лесов для ознакомления и&nbsp;пробной сборки</p>
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
												<label class="placeholder" for="sample_name">Ваше имя</label>
												<input type="text" name="sample_name" id="sample_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="sample_phone">Телефон</label>
												<input class="input-phone" type="text" name="sample_phone" id="sample_phone" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-8">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Заказать бесплатный выезд</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных
											согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому
												соглашению</a></p>
									</div>
								</form>
							</div>
						</div>
						<div class="col-12 col-sm-6 order-sm-1">
							<div class="section-pic section-pic-alt"><img src="files/sample.jpg"></div>
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
							<div class="h2">Контакты</div>
							<div class="h5">Звонок бесплатный по РФ:</div>
							<div class="contacts-phone-wrapper">
								<a class="contacts-phone callibri_phone" href="tel:8 800 234-99-00">8 800 234-99-00</a><div class="contacts-messengers"><a href="https://wa.me/79124514548"><img src="images/ico-whatsapp.png"></a></div>

							</div>
							<div class="h5">E-mail:</div>
							<p><a href="mailto:info@soyuz.pro">info@soyuz.pro</a></p>
							<div class="h5">Адрес:</div>
							<p>426039, г. Ижевск, Воткинское шоссе, 33А</p>
							<p><a href="tel:+7 (3412) 44-50-33" class="contacts-phone">+7 (3412) 44-50-33</a></p>
							<div class="soclinks">
								<? /*<a class="soclink soclink-vk"
                  href="https://vk.com/soyuzscaffolding" target="_blank"></a>*/ ?>
								<? /*<a class="soclink soclink-ok"
                  href="https://ok.ru/group/55021903872223" target="_blank"></a>*/ ?>
								<a class="soclink soclink-youtube"
									 href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber"
									 target="_blank"></a>
								<a class="soclink soclink-vk" href="https://vk.com/public212424102" target="_blank"></a>
							</div>
							<div class="copyright">
								<p>&copy; Завод строительных лесов «Союз» 2020. Все права защищены.</p>
							</div>
							<div class="footer-dev">
								<a href="http://paradigma-digital.ru/" class="footer-dev-link" target="_blank">
									Разработка сайта —<br>
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
	<div class="modal fade gallery-modal" id="galleryModal1" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="files/project-1-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-1-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-1-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-1-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-1-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-1-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-2-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-2-7.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-3-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-3-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-3-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-3-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-3-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-3-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-5-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-5-9.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-6-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-6-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-6-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-6-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-6-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-7-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-9.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-10.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-11.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-12.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-13.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-14.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-15.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-16.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-17.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-18.jpg"></div>
						<div class="slide"><img data-lazy="files/project-7-19.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-8-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-9.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-10.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-11.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-12.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-13.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-14.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-15.jpg"></div>
						<div class="slide"><img data-lazy="files/project-8-16.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-9-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-9-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-9-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-9-4.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-10-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-10-7.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-11-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-11-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-11-3.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-12-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-12-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-12-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-12-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-12-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-12-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-13-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-13-8.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-14-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-14-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-14-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-14-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-14-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-14-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-15-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-15-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-15-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-15-4.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-16-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-16-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-16-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-16-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-16-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-17-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-17-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-17-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-17-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-17-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-18-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-18-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-18-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-18-4.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-19-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-19-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-19-3.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-20-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-20-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-20-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-20-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-20-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-20-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-21-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-21-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-21-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-21-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-21-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-22-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-22-9.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-23-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-23-9.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-24-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-24-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-24-3.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-25-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-25-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-25-3.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-26-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-26-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-26-3.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-27-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-27-9.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-28-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-9.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-10.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-11.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-12.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-13.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-14.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-15.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-16.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-17.jpg"></div>
						<div class="slide"><img data-lazy="files/project-28-18.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-29-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-29-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-29-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-29-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-29-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-30-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-30-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-30-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-30-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-30-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-31-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-31-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-31-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-31-4.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-32-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-9.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-10.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-11.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-12.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-13.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-14.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-15.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-16.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-17.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-18.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-19.jpg"></div>
						<div class="slide"><img data-lazy="files/project-32-20.jpg"></div>
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
						<div class="slide"><img data-lazy="files/project-33-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-33-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-33-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-33-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-33-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-33-6.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal34" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="files/project-34-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-34-7.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal35" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="files/project-35-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-35-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-35-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-35-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-35-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade gallery-modal" id="galleryModal36" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="files/project-36-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-6.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-7.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-8.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-9.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-10.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-11.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-12.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-13.jpg"></div>
						<div class="slide"><img data-lazy="files/project-36-14.jpg"></div>
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
						<div class="slide"><img data-lazy="files/num-1-1.jpg"></div>
						<div class="slide"><img data-lazy="files/num-1-2.jpg"></div>
						<div class="slide"><img data-lazy="files/num-1-3.jpg"></div>
						<div class="slide"><img data-lazy="files/num-1-4.jpg"></div>
						<div class="slide"><img data-lazy="files/num-1-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/num-2-1.jpg"></div>
						<div class="slide"><img data-lazy="files/num-2-2.jpg"></div>
						<div class="slide"><img data-lazy="files/num-2-3.jpg"></div>
						<div class="slide"><img data-lazy="files/num-2-4.jpg"></div>
						<div class="slide"><img data-lazy="files/num-2-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/num-3-1.jpg"></div>
						<div class="slide"><img data-lazy="files/num-3-2.jpg"></div>
						<div class="slide"><img data-lazy="files/num-3-3.jpg"></div>
						<div class="slide"><img data-lazy="files/num-3-4.jpg"></div>
						<div class="slide"><img data-lazy="files/num-3-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/num-4-1.jpg"></div>
						<div class="slide"><img data-lazy="files/num-4-2.jpg"></div>
						<div class="slide"><img data-lazy="files/num-4-3.jpg"></div>
						<div class="slide"><img data-lazy="files/num-4-4.jpg"></div>
						<div class="slide"><img data-lazy="files/num-4-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade form-modal" id="callbackModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Заказать звонок</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
						<form id="callbackForm">
							<input type="hidden" name="subject" value="Союз — заявка на обратный звонок">
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

							<div class="form-group">
								<label class="placeholder" for="callback_name">Ваше имя</label>
								<input type="text" name="callback_name" id="callback_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="callback_phone">Телефон</label>
								<input class="input-phone" type="text" name="callback_phone" id="callback_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Отправить</button>
							</div>
							<div class="form-agree">
								<p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных
									согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому
										соглашению</a></p>
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
					<div class="h2">Оставить заявку</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
						<form id="order_2_Form">
							<input type="hidden" name="subject" value="Союз — заявка">
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

							<div class="form-group">
								<label class="placeholder" for="order_2_name">Ваше имя</label>
								<input type="text" name="order_2_name" id="order_2_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="order_2_phone">Телефон</label>
								<input class="input-phone" type="text" name="order_2_phone" id="order_2_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Оставить заявку</button>
							</div>
							<div class="form-agree">
								<p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных
									согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому
										соглашению</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
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
								<label class="placeholder" for="type_order_phone">Телефон</label>
								<input class="input-phone" type="text" name="type_order_phone" id="type_order_phone" required>
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
								<label class="placeholder" for="type_consult_phone">Телефон</label>
								<input class="input-phone" type="text" name="type_consult_phone" id="type_consult_phone" required>
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

	<div class="modal fade gallery-modal" id="centerModal1" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="files/project-4-1.jpg"></div>
						<div class="slide"><img data-lazy="files/project-4-2.jpg"></div>
						<div class="slide"><img data-lazy="files/project-4-3.jpg"></div>
						<div class="slide"><img data-lazy="files/project-4-4.jpg"></div>
						<div class="slide"><img data-lazy="files/project-4-5.jpg"></div>
						<div class="slide"><img data-lazy="files/project-4-6.jpg"></div>
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
						<div class="slide"><img data-lazy="files/center-2-1.jpg"></div>
						<div class="slide"><img data-lazy="files/center-2-2.jpg"></div>
						<div class="slide"><img data-lazy="files/center-2-3.jpg"></div>
						<div class="slide"><img data-lazy="files/center-2-4.jpg"></div>
						<div class="slide"><img data-lazy="files/center-2-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/center-3-1.jpg"></div>
						<div class="slide"><img data-lazy="files/center-3-2.jpg"></div>
						<div class="slide"><img data-lazy="files/center-3-3.jpg"></div>
						<div class="slide"><img data-lazy="files/center-3-4.jpg"></div>
						<div class="slide"><img data-lazy="files/center-3-5.jpg"></div>
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
						<div class="slide"><img data-lazy="files/center-4-1.jpg"></div>
						<div class="slide"><img data-lazy="files/center-4-2.jpg"></div>
						<div class="slide"><img data-lazy="files/center-4-3.jpg"></div>
						<div class="slide"><img data-lazy="files/center-4-4.jpg"></div>
						<div class="slide"><img data-lazy="files/center-4-5.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade gallery-modal" id="standartModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<button class="close" data-dismiss="modal"></button>
				<div class="gallery-slider-wrapper">
					<div class="gallery-slider">
						<div class="slide"><img data-lazy="/images/standart.jpg"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade form-modal success-modal" id="successModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="h2">Заявка принята</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Ответ поступит в ближайшее время!</p>
				</div>
			</div>
		</div>
	</div>

	<script>

		var curLang = "ru";

	</script>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script src="js/main.js?<?php echo rand(); ?>"></script>
</div>

<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2547485445528333');
    fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1"
			 src="https://www.facebook.com/tr?id=2547485445528333&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<script>(function (a, m, o, c, r, m) {
        a[m] = {
            id: "18179",
            hash: "3de0c34ad2d74f71c3cb33a4c5ee5ccbc0370f1bbeb7768fa8e025faf0de6f2f",
            locale: "ru",
            setMeta: function (p) {
                this.params = (this.params || []).concat([p])
            }
        };
        a[o] = a[o] || function () {
            (a[o].q = a[o].q || []).push(arguments)
        };
        var d = a.document, s = d.createElement('script');
        s.async = true;
        s.id = m + '_script';
        s.src = 'https://gso.amocrm.ru/js/button.js?1606986933';
        d.head && d.head.appendChild(s)
    }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));</script>

</body>
</html>
