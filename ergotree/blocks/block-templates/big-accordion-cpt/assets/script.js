/* eslint-disable no-shadow */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */
/* eslint-disable no-use-before-define */

function init_big_accordion_cpt(element = document) {
  const allBigAccordions = element.querySelectorAll('.et_accordion__single-wrapper');

  allBigAccordions.forEach((item) => {
    const wrapper = item.querySelector('.title-wrapper');
    const toContract = item.querySelector('.to-contract');
    setInterval(() => {
      toContract.style.maxHeight = `${toContract.scrollHeight}px`;
    }, 1000);
    wrapper.addEventListener('click', (e) => {
      toContract.style.maxHeight = `${toContract.scrollHeight}px`;
      if (!item.classList.contains('is-contracted')) {
        item.classList.toggle('is-contracted');
      } else {
        allBigAccordions.forEach((item) => {
          item.classList.add('is-contracted');
        });
        item.classList.remove('is-contracted');
      }
    });
  });

  const allReadMores = element.querySelectorAll('.read-more span');

  allReadMores.forEach((item) => {
    item.addEventListener('click', (e) => {
      const text = item.parentElement.querySelector('.text-small');
      text.classList.toggle('is-active');
      if (item.innerText === item.dataset.change) {
        item.innerText = item.dataset.initial;
      } else {
        item.innerText = item.dataset.change;
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_big_accordion_cpt();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=big-accordion-cpt', (el) => {
    if (!!el[0].querySelector('.big-accordion-cpt') && !el[0].querySelector('.big-accordion-cpt').classList.contains('block-js-added')) {
      init_big_accordion_cpt(el[0]);
      el[0].querySelector('.big-accordion-cpt').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
