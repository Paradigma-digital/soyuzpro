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
	<base href="/">
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
									<img src="/images/gb.svg">
								</a>

								<div class="dropdown-menu" aria-labelledby="langMenuLink">
									<a class="dropdown-item" href="/"><img src="/images/ru.svg"> Рус</a>
									<a class="dropdown-item" href="/es/"><img src="/images/es.svg"> Esp</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 header-col-r">
						<div class="header-contacts">
							<div class="header-soclinks-wrapper">
								<div class="header-soclinks">
									<a class="soclink soclink-youtube"
										 href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber" target="_blank"></a>
								</div>
							</div>
							<div class="header-contacts-l">
								<div class="header-phone"><a href="tel: 8 800 234-99-00">8 800 234-99-00</a></div>
								<div class="header-button"><a class="btn btn-callback" href="#" data-toggle="modal" data-target="#callbackModal">Order a callback</a></div>
							</div>
							<div class="header-contacts-r"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#orderModal">Send a request</a></div>
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
										<li><a href="/en/#about">Our company</a></li>
										<li><a href="/en/#services">Services</a></li>
										<li><a href="/en/#types">Types of scaffolding</a></li>
										<li><a href="/en/#projects">Projects</a></li>
										<li><a href="/en/#contacts">Contacts</a></li>
										<li>
											<div class="lang-selector">
												<a href="/">Рус</a>
												<a href="/en/" class="active">Eng</a>
												<a href="/es/" >Esp</a>
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
							<div class="h1">Manufacture, sell and rent of scaffolding</div>
							<div class="features-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">3x-times faster assembling</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Maximum operating safety on height</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="features-tmb">
											<div class="features-tmb-pic"><img src="/images/features-check.png"></div>
											<div class="features-tmb-descr">
												<div class="h3">Manufacture, sell and rent of scaffolding around the globe</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><a name="about"></a>
		<div class="section section-form section-meeting section-meeting-new">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-sm-6 order-sm-2">
							<div class="order-form">
								<div class="h2">About "SOYUZ" scaffolding factory in&nbsp;2&nbsp;minutes</div>
								<p>Watch the video to&nbsp;get to&nbsp;know our company better! It&nbsp;does not take a&nbsp;lot of&nbsp;time.
								</p>
								<div class="meeting-soclinks-wrapper">
									<div class="h3">Join&nbsp;us in&nbsp;social networks</div>
									<div class="meeting-soclinks">
										<div class="meeting-soclinks-item">
											<a href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber" target="_blank" class="meeting-soclink">
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
							<div class="section-pic"><a href="https://www.youtube.com/embed/3rjD0E4IZiM" class="video fancybox-video"> <!-- href="https://www.youtube.com/embed/XNFm1u6JgvM?autoplay=1" -->
									<div class="video-pic">
										<div class="play-button"></div><img src="/files/video-pic-new.jpg">
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section section-about">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">01</div>
						<div class="h2">Our company in figures</div>
					</div>
					<div class="numbers-list">
						<div class="row">
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal1">
									<div class="numbers-tmb-num"><span>1 000</span> tons</div>
									<div class="numbers-tmb-descr">
										<p>of scaffolding in stock</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="../files/num-pic-1.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal2">
									<div class="numbers-tmb-num"><span>13 000</span> m&sup2;</div>
									<div class="numbers-tmb-descr">
										<p>of production facilities</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="../files/num-pic-2.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal3">
									<div class="numbers-tmb-num"><span>100 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>transferred structures</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="../files/num-pic-3.jpg">
									</div>
								</div>
							</div>
							<div class="col-6 col-lg-3">
								<div class="numbers-tmb" data-toggle="modal" data-target="#numModal4">
									<div class="numbers-tmb-num"><span>1 000 000 +</span></div>
									<div class="numbers-tmb-descr">
										<p>assembled structures, m&sup2;</p>
									</div>
									<div class="numbers-tmb-pic">
										<img src="../files/num-pic-4.jpg">
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
						<div class="h2">Types of scaffolding</div>
					</div>

					<div class="custom-slider-wrapper">
						<div class="custom-slider types-slider">
							<!-- НАЧАЛО-->
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-20.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-20-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Cantilever scaffolding</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 12--><a class="type-tmb" href="/load-en/type-modal-12.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-12-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Bird-cage</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-25.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-25-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Circular scaffolding</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-22.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-22-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Bridge crossing</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-21.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-21-newest.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Dockside scaffolding</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 14--><a class="type-tmb" href="/load-en/type-modal-14.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-14-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Slanting-surface</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 9--><a class="type-tmb" href="/load-en/type-modal-9.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-9-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Cantilever-suspended</div>
									</div></a>
							</div>


							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-23.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-23-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Cantilever supported</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-24.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-24-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Cantilever scaffolding</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-26.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-26-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Podiums</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-27.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-27-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Self-supporting tower</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-28.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-28-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Flyovers for utilities</div>
									</div></a>
							</div>



							<div class="slide">
								<!-- 1--><a class="type-tmb" href="/load-en/type-modal-1.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-1-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Compact flight stairs</div>
									</div></a>
							</div>



							<div class="slide">
								<!-- 2--><a class="type-tmb" href="/load-en/type-modal-2.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-2-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Flight stair towers for public events</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 3--><a class="type-tmb" href="/load-en/type-modal-3.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-3-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Ultra heavy-duty</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 4--><a class="type-tmb" href="/load-en/type-modal-4.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-4-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Heavy-duty scaffolding</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 6--><a class="type-tmb" href="/load-en/type-modal-6.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-6-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Mobile wheeled scaffolding</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 7--><a class="type-tmb" href="/load-en/type-modal-7.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-7-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Self-supporting facade</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 8--><a class="type-tmb" href="/load-en/type-modal-8.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-8-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Utility racks</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 5--><a class="type-tmb" href="/load-en/type-modal-5.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-5-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Facade scaffolding</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 10--><a class="type-tmb" href="/load-en/type-modal-10.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-10-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Bridge crossing</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 11--><a class="type-tmb" href="/load-en/type-modal-11.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-11-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Mobile craned</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 13--><a class="type-tmb" href="/load-en/type-modal-13.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-13-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Inside scaffolding</div>
									</div></a>
							</div>

							<div class="slide">
								<!-- 15--><a class="type-tmb" href="/load-en/type-modal-15.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-15-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Scene</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 16--><a class="type-tmb" href="/load-en/type-modal-16.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-16-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Advertising structures</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 17--><a class="type-tmb" href="/load-en/type-modal-17.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-17-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Light and sound</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 18--><a class="type-tmb" href="/load-en/type-modal-18.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-18-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Athletic facilities</div>
									</div></a>
							</div>
							<div class="slide">
								<!-- 19--><a class="type-tmb" href="/load-en/type-modal-19.html" data-toggle="modal" data-target="#typeModal">
									<div class="type-tmb-pic"><img src="/files/types/type-19-new.png"></div>
									<div class="type-tmb-descr">
										<div class="h3">Stand</div>
									</div></a>
							</div>
							<!-- КОНЕЦ-->
						</div>
					</div>

					<?/*
          <div class="custom-slider-wrapper">
            <div class="custom-slider types-slider">
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-1.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Facade scaffolding</div>
                    <p>Traditional scaffolding for facade works.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-2.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Flight stairs and access towers</div>
                    <p>For people’s evacuation, for example,  during an emergency case or after hours.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-3.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Heavy-duty scaffolds for formworks</div>
                    <p>For solid floors and arcs of any kind, as well as bridges and tunnels.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-4.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Console type scaffolding</div>
                    <p>For workplace arrangement off the main structure.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-5.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Suspended scaffolds</div>
                    <p>For workplace arrangement at high altitude.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-6.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Bridge crossing</div>
                    <p>For pedestrian crossing arrangement</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-7.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Advertising structures</div>
                    <p>For advertising projects arrangement</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-8.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Сверхмощные опоры</div>
                    <p>Для возможности опоры тяжелых конструкций</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

					*/?>
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
								<div class="h2">Main features</div>
							</div>
							<div class="specs-list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-1.png"></div>
											<div class="specs-tmb">
												<div class="h3">All the elements are labeled</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-2.png"></div>
											<div class="specs-tmb">
												<div class="h3">Supplied in pallets</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-4">
										<div class="specs-tmb">
											<div class="specs-tmb-pic"><img src="/images/spec-3-en.png"></div>
											<div class="specs-tmb">
												<div class="h3">Maximum element weight</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="section-pic"><img src="/files/specs-en.jpg"></div>
						<div class="specs-caption">
							* Decks bearing capacity depends on&nbsp;span length
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
						<div class="h2">Video manuals</div>
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
						<div class="h2">Training centres</div>
					</div>
					<div class="centers-list">
						<div class="row">
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal1">
									<div class="center-tmb-pic">
										<img src="/files/center-1-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Training centre<br>Mytishchi</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal2">
									<div class="center-tmb-pic">
										<img src="/files/center-2-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Training centre<br>Yekaterinburg</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal3">
									<div class="center-tmb-pic">
										<img src="/files/center-3-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Training centre<br>Blagoveshchensk</span>
									</span>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="center-tmb" data-toggle="modal" data-target="#centerModal4">
									<div class="center-tmb-pic">
										<img src="/files/center-4-cover.jpg">
									</div>
									<span class="center-tmb-descr">
										<span class="h3">Training centre<br>St.&nbsp;Petersburg</span>
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
								<div class="h2">Services</div>
							</div>
							<div class="section-lead">
								<p>“SOYUZ” company is the first and leading manufacturer of scaffolding in Russia</p>
							</div>
							<div class="section-services-logo"><img src="/images/services-logo-en.png"></div>
						</div>
						<div class="col-12 col-sm-12 col-md-8 col-lg-9">
							<div class="services-list">
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Selling</div>
										<p>Get your “SOYUZ” scaffolding set – Russia’s #1</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(/files/serv-new-1.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Renting</div>
										<p>Use our scaffolding for a needed period and for a reasonable price</p>
									</div>
									<div class="service-tmb-pic" style="background-image:url(/files/serv-new-2.jpg);"></div>
								</div>
								<div class="service-tmb">
									<div class="service-tmb-descr">
										<div class="h3">Installation</div>
										<p>Commit managing functions and hazardous works fulfillment to the professionals</p>
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
								<div class="h2">Order a presentation</div>
								<p>Please, leave your contact data below and we’ll contact you back.</p>
								<form id="presentationForm">
									<div class="row">
										<div class="col-12 col-lg-6 col-xl-7">
											<div class="form-group">
												<label class="placeholder" for="presentation_name">Name</label>
												<input type="text" name="presentation_name" id="presentation_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="presentation_phone>"Phone number</label>
												<input class="input-phone-int" type="text" name="presentation_phone" id="presentation_phone" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-7">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Send a request</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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

		<!--





    <div class="section section-form section-meeting">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-12 col-sm-6 order-sm-2">
              <div class="order-form">
                <div class="h2">Order a presentation</div>
                <p>Please, leave your contact data below and we’ll contact you back.</p>
                <form id="meetingForm">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_name">Name</label>
                        <input type="text" name="meeting_name" id="meeting_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_phone>"Phone number</label>
                        <input class="input-phone-int" type="text" name="meeting_phone" id="meeting_phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-8">
                      <div class="form-footer">
                        <button class="btn btn-1" type="submit">Make an appointment now</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-agree">
                    <p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-6 order-sm-1">
              <div class="section-pic"><a href="https://www.youtube.com/embed/3rjD0E4IZiM" class="video fancybox-video">
                <div class="video-pic">
                  <div class="play-button"></div><img src="/files/video-pic.png">
                </div>
                <div class="video-caption">
                  <div class="h3">About “SOYUZ” scaffolding factory in 3 minutes</div>
                </div></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    -->

		<div class="section section-pros-2">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">07</div>
						<div class="h2">Benefits of our products</div>
						<div class="section-sub-ttl">
							<p>SmartScaff scaffolding is&nbsp;thought out to&nbsp;the last detail, that&rsquo;s exactly why it&nbsp;is&nbsp;assembled quickly and safely.</p>
						</div>
					</div>
					<div class="scaff-list">
						<div class="row">
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-1.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Self-cleaning thread with spindle overwind protection</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-2.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Automatic and arbitrary angles of&nbsp;element connection</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-3.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>One tube size &oslash;48&nbsp;mm allows connecting the elements with each other in&nbsp;any place by&nbsp;the same-type couples</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-4.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Color navigation for every size</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-5.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Divisible and interchangeable metric dimensions along the element axes</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-6.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>High bearing capacity of&nbsp;the working platform of&nbsp;scaffolding (up&nbsp;to&nbsp;600&nbsp;kg/m&sup2;)</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-7.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>Compatibility with international manufacturers</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3">
								<div class="scaff-tmb">
									<div class="scaff-tmb-pic"><img src="files/scaff-8.jpg"></div>
									<div class="scaff-tmb-descr">
										<p>No&nbsp;wooden scaffolding elements</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a name="projects"></a>
		<div class="section section-projects">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">08</div>
						<div class="h2">Projects</div>
					</div>
					<div class="projects-list">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal14">
									<div class="project-tmb-pic" style="background-image:url(/files/project-14-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">01</div>
										<div class="project-tmb-cont">
											<div class="h3">"SKOLKOVO Park"</div>
											<p>Moscow</p>
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
											<div class="h3">"Zavod MK" LLC</div>
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
											<div class="h3">The Lakhta Center media facade</div>
											<p>St. Petersburg</p>
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
											<div class="h3">The Lakhta Center</div>
											<p>St. Petersburg</p>
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
											<div class="h3">Training centre</div>
											<p>Mytishchi, the Moscow Region</p>
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
											<div class="h3">Segezha Pulp and Paper mill</div>
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
											<div class="h3">Events</div>
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
											<div class="h3">Konkovo Market</div>
											<p>Moscow</p>
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
											<div class="h3">JSC "Inter RAO – Elektrogeneratsiya"</div>
											<p>"Kaliningradskaya HPP-2", Kaliningrad</p>
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
											<div class="h3">Alandr industrial safety center</div>
											<p>Moscow</p>
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
											<div class="h3">Mining and concentrating plant</div>
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
											<div class="h3">Pulp and Paper mill</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal13">
									<div class="project-tmb-pic" style="background-image:url(/files/project-13-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">12</div>
										<div class="project-tmb-cont">
											<div class="h3">Oil refinery plant</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal15">
									<div class="project-tmb-pic" style="background-image:url(/files/project-15-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">13</div>
										<div class="project-tmb-cont">
											<div class="h3">Gas processing plant</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal16">
									<div class="project-tmb-pic" style="background-image:url(/files/project-16-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">14</div>
										<div class="project-tmb-cont">
											<div class="h3">Cement plant</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal17">
									<div class="project-tmb-pic" style="background-image:url(/files/project-17-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">15</div>
										<div class="project-tmb-cont">
											<div class="h3">Oil refinery plant</div>
											<p>Stop repairs</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal18">
									<div class="project-tmb-pic" style="background-image:url(/files/project-18-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">16</div>
										<div class="project-tmb-cont">
											<div class="h3">Oil refinery plant</div>
											<p>Technological work</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal19">
									<div class="project-tmb-pic" style="background-image:url(/files/project-19-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">17</div>
										<div class="project-tmb-cont">
											<div class="h3">Pulp and Paper mill</div>
											<p>Installation of process pipelines</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal20">
									<div class="project-tmb-pic" style="background-image:url(/files/project-20-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">18</div>
										<div class="project-tmb-cont">
											<div class="h3">Shipbuilding plant</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal21">
									<div class="project-tmb-pic" style="background-image:url(/files/project-21-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">19</div>
										<div class="project-tmb-cont">
											<div class="h3">Petrochemical plant</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal22">
									<div class="project-tmb-pic" style="background-image:url(/files/project-22-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">20</div>
										<div class="project-tmb-cont">
											<div class="h3">Scaffold towers</div>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal23">
									<div class="project-tmb-pic" style="background-image:url(/files/project-23-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">21</div>
										<div class="project-tmb-cont">
											<div class="h3">Chemical combine</div>
											<p>Circular scaffolding</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-13 col-sm-6">
								<div class="project-tmb" data-toggle="modal" data-target="#galleryModal24">
									<div class="project-tmb-pic" style="background-image:url(/files/project-24-cover.jpg);"></div>
									<div class="project-tmb-descr">
										<div class="project-tmb-num">22</div>
										<div class="project-tmb-cont">
											<div class="h3">Chemical plant</div>
											<p>Working in cramped conditions</p>
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
											<div class="h3">Suspended scaffolding</div>
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
											<div class="h3">Oil refinery plant</div>
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
											<div class="h3">Chemical combine</div>
											<p>Stop repairs, the second tank</p>
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
											<div class="h3">Oil refinery plant</div>
											<p>Filling the second stage</p>
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
											<div class="h3">Oil refinery plant</div>
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
											<div class="h3">Oil refinery plant</div>
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
											<div class="h3">Circular scaffolding</div>
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
											<div class="h3">Shipbuilding</div>
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
											<div class="h3">Oil refinery plant</div>
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
								<div class="h2">Our values</div>
							</div>
							<div class="pros-list pros-list-alt">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-4.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Safety</div>
											<p>0 accidents while working on height</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-5.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Efficiency</div>
											<p>3x-times faster assembly speed and performance of our scaffolding</p>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-6.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Trust</div>
											<p>“SOYUZ” company – your reliable partner for scaffolding tasks</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-quality">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">10</div>
						<div class="h2">Our own production facilities in&nbsp;Izhevsk</div>
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
									<p>Total area of&nbsp;production facilities is&nbsp;13,000&nbsp;m&sup2;, including:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Highly precise cast factory (steel works)</div>
									</li>
									<li>
										<div class="cont">Automatic welding stations</div>
									</li>
									<li>
										<div class="cont">Roll moulding lines</div>
									</li>
									<li>
										<div class="cont">Moulding units</div>
									</li>
									<li>
										<div class="cont">Laser-beam cutting units</div>
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
									<p>Our own lab and QC Department:</p>
								</div>
								<ul class="quality-list">
									<li>
										<div class="cont">Chemical analysis, metal structure inspection, inspection of&nbsp;physical and mechanical properties of&nbsp;steel</div>
									</li>
									<li>
										<div class="cont">Radiographic analysis of&nbsp;die cast blocks for cavities</div>
									</li>
									<li>
										<div class="cont">Visual inspection and dimensional check</div>
									</li>
									<li>
										<div class="cont">Practical strength test of&nbsp;scaffolding samples</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-pros">
			<div class="section-pic-r" style="background-image:url(/files/pros-pic.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8 col-lg-6">
						<div class="section-content">
							<div class="section-header">
								<div class="section-num">11</div>
								<div class="h2">ZSL “SOYUZ” company&nbsp;is</div>
							</div>
							<div class="pros-list">
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-1.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">International level and high quality scaffolding</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-2.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Our own production base</div>
										</div>
									</div>
								</div>
								<div class="pros-tmb">
									<div class="pros-tmb-pic"><img src="/images/pros-3.png"></div>
									<div class="pros-tmb-descr">
										<div class="cont">
											<div class="h3">Always have main elements in stock</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-facts">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">12</div>
						<div class="h2">FACTS ABOUT ZSL&nbsp;“SOYUZ”</div>
						<div class="section-sub-ttl">
							<p>Why our scaffolding is&nbsp;quick-to-assemble and safe</p>
						</div>
					</div>
					<div class="facts-list">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Track record since 2004</div>
										<p>Supplies to&nbsp;13&nbsp;countries all over the world</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Combined expertise of&nbsp;Top 4&nbsp;globe producers</div>
										<p>&laquo;SOYUZ&raquo; scaffolding combines benefits of&nbsp;four global producers and hands-on experience of&nbsp;scaffolding fitters</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Full-cycle production</div>
										<p>Product quality control from molten metal to&nbsp;finished scaffolding at&nbsp;your facility</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">20-year lifespan</div>
										<p>All elements are protected against corrosion by&nbsp;hot zinc coating of&nbsp;60-80 micron in&nbsp;thickness</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Special steel grades for tubes and die cast blocks</div>
										<p>High-strength steel grades, operating temperature of &minus;70 to&nbsp;+425&nbsp;&deg;С</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="fact-tmb">
									<div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
									<div class="fact-tmb-descr">
										<div class="h3">Scaffolding elements are tested</div>
										<p>Bearing elements of&nbsp;scaffolding and wedge-joint connections are tested using actual samples in&nbsp;a&nbsp;dedicated test enter</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-clients">
			<div class="section-clients-pic" style="background-image: url(/files/section-clients-pic.jpg)"></div>
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="section-header">
								<div class="section-num">13</div>
								<div class="h2">Our clients</div>
								<div class="section-sub-ttl">
									<p>The world's largest companies:</p>
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

		<div class="section section-cert">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">14</div>
						<div class="h2">Certificates</div>
					</div>
					<div class="cert-list">
						<div class="row">
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-1.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-1-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>GOST R 9001-2015 <br> (ISO 9001:2015)</p>
									</div></a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-2.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-2-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificate of&nbsp;Conformity to&nbsp;GOST</p>
									</div></a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-3.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-3-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Letter of&nbsp;EMERCOM of&nbsp;Russia</p>
									</div></a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-4.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-4-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificate of&nbsp;Origin ST-1</p>
									</div></a></div>
							<div class="col-6 col-md-20p"><a class="cert-tmb fancybox" href="files/cert-5.jpg" rel="cert_gal">
									<div class="cert-tmb-pic"><img src="files/cert-5-tmb.jpg"></div>
									<div class="cert-tmb-descr">
										<p>Certificate of&nbsp;Conformity</p>
									</div></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section section-team">
			<div class="container">
				<div class="section-content">
					<div class="section-header">
						<div class="section-num">15</div>
						<div class="h2">Our team</div>
					</div>
					<div class="team-wrapper">
						<div class="row">
							<div class="col-xs-12 col-md-4 col-lg-3">
								<div class="team-descr">
									<div class="team-descr-item">
										<div class="h3"><span>18</span> years</div>
										<p>of work experience</p>
									</div>
									<div class="team-descr-item">
										<div class="h3"><span>202</span></div>
										<p>employees<br>(as of 01.01.2022)</p>
									</div>
									<!-- <div class="team-descr-item">
										<div class="h3"><span>1 350 +</span></div>
										<p>installers</p>
									</div> -->
									<div class="team-descr-item">
										<div class="h3"><span>5</span></div>
										<p>training centers</p>
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
													<div class="team-tmb-post">Chief<br>executive officer</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/2.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander A. Zazygin</div>
													<div class="team-tmb-post">Chief<br>technology officer</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(../files/staff/7-1.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Stanislav R. Gordeev</div>
													<div class="team-tmb-post">Commercial</br>director</div>
												</div>
											</div>
										</div>
										<!-- <div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/3.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Irek D. Dautov</div>
													<div class="team-tmb-post">Deputy chief operations officer</div>
												</div>
											</div>
										</div> -->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/4.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Alexander I. Popov</div>
													<div class="team-tmb-post">Сhief<br>financial officer</div>
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
													<div class="team-tmb-post">Chief<br>structural engineer</div>
												</div>
											</div>
										</div>

										
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(../files/staff/7.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Dmitriy N. Sidorenko</div>
													<div class="team-tmb-post">Project<br>manager</div>
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
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>

										*/?>

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/8.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Denis A. Myagkov</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>


<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(/files/staff/11.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Igor N. Veretennikov</div>-->
<!--													<div class="team-tmb-post">Project<br>manager</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/19.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Nikita D. Utrobin</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/20.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Nikita A. Zaletov</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/24.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Rustam R. Nuriakhmetov</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>
<!--										<div class="slide">-->
<!--											<div class="team-tmb">-->
<!--												<div class="team-tmb-pic" style="background-image:url(/files/staff/32.jpg);"></div>-->
<!--												<div class="team-tmb-descr">-->
<!--													<div class="team-tmb-name">Anton N. Totoldin</div>-->
<!--													<div class="team-tmb-post">Project<br>manager</div>-->
<!--												</div>-->
<!--											</div>-->
<!--										</div>-->
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/33.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Denis A. Cherepanov</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/34.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Dmitry V. Potekhin</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>

										<?/*

										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/28.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Grigoriy V.Chumakov</div>
													<div class="team-tmb-post">Project<br>manager</div>
												</div>
											</div>
										</div>



										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/29.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Vyacheslav V.Lavrentyev</div>
													<div class="team-tmb-post">Project<br>manager</div>
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
													<div class="team-tmb-post">Product development manager</div>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="team-tmb">
												<div class="team-tmb-pic" style="background-image:url(/files/staff/16.jpg);"></div>
												<div class="team-tmb-descr">
													<div class="team-tmb-name">Andrey L. Smorchkov</div>
													<div class="team-tmb-post">Project<br>structural engineer</div>
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
													<div class="team-tmb-post">Production and technical department lead engineer</div>
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
								<div class="h2">Order a test sample</div>
								<p>Order a scaffolding sample for a test assembly and review</p>
								<form id="sampleForm">
									<div class="row">
										<div class="col-12 col-lg-6 col-xl-7">
											<div class="form-group">
												<label class="placeholder" for="sample_name">Name</label>
												<input type="text" name="sample_name" id="sample_name" required>
											</div>
										</div>
										<div class="col-12 col-lg-6 col-xl-5">
											<div class="form-group">
												<label class="placeholder" for="sample_phone>"Phone number</label>
												<input class="input-phone-int" type="text" name="sample_phone" id="sample_phone" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-lg-8">
											<div class="form-footer">
												<button class="btn btn-1" type="submit">Order our representative</button>
											</div>
										</div>
									</div>
									<div class="form-agree">
										<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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
		</div><a name="contacts"></a>
		<div class="section section-contacts">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6">
						<div class="contacts-descr">
							<div class="h2">Contacts</div>
							<div class="h5">Toll free calls within Russia:</div>
							<div class="contacts-phone-wrapper"><a class="contacts-phone" href="tel:8 800 234-99-00">8 800 234-99-00</a>
								<div class="contacts-messengers"><a href="https://wa.me/88002349900"><img src="/images/ico-whatsapp.png"></a><a href="tg://resolve?domain=88002349900"><img src="/images/ico-telegram.png"></a><a href="viber://chat?number=88002349900&quot;"><img src="/images/ico-viber.png"></a></div>
							</div>
							<div class="h5">E-mail:</div>
							<p><a href="mailto:info@soyuz.pro">info@soyuz.pro</a></p>
							<div class="h5">Address:</div>
							<p>Votkinskoe shosse, 33a, Izhevsk, 426039</p>
							<p><a href="tel:+7 (3412) 44-50-33" class="contacts-phone">+7 (3412) 44-50-33</a></p>
							<div class="soclinks">
								<?/*<a class="soclink soclink-vk"
                  href="https://vk.com/soyuzscaffolding" target="_blank"></a>*/?>
								<a class="soclink soclink-youtube"
									 href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber" target="_blank"></a>
							</div>

							<!--
							<div class="soclinks"><a class="soclink soclink-vk" href="https://vk.com/soyzzcl" target="_blank"></a><a class="soclink soclink-fb" href="https://www.facebook.com/groups/2137546076555525/" target="_blank"></a><a class="soclink soclink-ok" href="https://ok.ru/group/55021903872223" target="_blank"></a><a class="soclink soclink-instagram" href="https://www.instagram.com/soyuzscaffolding/" target="_blank"></a></div>

							-->

							<div class="copyright">
								<p>&copy; “Soyuz” scaffolding factory 2019. All rights reserved.</p>
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
					<div class="h2">Order a callback</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Please, leave your contact data below and we’ll contact you back.</p>
						<form id="callbackForm">
							<div class="form-group">
								<label class="placeholder" for="callback_name">Name</label>
								<input type="text" name="callback_name" id="callback_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="callback_phone>"Phone number</label>
								<input class="input-phone-int" type="text" name="callback_phone" id="callback_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Send</button>
							</div>
							<div class="form-agree">
								<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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
					<div class="h2">Send a request</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Please, leave your contact data below and we’ll contact you back.</p>
						<form id="order_2_Form">
							<div class="form-group">
								<label class="placeholder" for="order_2_name">Name</label>
								<input type="text" name="order_2_name" id="order_2_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="order_2_phone>"Phone number</label>
								<input class="input-phone-int" type="text" name="order_2_phone" id="order_2_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Send a request</button>
							</div>
							<div class="form-agree">
								<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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
					<div class="h2">Order scaffolding</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Please, leave your contact data below and we’ll contact you back.</p>
						<form id="typeOrderForm">
							<input type="hidden" name="type_order_item" id="type_order_item">
							<div class="form-group">
								<label class="placeholder" for="type_order_name">Name</label>
								<input type="text" name="type_order_name" id="type_order_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="type_order_phone>"Phone number</label>
								<input class="input-phone-int" type="text" name="type_order_phone" id="type_order_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Оставить заявку</button>
							</div>
							<div class="form-agree">
								<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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
					<div class="h2">Get advice</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<p>Please, leave your contact data below and we’ll contact you back.</p>
						<form id="typeConsultForm">
							<input type="hidden" name="type_consult_item" id="type_consult_item">
							<div class="form-group">
								<label class="placeholder" for="type_consult_name">Name</label>
								<input type="text" name="type_consult_name" id="type_consult_name" required>
							</div>
							<div class="form-group">
								<label class="placeholder" for="type_consult_phone>"Phone number</label>
								<input class="input-phone-int" type="text" name="type_consult_phone" id="type_consult_phone" required>
							</div>
							<div class="form-footer">
								<button class="btn btn-1" type="submit">Оставить заявку</button>
							</div>
							<div class="form-agree">
								<p>By pressing “Send” button you agree of using your personal data according to <a href="/Personal Data Processing Policy - EN.pdf" target="_blank">User agreement</a></p>
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

		var curLang = "en";

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
