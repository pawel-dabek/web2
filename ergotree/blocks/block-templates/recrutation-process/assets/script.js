document.addEventListener('DOMContentLoaded', function () {
  init_recrutation_process();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=recrutation-process', (el) => {
    if (!!el[0].querySelector('.recrutation-process') && !el[0].querySelector('.recrutation-process').classList.contains('block-js-added')) {
      init_recrutation_process(el[0]);
      el[0].querySelector('.recrutation-process').classList.add('block-js-added');
    }
  });
  window.acf.addAction('remount', (el) => {
    if (!!el[0].querySelector('.recrutation-process') && !el[0].querySelector('.recrutation-process').classList.contains('block-js-added')) {
      init_recrutation_process(el[0]);
      el[0].querySelector('.recrutation-process').classList.add('block-js-added');
    }
  });
  window.acf.addAction('unmount', (el) => {});
}
/* -- END -- */

function init_recrutation_process(element = document) {
  document.addEventListener('aos:in:step', ({ detail }) => {
    console.log('animated in', detail);
    detail.classList.add('animated');
  });
}
