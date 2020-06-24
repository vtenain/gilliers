var diapoAccueil = new Swiper('.diapoAccueil', {
    loop:true,
    cssMode: true,
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
    slidesPerView: 5,
    spaceBetween: 30,
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