/* eslint-disable no-param-reassign */
/* eslint-disable no-shadow */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

function init_faq_accord_cpt(element = document) {
  const allFaqs = document.querySelectorAll('.accordion');

  window.addEventListener('resize', () => {
    allFaqs.forEach((faq) => {
      if (!faq.classList.contains('is-contracted')) {
        const answer = faq.querySelector('.answer');
        const answerHeight = answer.scrollHeight;
        answer.style.maxHeight = `${answerHeight}px`;
      }
    });
  });

  allFaqs.forEach((item) => {
    const nameFaq = item.querySelector('.single-title');
    const showFaq = item.querySelector('.show-faq');
    const showFaqText = showFaq.innerText;
    const hideFaqText = showFaq.dataset.hide;

    const singleFaq = item;
    nameFaq.addEventListener('click', () => {
      if (singleFaq.classList.contains('is-contracted')) {
        allFaqs.forEach((faqs) => {
          faqs.classList.add('is-contracted');
          faqs.querySelector('.single-title').classList.remove('active');
          faqs.querySelector('.show-faq').innerText = showFaqText;
        });
        const answer = singleFaq.querySelector('.answer');
        const answerHeight = answer.scrollHeight;
        answer.style.maxHeight = `${answerHeight}px`;
        item.classList.remove('is-contracted');
        nameFaq.classList.add('active');
        showFaq.innerText = hideFaqText;
      } else {
        item.classList.add('is-contracted');
        nameFaq.classList.remove('active');
        showFaq.innerText = showFaqText;
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_faq_accord_cpt();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=faq-accord-cpt', (el) => {
    if (!!el[0].querySelector('.faq-accord-cpt') && !el[0].querySelector('.faq-accord-cpt').classList.contains('block-js-added')) {
      init_faq_accord_cpt(el[0]);
      el[0].querySelector('.faq-accord-cpt').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
