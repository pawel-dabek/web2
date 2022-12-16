function init_newsletter(element = document) {}

document.addEventListener('DOMContentLoaded', function () {
  init_newsletter();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=newsletter', (el) => {
    if (!!el[0].querySelector('.newsletter') && !el[0].querySelector('.newsletter').classList.contains('block-js-added')) {
      init_newsletter(el[0]);
      el[0].querySelector('.newsletter').classList.add('block-js-added');
    }
  });
}
/* -- Admin JS END -- */
