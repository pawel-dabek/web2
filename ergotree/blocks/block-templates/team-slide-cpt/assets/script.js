/* eslint-disable no-unused-vars */
/* eslint-disable no-cond-assign */
/* eslint-disable no-undef */
/* eslint-disable camelcase */
function init_team_slide_cpt(element = document) {
  const team_slide_cpt = element.querySelectorAll('.splide-zespol');
  const prev = element.querySelector('.splide__arrow--prev');
  const next = element.querySelector('.splide__arrow--next');
  team_slide_cpt.forEach((item) => {
    if (splideCountZespol == 1) {
      item.classList.add('splide-slides-1');
      const slider = new Splide(item, {
        destroy: true,
      });
      slider.mount();

      prev.addEventListener('click', () => {
        slider.go('<');
      });
      next.addEventListener('click', () => {
        slider.go('>');
      });
    } else if (splideCountZespol == 2) {
      item.classList.add('splide-slides-2');
      const slider = new Splide(item, {
        rewind: true,
        perPage: 3,
        perMove: 1,
        gap: '20px',
        padding: '40px',
        type: 'loop',
        arrows: false,
        pagination: false,
        destroy: true,
        breakpoints: {
          767: {
            perPage: 2,
            gap: '15px',
            padding: { left: 0, right: 40 },
            pagination: true,
          },
          450: {
            destroy: false,
            perPage: 1,
            padding: { left: 0, right: 124 },
            gap: '8px',
          },
        },
      });
      slider.mount();

      prev.addEventListener('click', () => {
        slider.go('<');
      });
      next.addEventListener('click', () => {
        slider.go('>');
      });
    } else if (splideCountZespol == 3) {
      item.classList.add('splide-slides-3');
      const slider = new Splide(item, {
        rewind: true,
        perPage: 3,
        perMove: 1,
        gap: '20px',
        padding: '40px',
        type: 'loop',
        arrows: false,
        pagination: false,
        destroy: true,
        breakpoints: {
          767: {
            perPage: 2,
            gap: '15px',
            padding: { left: 0, right: 40 },
            pagination: true,
            destroy: false,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 124 },
            gap: '8px',
          },
        },
      });
      slider.mount();

      prev.addEventListener('click', () => {
        slider.go('<');
      });
      next.addEventListener('click', () => {
        slider.go('>');
      });
    } else {
      const slider = new Splide(item, {
        rewind: true,
        perPage: 3,
        perMove: 1,
        gap: '20px',
        padding: '40px',
        type: 'loop',
        arrows: false,
        pagination: false,
        breakpoints: {
          767: {
            perPage: 2,
            gap: '15px',
            padding: { left: 0, right: 40 },
            pagination: true,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 124 },
            gap: '8px',
          },
        },
      });
      slider.mount();

      prev.addEventListener('click', () => {
        slider.go('<');
      });
      next.addEventListener('click', () => {
        slider.go('>');
      });
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_team_slide_cpt();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=team-slide-cpt', (el) => {
    if (!!el[0].querySelector('.team-slide-cpt') && !el[0].querySelector('.team-slide-cpt').classList.contains('block-js-added')) {
      init_team_slide_cpt(el[0]);
      el[0].querySelector('.team-slide-cpt').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
