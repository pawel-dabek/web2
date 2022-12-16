/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

function init_text_area_accord(element = document) {}

document.addEventListener('DOMContentLoaded', () => {
  init_text_area_accord();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=text-area-accord', (el) => {
    if (!!el[0].querySelector('.text-area-accord') && !el[0].querySelector('.text-area-accord').classList.contains('block-js-added')) {
      init_text_area_accord(el[0]);
      el[0].querySelector('.text-area-accord').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
