 var Menu = {
    el: {
    ham: jQuery('.menu-m'),
    menuTop: jQuery('.menu-top'),
    menuMiddle: jQuery('.menu-middle'),
    menuBottom: jQuery('.menu-bottom')
    },
    init: function() {
    Menu.bindUIactions();
    },
    bindUIactions: function() {
    Menu.el.ham
    .on(
    'click',
    function(event) {
    Menu.activateMenu(event);
    event.preventDefault();
    }
    );
    },
    activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
    }
    };
Menu.init();

var swiper = new Swiper(".mySwiperone", {
  slidesPerView: 1,
  spaceBetween: 30,
  autoHeight: false,
  loop: true,
  breakpoints: {
    1200: {
      slidesPerView: 5,
      loop: true,
      spaceBetween: 50,
    },
  },
});

var swiper = new Swiper(".mySwipertwo", {
  slidesPerView: 1,
  autoHeight: false,
  spaceBetween: 30,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});

var swiper = new Swiper(".mySwiperthree", {
  slidesPerView: 1,
  autoHeight: false,
  effect: 'fade',
  loop: true,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiperfour", {
  slidesPerView: 1,
  autoHeight: false,
  effect: 'fade',
  loop: true,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-nextt",
    prevEl: ".swiper-button-prevv",
  },
});

$(".menu-m").on("click", function(e) {
  e.preventDefault();
  $(".navbar-nav").toggleClass("active");
});

$(".navbar-nav li a").on("click", function() {
  $(".navbar-collapse").toggleClass("show");
  $(".menu-global").removeClass("menu-top-click");
  $(".menu-global").removeClass("menu-middle-click");
  $(".menu-global").removeClass("menu-bottom-click"); 
});