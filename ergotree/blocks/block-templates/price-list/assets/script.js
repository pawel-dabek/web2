/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

function init_price_list(element = document) {
  const allPriceList = element.querySelectorAll('.price-list-single');

  allPriceList.forEach((priceList) => {
    const title = priceList.querySelector('.main-title');
    const priceInner = priceList.querySelector('.prices-inner');
    const hide = priceList.querySelector('.hide');

    hide.addEventListener('click', () => {
      priceList.classList.add('mobile-hidden-wrap');
      priceInner.style.maxHeight = '';
    });

    title.addEventListener('click', () => {
      if (priceList.classList.contains('mobile-hidden-wrap')) {
        allPriceList.forEach((priceList) => {
          priceList.classList.add('mobile-hidden-wrap');
          priceInner.style.maxHeight = '0px';
        });
        priceList.classList.remove('mobile-hidden-wrap');
        priceInner.style.maxHeight = `${priceInner.scrollHeight}px`;
      } else {
        priceList.classList.add('mobile-hidden-wrap');
        priceInner.style.maxHeight = '';
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_price_list();
  if (window.location.hash) {
    const { hash } = window.location;
    const hashContainer = document.querySelector(hash);
    setTimeout(() => {
      hashContainer.querySelector('.main-title').click();
    }, 500);
  } else {
    // Fragment doesn't exist
  }
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=price-list', (el) => {
    if (!!el[0].querySelector('.price-list') && !el[0].querySelector('.price-list').classList.contains('block-js-added')) {
      init_price_list(el[0]);
      el[0].querySelector('.price-list').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
