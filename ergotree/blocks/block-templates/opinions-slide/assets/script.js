/* eslint-disable no-shadow */
/* eslint-disable no-undef */
/* eslint-disable camelcase */
/* eslint-disable no-use-before-define */
function init_opinions_slide(element = document) {
  const opinions_slide = element.querySelectorAll('.splide-opinions');
  opinions_slide.forEach((item) => {
    const slider = new Splide(item, {
      rewind: true,
      pagination: false,
      type: 'loop',
      perPage: 2,
      perMove: 1,
      padding: '40px',
      gap: '20px',
      updateOnMove: true,
      breakpoints: {
        767: {
          perPage: 1,
        },
        575: {
          arrows: false,
          pagination: true,
          padding: { left: '0', right: '30px' },
          gap: '16px',
        },
      },
    });
    slider.mount();

    const allTabs = element.querySelectorAll('.splide__indicator li');

    allTabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        const Slides = slider.Components.Slides.filter(`.${tab.getAttribute('data-tab')}`);
        slider.go(Slides[0].index);
      });
    });

    slider.on('move', () => {
      const allTabs = element.querySelectorAll('.splide__indicator li');
      const activeSlide = element.querySelector('.splide__slide.is-active');
      const activeSlideTab = activeSlide.getAttribute('data-tab');

      allTabs.forEach((tab) => {
        if (tab.getAttribute('data-tab') === activeSlideTab) {
          tab.classList.add('is-active');
        } else {
          tab.classList.remove('is-active');
        }
      });
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_opinions_slide();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=opinions-slide', (el) => {
    if (!!el[0].querySelector('.opinions-slide') && !el[0].querySelector('.opinions-slide').classList.contains('block-js-added')) {
      init_opinions_slide(el[0]);
      el[0].querySelector('.opinions-slide').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
