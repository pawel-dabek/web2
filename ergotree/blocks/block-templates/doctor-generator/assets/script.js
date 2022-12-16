/* eslint-disable camelcase */
/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
function init_doctor_generator(element = document) {
  const mixer = mixitup('.doctor-generator .row');

  const terms = element.querySelectorAll('.doctor-generator .term');
  const allTerms = element.querySelector('.doctor-generator .terms');
  const showMore = element.querySelector('.doctor-generator .show-more');
  const showLessText = showMore.dataset.less;
  const showMoreText = showMore.innerText;

  terms.forEach((term) => {
    term.addEventListener('click', (e) => {
      if (term.classList.contains('active')) {
        term.classList.remove('active');
        mixer.filter('all');
      } else {
        term.classList.add('active');
        terms.forEach((t) => {
          if (t !== term) {
            t.classList.remove('active');
          }
        });
      }
    });
  });

  window.addEventListener('resize', () => {
    if (allTerms.classList.contains('show-all')) {
      const height = allTerms.scrollHeight;
      allTerms.style.maxHeight = `${height}px`;
    }
  });

  showMore.addEventListener('click', () => {
    showMore.innerText = showMore.innerText === showMoreText ? showLessText : showMoreText;
    if (allTerms.classList.contains('show-all')) {
      allTerms.classList.remove('show-all');
      allTerms.style.maxHeight = '';
    } else {
      const height = allTerms.scrollHeight;
      allTerms.style.maxHeight = `${height}px`;
      allTerms.classList.add('show-all');
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_doctor_generator();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=doctor-generator', (el) => {
    if (!!el[0].querySelector('.doctor-generator') && !el[0].querySelector('.doctor-generator').classList.contains('block-js-added')) {
      init_doctor_generator(el[0]);
      el[0].querySelector('.doctor-generator').classList.add('block-js-added');
    }
  });
  window.acf.addAction('remount', (el) => {
    if (!!el[0].querySelector('.doctor-generator') && !el[0].querySelector('.doctor-generator').classList.contains('block-js-added')) {
      init_doctor_generator(el[0]);
      el[0].querySelector('.doctor-generator').classList.add('block-js-added');
    }
  });
  window.acf.addAction('unmount', (el) => {});
}
/* -- END -- */
