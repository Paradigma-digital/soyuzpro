var baseUrl = '/';

$(window).scroll(function () {

  var scrollPos = $(window).scrollTop();

  if (scrollPos > 100) {

    $("header").addClass("header-fixed");

  } else {

    $("header").removeClass("header-fixed");

  }

});

$(window).resize(function () {


});

$(window).on("load", function () {

});

function display_console(text) {
  console.log(text);
}

$(document).ready(function () {

  // Type modal

  $("body").on("click", "[data-target='#typeOrderModal']",function () {

    $("#type_order_item").val($(this).closest(".type-item").find(".type-item-header h2").text());

  });

  $("body").on("click", "[data-target='#typeConsultModal']",function () {

    $("#type_consult_item").val($(this).closest(".type-item").find(".type-item-header h2").text());

  });

  $("[data-target='#typeModal']").click(function () {

    var link = $(this),
      linkUrl = $(this).attr("href");

    $("#typeModal").addClass("loading");

    $.ajax({
      url: linkUrl,
      dataType: "html"
    }).done(function(data) {

      $("#typeModal").removeClass("loading");
      $("#typeModal .modal-body").html($(data));

      $("#typeModal .type-item-gallery").on("init", function (event, slick) {

        var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

        var sliderCounter = $('<div class="slider-counter"><span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length + '</div>');

        $(this).prepend(sliderCounter);

        if ($("#typeModal .type-item-gallery .slide").length == 1) {

          $(this).find(".slider-counter").hide();

          $(this).closest(".type-item-pic").addClass("type-item-pic-single");

        }

      });

      $("#typeModal .type-item-gallery").on("afterChange", function(event, slick, currentSlide) {

        var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

        $(this).find(".slider-counter").html('<span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length);

      });

      $("#typeModal .type-item-gallery").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        dots: true
      });



    });


  });

  $('.modal').on('hidden.bs.modal', function () {

    if ($(".modal").hasClass("show")) {

      $("body").addClass("modal-open");

    }

  });

  $('#typeModal').on('shown.bs.modal', function () {

    $("#typeModal .type-item-gallery").slick("setPosition");

  });

  $('#orderModal').on('shown.bs.modal', function () {

    fbq('track', 'InitiateCheckout');

  });

  // Type modal END

  // Forms submit

  $("#callbackForm").submit(function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка на обратный звонок",
          name: $("#callback_name").val(),
          phone: $("#callback_phone").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("body").on("submit", "#typeOrderForm", function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заказ лесов",
          name: $("#type_order_name").val(),
          phone: $("#type_order_phone").val(),
          itemname: $("#type_order_item").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("body").on("submit", "#typeConsultForm", function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка на консультацию по лесам",
          name: $("#type_consult_name").val(),
          phone: $("#type_consult_phone").val(),
          itemname: $("#type_consult_item").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("#order_2_Form").submit(function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка",
          name: $("#order_2_name").val(),
          phone: $("#order_2_phone").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("#presentationForm").submit(function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка на презентацию",
          name: $("#presentation_name").val(),
          phone: $("#presentation_phone").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("#meetingForm").submit(function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка на встречу",
          name: $("#meeting_name").val(),
          phone: $("#meeting_phone").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  $("#sampleForm").submit(function() {
    if ($(this).valid()) {
      $('button[type="submit"]').attr('disabled','disabled');
      var form = $(this);
      $.ajax({
        type: "POST",
        url: baseUrl + "order.php",
        data: {
          subject: "Союз — заявка на образец",
          name: $("#sample_name").val(),
          phone: $("#sample_phone").val(),
          utm_medium: $(this).find('input[name="utm_medium"]').val(),
          utm_campaign: $(this).find('input[name="utm_campaign"]').val(),
          utm_content: $(this).find('input[name="utm_content"]').val(),
          utm_term: $(this).find('input[name="utm_term"]').val(),
          utm_source: $(this).find('input[name="utm_source"]').val(),
          yclid: $(this).find('input[name="yclid"]').val(),
          glid: $(this).find('input[name="glid"]').val()
        }
      }).done(function() {

        formSuccess(form);
        fbq('track', 'Lead');

      });
      return false;
    }
  });

  // Forms submit END

  // Anchors

  $("a").click(function () {

    if ($("a[name='" + $(this).attr("href").replace("#","") + "']").length) {
      var aTarget = $("a[name='" + $(this).attr("href").replace("#","") + "']");
      $("html,body").animate({
        scrollTop: aTarget.offset().top - 60
      },1000)
    }

  });

  // Anchors END

  // Project gallery

  $(".gallery-slider").on("init", function (event, slick) {

    var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

    var sliderCounter = $('<div class="slider-counter"><span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length + '</div>');

    $(this).prepend(sliderCounter);

  });

  $(".gallery-slider").on("afterChange", function(event, slick, currentSlide) {

    var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

    $(this).find(".slider-counter").html('<span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length);

  });

  $(".gallery-slider").slick({
    dots: true,
    speed: 1000,
    infinite: false
  });

  $('.gallery-modal').on('shown.bs.modal', function () {

    $(this).find(".gallery-slider").slick("setPosition");

  });

  // Project gallery

  // Custom slider

  $(".custom-slider").on("init", function (event, slick) {

    var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

    var sliderCounter = $('<div class="slider-counter"><span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length + '</div>');

    $(this).prepend(sliderCounter);

  });

  $(".custom-slider").on("afterChange", function(event, slick, currentSlide) {

    var curPage = parseInt($(this).find(".slick-dots .slick-active").prevAll().length) + 1;

    $(this).find(".slider-counter").html('<span>' + curPage + '</span> / ' + $(this).find(".slick-dots li").length);

  });

  $(".types-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    speed: 1000,
    infinite: false,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".video-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    speed: 1000,
    infinite: false,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".team-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    speed: 1000,
    infinite: false,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
  });

  // Custom slider END

  // Maps

  ymaps.ready(function () {

    var myMap = new ymaps.Map('contactsMap', {
        center: [56.893736, 53.238619],
        zoom: 16,
        controls: ['zoomControl']
      }, {}),

      myPlacemark = new ymaps.Placemark([56.893736, 53.238619], {
        hintContent: '',
        balloonContent: ''
      }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: '/images/map-pin.png',
        // Размеры метки.
        iconImageSize: [43, 60],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-21, -60]
      });

    myMap.behaviors.disable('scrollZoom');

    myMap.geoObjects
      .add(myPlacemark);

  });

  // Mobile

  // Main menu

  $(".menu-trigger").click(function () {

    $(".header-menu").fadeToggle(150, function () {
      $(".header-menu").toggleClass("active");
    });
    $(this).toggleClass("active");

  });

  $("body").click(function (e) {

    if ($(".header-menu").hasClass("active") && !$(e.target).hasClass("navbar-nav") && !$(e.target).parents().hasClass("navbar-nav") && !$(e.target).hasClass("menu-trigger") && !$(e.target).parents().hasClass("menu-trigger")) {
      $(".header-menu").fadeOut(150, function () {
        $(".header-menu").removeClass("active");
        $(".menu-trigger").removeClass("active");
      });
    }

  });

  $(".navbar-nav a").click(function () {

    if ($("#mobile-indicator").css("display") == "block") {

      $(".header-menu").fadeOut(150, function () {
        $(".header-menu").removeClass("active");
        $(".menu-trigger").removeClass("active");
      });

    }

  });

  // Mobile END

  // Fancybox

  $("a.fancybox").fancybox({
    helpers: {
      overlay: {
        locked: false
      }
    }
  });

  $(".fancybox-video").fancybox({
    helpers : {
      media : {},
      overlay: {
        locked: false
      }
    },
    type: "iframe"
  });

  // Forms

  $("select").not(".picker__select--month, .picker__select--year").each(function () {
    if ($(this).attr("multiple")) {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор",
        selectedTextFormat: "count",
        countSelectedText: function(count) {
          return count + " " + declOfNum(count, ['элемент', 'элемента', 'элементов']);
        }
      });
    } else {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор"
      });
    }
  });

  if ($("input:text").length) {
    $("input:text").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").hide();
      }
    });
  }

  if ($("textarea").length) {
    $("textarea").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").hide();
      }
    });
  }

  $("body").on("focus input","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      placeholder.hide();

    }

  });

  $("body").on("blur","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      if (!el.val() || (el.hasClass("input-phone") && ! /^(?=.*[0-9])[- +()0-9]+$/.test(el.val()))) {
        placeholder.show();
      }

    }

  });

  $("body").on("click",".placeholder",function(e) {
    if ($(this).parent().find("input").length) {
      $(this).parent().find("input").trigger("focus");
    }
    if ($(this).parent().find("textarea").length) {
      $(this).parent().find("textarea").trigger("focus");
    }
  })

  $("input.input-phone").mask("+7 (999) 999-99-99");
  $("input.input-phone-int").mask("+9999999999?99");

  $("body").on("focus","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-group").addClass("focus");
  });

  $("body").on("blur","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-group").removeClass("focus")
  });

  validateForms();

});

function validateForms() {

  jQuery.validator.addClassRules('phone-email-group', {
    require_from_group: [1, ".phone-email-group"]
  });

  $("select").on("change", function () {
    if (!$(this).closest(".picker").length && !$(this).closest(".form-lister-wrapper").length) {
      $(this).valid();
    }
  });

  $("body").on("click", ".form-group", function (e) {
    if ($(this).find(".bootstrap-select").length && !$(e.target).hasClass("bootstrap-select") && !$(e.target).parents().hasClass("bootstrap-select")) {
      $(e.target).closest(".form-group").find("select").selectpicker('toggle');
    }
  });

  $("form").each(function() {

    form = $(this);

    $(this).validate({
      focusInvalid: true,
      sendForm : false,
      errorPlacement: function(error, element) {
        element.closest(".form-group").addClass("error");
        if (element[0].tagName == "SELECT") {
          element.closest(".btn-group").addClass("btn-group-error");
          if (element.closest(".form-group").length) {
            error.insertAfter(element.closest(".form-group"));
          } else {
            error.insertAfter(element.closest(".btn-group"));
          }
        } else {
          if (element.attr("type") == "checkbox") {
            element.siblings("label").addClass("checkbox-label-error")
          } else {
            error.insertAfter(element);
          }
        }

      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass);
        $(element).closest(".form-group").removeClass("error").addClass("valid");

        if ($(element)[0].tagName == "SELECT") {
          $(element).closest(".btn-group").removeClass("btn-group-error");
          if ($(element).closest(".form-group").length) {
            error.insertAfter(element.closest(".form-group"));
            $(element).closest(".form-group").next("label.error").remove();
          } else {
            $(element).closest(".btn-group").next("label.error").remove();
          }
        } else {
          $(element).next(".error").remove();
          if ($(element).attr("type") == "checkbox") {
            $(element).siblings("label").removeClass("checkbox-label-error")
          }
        }
      },
      invalidHandler: function(form, validatorcalc) {
        var errors = validatorcalc.numberOfInvalids();
        if (errors && validatorcalc.errorList[0].element.tagName == "INPUT") {
          validatorcalc.errorList[0].element.focus();
        }
      }
    });

    if ($(this).find("input.password").length && $(this).find("input.password-repeat").length) {
      $(this).find("input.password-repeat").rules('add', {
        equalTo: "#"+form.find("input.password").attr("id")
      });
    }

  });

}

var formMessages = {
  en: {
    required: "This field is required.",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",

    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  },
  es: {
    required: "Este campo es obligatorio",
    remote: "Please fix this field.",
    email: "Por favor, introduce una dirección de correo electrónico válida.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Contraseña no coincide.",

    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  },
  ru: {
    required: "Не заполнено поле",
    remote: "Please fix this field.",
    email: "Введите правильный e-mail.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Пароли не совпадают.",

    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  }
};

if (curLang == "en") {
  jQuery.extend(jQuery.validator.messages, formMessages.en);
} else if (curLang == "es") {
  jQuery.extend(jQuery.validator.messages, formMessages.es);
} else if (curLang == "ru") {
  jQuery.extend(jQuery.validator.messages, formMessages.ru);
}

function parallax(obj, objOffset, speed) {

  var objPos = - $(window).scrollTop() + obj.closest(".parallax-wrapper").offset().top + objOffset

  obj.css({
    transform: "translateY(" + objPos + "px)"
  });

}

function slickResponsive() {

  if ($("#mobile-indicator").css("display") == "block") {

    $(".docs-list .tr").slick({
      slidesToShow: 2,
      slidesToScroll: 2
    });

  } else {

    if ($(".docs-list .tr").hasClass("slick-initialized")) {
      $(".docs-list .tr").slick("unslick");
    }

  }

}

function readURL(input, img) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      img.attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function initFooterMap() {

  var myLatLng = {lat: 55.767321, lng: 37.607748};

  var myCenter = {lat: 55.767321, lng: 37.605248};

  var map = new google.maps.Map(document.getElementById('footerContactsMap'), {
    zoom: 17,
    center: myCenter

  });

  if ($("#mobile-indicator").css("display") == "block") {
    map.setCenter({lat: 55.767321, lng: 37.607748});
  } else {
    map.setCenter({lat: 55.767321, lng: 37.605248});
  }

  var contactsMarker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: 'images/map-pin.png'
  });

  google.maps.event.addDomListener(window, "load resize", function() {
    if ($("#mobile-indicator").css("display") == "block") {
      map.setCenter({lat: 55.767321, lng: 37.607748});
    } else {
      map.setCenter({lat: 55.767321, lng: 37.605248});
    }

    if ($("#mobile-indicator").css("display") == "block") {

      infowindow.setOptions({
        maxWidth: 280
      })

    }

  });

  $(window).resize(function () {

    if ($("#mobile-indicator").css("display") == "block") {
      map.setCenter({lat: 55.767321, lng: 37.607748});
    } else {
      map.setCenter({lat: 55.767321, lng: 37.605248});
    }

    if ($("#mobile-indicator").css("display") == "block") {

      infowindow.setOptions({
        maxWidth: 280
      })

    }

  });


}

function formSuccess(form) {
  dataLayer.push({'event': 'formsendok'});
  form.find(".form-group input, .form-group textarea").val("");
  form.find(".placeholder").show();
  $("#successModal").modal("show");
  form.closest(".modal").modal("hide");
  $('button[type="submit"]').removeAttr('disabled');
}

