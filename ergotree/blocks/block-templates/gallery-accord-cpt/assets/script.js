/* eslint-disable no-shadow */
/* eslint-disable no-undef */
/* eslint-disable no-param-reassign */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

function init_gallery_accord_cpt(element = document) {
  const allSliders = element.querySelectorAll('.splide-example-gallery');
  const allExamples = element.querySelectorAll('.single-example');
  const allOpenGallery = element.querySelectorAll('.open-gallery');
  let counter = 1;

  allOpenGallery.forEach((openGallery) => {
    openGallery.addEventListener('click', (e) => {
      e.target.previousElementSibling.click();
    });
  });

  allExamples.forEach((example) => {
    const sliderId = `gallery${counter}`;
    halkaBox.run(sliderId);
    counter++;
    const exampleName = example.querySelector('.example-name');
    const exampleShow = example.querySelector('.show');
    const exampleShowText = exampleShow.innerText;
    const exampleHide = exampleShow.dataset.hide;

    exampleName.addEventListener('click', () => {
      if (example.classList.contains('is-contracted')) {
        allExamples.forEach((element) => {
          element.classList.add('is-contracted');
          element.querySelector('.show').innerText = exampleShowText;
          element.querySelector('.example-name').classList.remove('active');
        });
        exampleName.classList.add('active');
        example.classList.remove('is-contracted');
        exampleShow.innerHTML = exampleHide;
      } else {
        exampleName.classList.remove('active');
        example.classList.add('is-contracted');
        exampleShow.innerHTML = exampleShowText;
      }
    });
  });

  allSliders.forEach((slider) => {
    const count = slider.querySelectorAll('.splide__slide').length;

    if (count === 1) {
      new Splide(slider, {
        destroy: true,
      }).mount();
      slider.classList.add('splide-count-1');
    } else if (count === 2) {
      new Splide(slider, {
        destroy: true,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '7px',
        arrows: false,
        pagination: true,
        breakpoints: {
          991: {
            perPage: 4,
          },
          767: {
            perPage: 3,
          },
          575: {
            perPage: 2,
          },
          450: {
            destroy: false,
            perPage: 1,
            padding: { left: 0, right: 120 },
          },
        },
      }).mount();
      slider.classList.add('splide-count-2');
    } else if (count === 3) {
      new Splide(slider, {
        destroy: true,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '7px',
        arrows: false,
        pagination: true,
        breakpoints: {
          991: {
            perPage: 4,
          },
          767: {
            perPage: 3,
          },
          575: {
            perPage: 2,
            destroy: false,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 120 },
          },
        },
      }).mount();
      slider.classList.add('splide-count-3');
    } else if (count === 4) {
      new Splide(slider, {
        destroy: true,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '7px',
        arrows: false,
        pagination: true,
        breakpoints: {
          991: {
            perPage: 4,
          },
          767: {
            perPage: 3,
            destroy: false,
          },
          575: {
            perPage: 2,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 120 },
          },
        },
      }).mount();
      slider.classList.add('splide-count-4');
    } else if (count === 5) {
      new Splide(slider, {
        destroy: true,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '7px',
        arrows: false,
        pagination: true,
        breakpoints: {
          991: {
            perPage: 4,
            destroy: false,
          },
          767: {
            perPage: 3,
          },
          575: {
            perPage: 2,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 120 },
          },
        },
      }).mount();
      slider.classList.add('splide-count-5');
    } else {
      new Splide(slider, {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: '7px',
        arrows: false,
        pagination: true,
        breakpoints: {
          991: {
            perPage: 4,
          },
          767: {
            perPage: 3,
          },
          575: {
            perPage: 2,
          },
          450: {
            perPage: 1,
            padding: { left: 0, right: 120 },
          },
        },
      }).mount();
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_gallery_accord_cpt();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=gallery-accord-cpt', (el) => {
    if (!!el[0].querySelector('.gallery-accord-cpt') && !el[0].querySelector('.gallery-accord-cpt').classList.contains('block-js-added')) {
      init_gallery_accord_cpt(el[0]);
      el[0].querySelector('.gallery-accord-cpt').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
