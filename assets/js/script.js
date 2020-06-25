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
    slidesPerView: 3,
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
  });