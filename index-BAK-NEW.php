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

  <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
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
            <div class="header-logo"><a href="#"><img src="images/logo.png" alt="Союз" title="Союз"></a></div>
            <div class="lang-selector">
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="langMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <div class="header-contacts-l">
                <div class="header-phone"><a href="tel: 8 800 234-99-00">8 800 234-99-00</a></div>
                <div class="header-button"><a class="btn btn-callback" href="#" data-toggle="modal" data-target="#callbackModal">Заказать звонок</a></div>
              </div>
              <div class="header-contacts-r"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#orderModal">Оставить заявку</a></div>
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
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#types">Типы лесов</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                    <li>
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
      <div class="section-pic-r" style="background-image:url(files/179.jpg);"></div>
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
    </div><a name="about"></a>
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
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>1 000</span> тонн</div>
                  <div class="numbers-tmb-descr">
                    <p>запас лесов на&nbsp;складе</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>13 000</span> м&sup2;</div>
                  <div class="numbers-tmb-descr">
                    <p>производственных площадей</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>100 000 +</span></div>
                  <div class="numbers-tmb-descr">
                    <p>сданных конструкций</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="numbers-tmb">
                  <div class="numbers-tmb-num"><span>1 000 000 +</span></div>
                  <div class="numbers-tmb-descr">
                    <p>собранных м&sup2;</p>
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
                <div class="h2">Услуги</div>
              </div>
              <div class="section-lead">
                <p>Союз первый и&nbsp;крупнейший производитель строительных лесов в&nbsp;России</p>
              </div>
              <div class="section-services-logo"><img src="images/services-logo.png"></div>
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
    </div><a name="types"></a>
    <div class="section section-types">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">03</div>
            <div class="h2">Типы лесов</div>
          </div>
          <div class="custom-slider-wrapper">
            <div class="custom-slider types-slider">

              <!-- НАЧАЛО -->

              <div class="slide"> <!-- 1 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Лестничная башня</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 2 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-3.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Несущие леса под опалубку</div>
                    <p>Для монолитных перекрытий и сводов любой формы, в&nbsp;том числе для мостов и&nbsp;тоннелей.</p>
                  </div>
                </div>
              </div>
  
              <div class="slide"> <!-- 3 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/3-4.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Сверхмощная опора</div>
                    <p></p>
                  </div>
                </div>
              </div>
              
              <div class="slide"> <!-- 4 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-1.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Фасадные леса</div>
                    <p>Классический вид лесов для фасадных работ</p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 5 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/5.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Свободностоящие леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 6 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/6.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Подвесные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 7 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/7.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Подвесные леса консольные</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 8 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/8.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Мостовой переход</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 9 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/9.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Мост кабельный</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 10 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/10.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Вышка тура</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 11 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/11-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Леса переносимые краном</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 15 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/15.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Портал звуковой</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 16 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-7.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Рекламные конструкции</div>
                    <p>Для организации рекламных проектов</p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 17 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/17.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Объемные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 18 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/18-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Леса внутри емкости</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 19 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/19.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Маршевые лестницы для массовых переходов</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 20 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/20.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Свободностоящие башенные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 21 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/21-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Консольно-опорные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 22 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/22.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Доковые леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 23 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/23-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Леса на наклонной поверхности</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="slide"> <!-- 24 -->
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/24-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Консольные леса (простые)</div>
                    <p></p>
                  </div>
                </div>
              </div>

              <!-- КОНЕЦ -->
              
              <!-- НЕИСПОЛЬЗУЕМЫЕ

              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-2.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Маршевые лестницы и башни доступа</div>
                    <p>Для спуска людей, например во&nbsp;время экстренных ситуаций или после окончания рабочего дня</p>
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-4.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Консольные леса</div>
                    <p>Для организации рабочего места с выносом от основной конструкции</p>
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-5.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Подвесные леса</div>
                    <p>Для организации рабочего места на большой высоте</p>
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-6.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Мостовые переходы</div>
                    <p>Организация массовых переходов людей</p>
                  </div>
                </div>
              </div>

              <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/type-8.jpg"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Сверхмощные опоры</div>
                    <p>Для возможности опоры тяжелых конструкций</p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/2-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Несущие леса под опалубку</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/3-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Сверхмощная опора</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/3-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Сверхмощная опора</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/7-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Подвесные леса консольные</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/8-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Мостовой переход для массовых переходов</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/11-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Леса переносимые краном</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/16-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Рекламные конструкции</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/16-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Рекламные конструкции</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/18.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Леса внутри емкости</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/19-1.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Маршевые лестницы для массовых переходов</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/21.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Консольно-опорные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>

			        <div class="slide">
                <div class="type-tmb">
                  <div class="type-tmb-pic"><img src="files/types/21-2.png"></div>
                  <div class="type-tmb-descr">
                    <div class="h3">Консольно-опорные леса</div>
                    <p></p>
                  </div>
                </div>
              </div>
              -->

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
                <p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
                <form id="presentationForm">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                      <div class="form-group">
                        <label class="placeholder" for="presentation_name">Ваше имя</label>
                        <input type="text" name="presentation_name" id="presentation_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div class="form-group">
                        <label class="placeholder" for="presentation_phone">+7 (XXX) XXX-XX-XX</label>
                        <input class="input-phone" type="text" name="presentation_phone" id="presentation_phone" required>
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
                    <p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому соглашению</a></p>
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
    <div class="section section-pros">
      <div class="section-pic-r" style="background-image:url(files/pros-pic.jpg);"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="section-content">
              <div class="section-header">
                <div class="section-num">04</div>
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
    <div class="section section-specs">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="section-content">
              <div class="section-header">
                <div class="section-num">05</div>
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
    <div class="section section-form section-meeting">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-12 col-sm-6 order-sm-2">
              <div class="order-form">
                <div class="h2">Закажите презентацию</div>
                <p>Пожалуйста, оставьте свои контактные данные, и&nbsp;мы свяжемся с&nbsp;вами для уточнения деталей.</p>
                <form id="meetingForm">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_name">Ваше имя</label>
                        <input type="text" name="meeting_name" id="meeting_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div class="form-group">
                        <label class="placeholder" for="meeting_phone">+7 (XXX) XXX-XX-XX</label>
                        <input class="input-phone" type="text" name="meeting_phone" id="meeting_phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-8">
                      <div class="form-footer">
                        <button class="btn btn-1" type="submit">Назначьте встречу прямо сейчас</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-agree">
                    <p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому соглашению</a></p>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-6 order-sm-1">
              <div class="section-pic"><a href="https://www.youtube.com/embed/BQg8SfRtiDU" class="video fancybox-video"> <!-- href="https://www.youtube.com/embed/XNFm1u6JgvM?autoplay=1" -->
                <div class="video-pic">
                  <div class="play-button"></div><img src="files/video-pic.png">
                </div>
                <div class="video-caption">
                  <div class="h3">Все о&nbsp;компании ЗСЛ&nbsp;«СОЮЗ» за&nbsp;3&nbsp;минуты</div>
                </div></a></div>
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
                <div class="section-num">06</div>
                <div class="h2">Наши ценности</div>
              </div>
              <div class="pros-list pros-list-alt">
                <div class="pros-tmb">
                  <div class="pros-tmb-pic"><img src="images/pros-4.png"></div>
                  <div class="pros-tmb-descr">
                    <div class="cont">
                      <div class="h3">Безопасность</div>
                      <p>От несчастных случаях при работах на высоте</p>
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
                      <p>ЗСЛ &laquo;Союз&raquo; &mdash; ваш надежный партнер для решения задач в сфере строительных лесов.</p>
                    </div>
                  </div>
                </div>
              </div>
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
              <p>Леса серии SmartScaff продуманы до&nbsp;мелочей, именно поэтому они собираются быстро и&nbsp;безопасно.</p>
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
                    <p>Универсальный размер трубы в&nbsp;&oslash;48мм, позволяет в&nbsp;любых точках соединять элементы между собой одним видом хомутов</p>
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
                    <p>Совместимость с&nbsp;Layher, Scafom-Rux, Plettac, Pilosio, MJ-Geruest ,Alfix, Condor и&nbsp;другими зарубежными производителями</p>
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
    <!-- Качество-->
    <div class="section section-quality">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">08</div>
            <div class="h2">Как мы&nbsp;обеспечиваем высокое качество нашей продукции</div>
          </div>
        </div>
      </div>
      <div class="quality-item">
        <div class="quality-item-pic" style="background-image:url(files/quality-pic-1.jpg)"></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
              <div class="quality-item-descr">
                <div class="quality-header">
                  <div class="quality-header-pic"><img src="images/quality-header-1.png"></div>
                  <div class="quality-header-descr">
                    <div class="h3">Собственные производственные мощности в&nbsp;г. Ижевск</div>
                  </div>
                </div>
                <div class="quality-lead">
                  <p>Общая площадь производственных площадей&nbsp;&mdash; 13&nbsp;000&nbsp;м&sup2;, которая включает:</p>
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
                <div class="quality-header">
                  <div class="quality-header-pic"><img src="images/quality-header-2.png"></div>
                  <div class="quality-header-descr">
                    <div class="h3">Собственные производственные мощности в&nbsp;г. Ижевск</div>
                  </div>
                </div>
                <div class="quality-lead">
                  <p>Своя лаборатория и&nbsp;отдел технического контроля:</p>
                </div>
                <ul class="quality-list">
                  <li>
                    <div class="cont">Контроль химического состава, структуры металла и&nbsp;физико-механических характеристик стали</div>
                  </li>
                  <li>
                    <div class="cont">Контроль качества литьевых блоков на&nbsp;наличие &laquo;раковин&raquo; (пустот) с&nbsp;помощью радиографии</div>
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
    <!-- Факты-->
    <div class="section section-facts">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">09</div>
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
                    <div class="h3">Опыт работы с&nbsp;2004 года</div>
                    <p>Поставки в&nbsp;13&nbsp;стран мира</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="fact-tmb">
                  <div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
                  <div class="fact-tmb-descr">
                    <div class="h3">Анализ ТОП&nbsp;4 мировых производителей</div>
                    <p>Леса СОЮЗ объединили преимущества 4-х мировых производителей и&nbsp;реальный опыт монтажников лесов</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="fact-tmb">
                  <div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
                  <div class="fact-tmb-descr">
                    <div class="h3">Полный цикла производства</div>
                    <p>Контроль качества продукции от&nbsp;жидкого металла до&nbsp;готовых лесов на&nbsp;вашем объекте</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="fact-tmb">
                  <div class="fact-tmb-pic"><img src="images/ico-fact.png"></div>
                  <div class="fact-tmb-descr">
                    <div class="h3">Срок службы 20&nbsp;лет</div>
                    <p>Все элементы защищены от&nbsp;коррозии методом горячего оцинкования с&nbsp;толщиной покрытия 60-80&nbsp;мк</p>
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
                    <p>Несущие элементы лесов и&nbsp;клиновой узел проверены на&nbsp;реальных образцах в&nbsp;специализированном испытательном центре</p>
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
                <div class="section-num">10</div>
                <div class="h2">Клиенты</div>
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
    <!-- Сертификаты-->
    <div class="section section-cert">
      <div class="container">
        <div class="section-content">
          <div class="section-header">
            <div class="section-num">11</div>
            <div class="h2">Наши сертификаты</div>
          </div>
          <div class="cert-list">
            <div class="row">
              <div class="col-6 col-md-3"><a class="cert-tmb fancybox" href="files/cert-1.jpg" rel="cert_gal">
                  <div class="cert-tmb-pic"><img src="files/cert-1-tmb.jpg"></div>
                  <div class="cert-tmb-descr">
                    <p>ISO 9001-2015</p>
                  </div></a></div>
              <div class="col-6 col-md-3"><a class="cert-tmb fancybox" href="files/cert-2.jpg" rel="cert_gal">
                  <div class="cert-tmb-pic"><img src="files/cert-2-tmb.jpg"></div>
                  <div class="cert-tmb-descr">
                    <p>Сертификат соответствия ГОСТ</p>
                  </div></a></div>
              <div class="col-6 col-md-3"><a class="cert-tmb fancybox" href="files/cert-3.jpg" rel="cert_gal">
                  <div class="cert-tmb-pic"><img src="files/cert-3-tmb.jpg"></div>
                  <div class="cert-tmb-descr">
                    <p>Письмо МЧС РОССИИ</p>
                  </div></a></div>
              <div class="col-6 col-md-3"><a class="cert-tmb fancybox" href="files/cert-4.jpg" rel="cert_gal">
                  <div class="cert-tmb-pic"><img src="files/cert-4-tmb.jpg"></div>
                  <div class="cert-tmb-descr">
                    <p>Сертификат происхождения СТ-1</p>
                  </div></a></div>
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
            <div class="section-num">12</div>
            <div class="h2">Команда</div>
          </div>
          <div class="team-wrapper">
            <div class="row">
              <div class="col-xs-12 col-md-4 col-lg-3">
                <div class="team-descr">
                  <div class="team-descr-item">
                    <div class="h3"><span>15</span> лет</div>
                    <p>опыта работы</p>
                  </div>
                  <div class="team-descr-item">
                    <div class="h3"><span>150 +</span></div>
                    <p>сотрудников</p>
                  </div>
				          <div class="team-descr-item">
                    <div class="h3"><span>1350 +</span></div>
                    <p>монтажников</p>
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
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/3.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Даутов Ирек</br>Дамирович</div>
                          <div class="team-tmb-post">Директор</br>по производству</div>
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
                        <div class="team-tmb-pic" style="background-image:url(files/staff/18.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Першенкова Елена Вениаминовна</div>
                          <div class="team-tmb-post">Главный бухгалтер</div>
                        </div>
                      </div>
                    </div>

                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/5.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Шнейдер Антон</br>Юрьевич</div>
                          <div class="team-tmb-post">Коммерческий</br>директор</div>
                        </div>
                      </div>
                    </div>

                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/7.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Минеахметов Станислав Владиславович</div>
                          <div class="team-tmb-post">Заместитель</br>коммерческого директора</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/8.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Мягков Денис Александрович</div>
                          <div class="team-tmb-post">Менеджер</br>по продажам</div>
                        </div>
                      </div>
                    </div>


                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/11.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Веретенников Игорь Николаевич </div>
                          <div class="team-tmb-post">Менеджер</br>по продажам</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/19.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Утробин Никита Дмитриевич</div>
                          <div class="team-tmb-post">Менеджер</br>по продажам</div>
                        </div>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="team-tmb">
                        <div class="team-tmb-pic" style="background-image:url(files/staff/20.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Залётов Никита Александрович</div>
                          <div class="team-tmb-post">Менеджер</br>по продажам</div>
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
                        <div class="team-tmb-pic" style="background-image:url(files/staff/17.jpg);"></div>
                        <div class="team-tmb-descr">
                          <div class="team-tmb-name">Лукашевский Александр Сергеевич</div>
                          <div class="team-tmb-post">Инженер</br>ПТО</div>
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
            <div class="section-num">13</div>
            <div class="h2">Проекты</div>
          </div>
          <div class="projects-list">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal1">
                  <div class="project-tmb-pic" style="background-image:url(files/193.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">01</div>
                    <div class="project-tmb-cont">
                      <div class="h3">ООО "Завод МК"</div>
                      <p>г.&nbsp;Ижевск</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal2">
                  <div class="project-tmb-pic" style="background-image:url(files/184.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">02</div>
                    <div class="project-tmb-cont">
                      <div class="h3">АО "Интер РАО – Электрогенерация"</div>
                      <p>"Калининградская ТЭЦ-2" г.&nbsp;Калининград</p>
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
                      <div class="h3">Лахта-Центр Медиафасад</div>
                      <p>г. Санкт Петербург</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
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
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal5">
                  <div class="project-tmb-pic" style="background-image:url(files/project-5-tmb.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">05</div>
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
                    <div class="project-tmb-num">06</div>
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
                    <div class="project-tmb-num">07</div>
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
                    <div class="project-tmb-num">08</div>
                    <div class="project-tmb-cont">
                      <div class="h3">Коньково Маркет</div>
                      <p>г. Москва</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="project-tmb" data-toggle="modal" data-target="#galleryModal9">
                  <div class="project-tmb-pic" style="background-image:url(files/project-9-tmb.jpg);"></div>
                  <div class="project-tmb-descr">
                    <div class="project-tmb-num">09</div>
                    <div class="project-tmb-cont">
                      <div class="h3">Лахта Центр Медиа фасад</div>
                      <p>г. Санкт-Петербург</p>
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
                  <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                      <div class="form-group">
                        <label class="placeholder" for="sample_name">Ваше имя</label>
                        <input type="text" name="sample_name" id="sample_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div class="form-group">
                        <label class="placeholder" for="sample_phone">+7 (XXX) XXX-XX-XX</label>
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
                    <p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому соглашению</a></p>
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
    </div><a name="contacts"></a>
    <div class="section section-contacts">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-6">
            <div class="contacts-descr">
              <div class="h2">Контакты</div>
              <div class="h5">Звонок бесплатный по РФ:</div>
              <div class="contacts-phone-wrapper"><a class="contacts-phone" href="tel:8 800 234-99-00">8 800 234-99-00</a>
                <div class="contacts-messengers"><a href="https://wa.me/88002349900"><img src="images/ico-whatsapp.png"></a><a href="tg://resolve?domain=88002349900"><img src="images/ico-telegram.png"></a><a href="viber://chat?number=88002349900&quot;"><img src="images/ico-viber.png"></a></div>
              </div>
              <div class="h5">E-mail:</div>
              <p><a href="mailto:info@soyuz.pro">info@soyuz.pro</a></p>
              <div class="h5">Адрес:</div>
              <p>426039, г. Ижевск, Воткинское шоссе, 33А</p>
              <div class="soclinks">
                <?/*<a class="soclink soclink-vk"
                  href="https://vk.com/soyuzscaffolding" target="_blank"></a>*/?>
                <?/*<a class="soclink soclink-ok"
                  href="https://ok.ru/group/55021903872223" target="_blank"></a>*/?>
                <a class="soclink soclink-youtube"
                  href="https://www.youtube.com/channel/UCkY570x29o57LwkipAZOWZw?view_as=subscriber" target="_blank"></a>
              </div>
              <div class="copyright">
                <p>&copy; Завод строительных лесов «Союз» 2019. Все права защищены.</p>
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
  <div class="modal fade gallery-modal" id="galleryModal4" tabindex="-1">
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
              <div class="form-group">
                <label class="placeholder" for="callback_name">Ваше имя</label>
                <input type="text" name="callback_name" id="callback_name" required>
              </div>
              <div class="form-group">
                <label class="placeholder" for="callback_phone">+7 (XXX) XXX-XX-XX</label>
                <input class="input-phone" type="text" name="callback_phone" id="callback_phone" required>
              </div>
              <div class="form-footer">
                <button class="btn btn-1" type="submit">Отправить</button>
              </div>
              <div class="form-agree">
                <p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому соглашению</a></p>
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
              <div class="form-group">
                <label class="placeholder" for="order_2_name">Ваше имя</label>
                <input type="text" name="order_2_name" id="order_2_name" required>
              </div>
              <div class="form-group">
                <label class="placeholder" for="order_2_phone">+7 (XXX) XXX-XX-XX</label>
                <input class="input-phone" type="text" name="order_2_phone" id="order_2_phone" required>
              </div>
              <div class="form-footer">
                <button class="btn btn-1" type="submit">Оставить заявку</button>
              </div>
              <div class="form-agree">
                <p>Нажимая кнопку «Отправить» вы даете свое согласие на&nbsp;обработку ваших персональных данных согласно <a href="/Personal Data Processing Policy.pdf" target="_blank">Пользовательскому соглашению</a></p>
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
          <div class="h2">Заявка принята</div>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Ответ поступит в ближайшее время!</p>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
  <script src="js/main.js"></script>
</div>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
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


</body>
</html>
