/* eslint-disable no-undef */
/* eslint-disable camelcase */

function init_big_img_slide(element = document) {
  const big_img_slide = element.querySelectorAll('.splide_slider');
  big_img_slide.forEach((item) => {
    const slider = new Splide(item, {
      rewind: true,
      type: 'loop',
      pagination: false,
      speed: '600',
      gap: '100px',
      breakpoints: {
        1150: {
          pagination: true,
          arrows: false,
          gap: '0px',
        },
      },
    });
    slider.mount();
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_big_img_slide();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=big-img-slide', (el) => {
    if (!!el[0].querySelector('.big-img-slide') && !el[0].querySelector('.big-img-slide').classList.contains('block-js-added')) {
      init_big_img_slide(el[0]);
      el[0].querySelector('.big-img-slide').classList.add('block-js-added');
    }
  });
}
/* -- Admin JS END -- */
