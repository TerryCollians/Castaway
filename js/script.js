new Swiper('.gallery__content', {
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: '.gallery__pagination',
      type: 'fraction'
    },
    navigation: {
      nextEl: '.gallery__right',
      prevEl: '.gallery__left',
    },
  });
  
