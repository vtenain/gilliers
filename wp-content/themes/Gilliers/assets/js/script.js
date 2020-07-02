var diapoAccueil = new Swiper('.diapoAccueil', {
    loop:true,
    speed:700,
    pagination: {
      el: '.swiper-pagination',
      clickable:true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });
  var diapoConfiance = new Swiper('.diapoConfiance', {
    slidesPerView: 1,
    spaceBetween: 40,
    speed:500,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
          768: {
              slidesPerView: 2,
              spaceBetween: 10,
          },
          1024: {
              slidesPerView: 3,
          },
          1800: {
              slidesPerView: 4,
          },

      },
  });


const navbar    = document.getElementById("header");
const hamburger = document.querySelector(".hamburger");
const menu      = document.querySelector(".menu");
const keys      = {37: 1, 38: 1, 39: 1, 40: 1};
hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    menu.classList.toggle("menu-active");
    if(menu.classList.contains("menu-active")) 
        disableScroll()
    else 
        enableScroll()
});
function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;  
}
  function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}
function disableScroll() {
    if (window.addEventListener)
        window.addEventListener('DOMMouseScroll', preventDefault, false);
    document.addEventListener('wheel', preventDefault, {passive: false});
    document.addEventListener('touchmove', preventDefault, {passive: false});
    document.onkeydown  = preventDefaultForScrollKeys;
}
function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    document.removeEventListener('wheel', preventDefault, {passive: false});
    document.addEventListener('touchmove', preventDefault, {passive: false});
    document.onkeydown = null;  
}
