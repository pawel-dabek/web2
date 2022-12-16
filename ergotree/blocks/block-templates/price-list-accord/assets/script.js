/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */
function init_price_list_accord(element = document) {}

document.addEventListener('DOMContentLoaded', () => {
  init_price_list_accord();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=price-list-accord', (el) => {
    if (!!el[0].querySelector('.price-list-accord') && !el[0].querySelector('.price-list-accord').classList.contains('block-js-added')) {
      init_price_list_accord(el[0]);
      el[0].querySelector('.price-list-accord').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
