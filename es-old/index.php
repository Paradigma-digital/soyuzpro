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
      <div class="section-pic-r" style="background-image:url(/files/179.jpg);"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="section-content">
              <div class="h1">Fabricacion, venta y alquiler de andamios</div>
              <div class="features-list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="features-tmb">
                      <div class="features-tmb-pic"><img src="/images/features-check.png"></div>
                      <div class="features-tmb-descr">
                        <div class="h3">Ensamblaje 3 veces mas rapido</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="features-tmb">
                      <div class="features-tmb-pic"><img src="/images/features-check.png"></div>
                      <div class="features-tmb-descr">
                        <div class="h3">Maxima seguridad de trabajos en altura</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="features-tmb">
                      <div class="features-tmb-pic"><img src="/images/features-check.png"></div>
                      <div class="features-tmb-descr">
                        <div class="h3">Fabricacion, venta y alquiler por todo el mundo</div>
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
    <div class="section section-about">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">01</div>
            <div class="h2">Nuestra empresa en cifras</div>
          </div>
          <div class="numbers-list">
            <div class="row">
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>700</span> toneladas</div>
                  <div class="numbers-tmb-descr">
                    <p>de andamios en stock disponible</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>13 000</span> m&sup2;</div>
                  <div class="numbers-tmb-descr">
                    <p>de instalaciones de produccion</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>100 000 +</span></div>
                  <div class="numbers-tmb-descr">
                    <p>de estructuras entregadas</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>1 000 000 +</span></div>
                  <div class="numbers-tmb-descr">
                    <p>estructuras ensambladas, m&sup2;</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><a name="services"></a>
    <div class="section section-services">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
              <div class="section-header">
                <div class="section-num">02</div>
                <div class="h2">Servicios</div>
              </div>
              <div class="section-lead">
                <p>Soyuz es el primer y principal fabricante de andamios en Rusia</p>
              </div>
              <div class="section-services-logo"><img src="/images/services-logo-en.png"></div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-9">
              <div class="services-list">
                <div class="service-tmb">
                  <div class="service-tmb-descr">
                    <div class="h3">Venta</div>
                    <p>Reciba su modelo de la gama de andamios Soyuz, fabricante numero 1 en Rusia</p>
                  </div>
                  <div class="service-tmb-pic" style="background-image:url(/files/035.jpg);"></div>
                </div>
                <div class="service-tmb">
                  <div class="service-tmb-descr">
                    <div class="h3">Alquiler</div>
                    <p>A su disposicion por un periodo necesario y a un precio razonable</p>
                  </div>
                  <div class="service-tmb-pic" style="background-image:url(/files/170.jpg);"></div>
                </div>
                <div class="service-tmb">
                  <div class="service-tmb-descr">
                    <div class="h3">Montaje</div>
                    <p>Encargue la gestion y realizacion de trabajos peligrosos a los profesionales</p>
                  </div>
                  <div class="service-tmb-pic" style="background-image:url(/files/lesa6.jpg);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><a name="types"></a>
    <div class="section section-types">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">03</div>
            <div class="h2">Tipos de andamios</div>
          </div>
          <div class="custom-slider-wrapper">
            <div class="custom-slider types-slider">
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-1.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Andamios de fachada</div>
                    <p>Modulo clasico para realizar trabajos en fachadas</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-2.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Tramos de escalera y torres de acceso</div>
                    <p>Para bajar en situaciones de emergencia o al terminar la jornada laboral.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-3.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Andamios resistentes para encofrado</div>
                    <p>Para pisos monoliticos y arcos de cualquier forma, asi como para puentes y tuneles.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-4.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Andamio en voladizo</div>
                    <p>Para realizar tareas en un punto de obra fuera de la estructura principal.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-5.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Andamio suspendido</div>
                    <p>Para acomodar lugar de trabajo a gran altura.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-6.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Puentes peatonales</div>
                    <p>Para facilitar el paso de peatones.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-7.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Vallas publicitarias</div>
                    <p>Para proyectos de anuncios publicitarios.</p>
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="/files/type-8.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Apoyos extrafuertes</div>
                    <p>Para dar soporte a estructuras pesadas.</p>
                  </div>
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
                <div class="h2">Solicitar presentacion</div>
                <p>Por favor, deje sus contactos y le proporcionaremos la informacion mas detallada.</p>
                <form id="presentationForm">
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
                        <input class="input-phone-int" type="text" name="presentation_phone" id="presentation_phone" required>
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
                    <p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
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
    <div class="section section-pros">
      <div class="section-pic-r" style="background-image:url(/files/pros-pic.jpg);"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="section-content">
              <div class="section-header">
                <div class="section-num">04</div>
                <div class="h2">Nuestras ventajas</div>
              </div>
              <div class="pros-list">
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-1.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Nivel internacional y alta calidad de los andamios</div>
                    </div>
                  </div>
                </div>
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-2.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Planta de produccion propia</div>
                    </div>
                  </div>
                </div>
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-3.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Elementos principales siempre en stock</div>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="section-num">05</div>
                <div class="h2">Caracteristicas principales</div>
              </div>
              <div class="specs-list">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="specs-tmb">
                      <div class="specs-tmb-pic"><img src="/images/spec-1.png"></div>
                      <div class="specs-tmb">
                        <div class="h3">Todos los elementos etiquetados</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="specs-tmb">
                      <div class="specs-tmb-pic"><img src="/images/spec-2.png"></div>
                      <div class="specs-tmb">
                        <div class="h3">Suministrado en palets</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="specs-tmb">
                      <div class="specs-tmb-pic"><img src="/images/spec-3-en.png"></div>
                      <div class="specs-tmb">
                        <div class="h3">Peso maximo del elemento</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="section-pic"><img src="/files/specs-en.jpg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-form section-meeting">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-12 col-sm-6 order-sm-2">
              <div class="order-form">
                <div class="h2">Solicitar presentacion</div>
                <p>Por favor, deje sus contactos y le proporcionaremos la informacion mas detallada.</p>
                <form id="meetingForm">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_name">Su nombre</label>
                        <input type="text" name="meeting_name" id="meeting_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_phone">Telefono</label>
                        <input class="input-phone-int" type="text" name="meeting_phone" id="meeting_phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-8">
                      <div class="form-footer">
                        <button class="btn btn-1" type="submit">Concierte su cita ahora</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-agree">
                    <p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-6 order-sm-1">
              <div class="section-pic"><a href="https://www.youtube.com/embed/3rjD0E4IZiM" class="video fancybox-video"> <!-- href="https://www.youtube.com/embed/XNFm1u6JgvM?autoplay=1" -->
                <div class="video-pic">
                  <div class="play-button"></div><img src="/files/video-pic.png">
                </div>
                <div class="video-caption">
                  <div class="h3">Todo sobre la fabrica de andamios Soyuz en 3 minutos</div>
                </div></a></div>
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
                <div class="section-num">06</div>
                <div class="h2">Nuestros valores</div>
              </div>
              <div class="pros-list pros-list-alt">
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-4.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Seguridad</div>
                      <p>Para prevenir accidentes durante los trabajos en altura</p>
                    </div>
                  </div>
                </div>
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-5.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Eficacia</div>
                      <p>3 veces mas rapida la velocidad del ensamblaje y versatilidad</p>
                    </div>
                  </div>
                </div>
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="/images/pros-6.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Confianza</div>
                      <p>La empresa Soyuz es su socio confiable para brindar soluciones ante su necesidad de andamios</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-team">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">07</div>
            <div class="h2">Nuestro equipo</div>
          </div>
          <div class="team-wrapper">
            <div class="row">
              <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="team-descr">
                  <div class="team-descr-item">
                    <div class="h3"><span>9</span> years</div>
                    <p>de experiencia</p>
                  </div>
                  <div class="team-descr-item">
                    <div class="h3"><span>1 000 +</span></div>
                    <p>trabajadores</p>
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
                          <div class="team-tmb-post">Director de tecnologia</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/3.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Irek D. Dautov</div>
                          <div class="team-tmb-post">Subdirector de produccion</div>
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
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/7.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Stanislav V. Mineakhmetov</div>
                          <div class="team-tmb-post">Agente comercial</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/8.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Denis A. Myagkov</div>
                          <div class="team-tmb-post">Agente comercial</div>
                        </div>
                      </div>
                    </div>

                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/11.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Igor N. Veretennikov</div>
                          <div class="team-tmb-post">Agente comercial</div>
                        </div>
                      </div>
                    </div>


                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/14.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Vitaliy V. Limonov</div>
                          <div class="team-tmb-post">Proyectista jefe</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/15.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Grigoriy A. Obukhov</div>
                          <div class="team-tmb-post">Jefe del Departamento de diseno</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/16.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Andrey L. Smorchkov</div>
                          <div class="team-tmb-post">Ingeniero Jefe de proyectos</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(/files/staff/17.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Alexander S. Lukashevskiy</div>
                          <div class="team-tmb-post">Ingeniero de produccion y tecnologia</div>
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
    </div><a name="projects"></a>
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
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal1">
                  <div class="project-tmb-pic" style="background-image:url(/files/193.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">01</div>
                    <div class="project-tmb-cont">
                      <div class="h3">“Zavod MK” LLC</div>
                      <p>Izhevsk</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal2">
                  <div class="project-tmb-pic" style="background-image:url(/files/184.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">02</div>
                    <div class="project-tmb-cont">
                      <div class="h3">"Inter RAO-Electrogueneratsia", SA</div>
                      <p>Central termoelectrica Kaliningradskaia-2, Kaliningrado</p>
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
                      <div class="h3">Centro Lajta</div>
                      <p>San Petersburgo</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal4">
                  <div class="project-tmb-pic" style="background-image:url(/files/uc-2.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">04</div>
                    <div class="project-tmb-cont">
                      <div class="h3">Centro de formacion</div>
                      <p>Mytishchi, oblast de Moscu</p>
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
                <p>Solicite una muestra de andamios para ensamblaje de prueba y revision</p>
                <form id="sampleForm">
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
                    <div class="col-12 col-lg-8">
                      <div class="form-footer">
                        <button class="btn btn-1" type="submit">Solicitar visita de nuestro representante</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-agree">
                    <p>Haciendo clic en "Enviar" usted acepta el tratamiento de sus datos personales conforme al <a href="/Personal Data Processing Policy - ES.pdf" target="_blank">Acuerdo del usuario</a></p>
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
