/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
/* eslint-disable no-param-reassign */
document.addEventListener('DOMContentLoaded', () => {
  const allAccordions = document.querySelectorAll('.et_accordion');

  window.addEventListener('resize', () => {
    allAccordions.forEach((accordion) => {
      const allCollapsable = accordion.querySelectorAll('.et_accordion__single-wrapper');
      allCollapsable.forEach((collapsable) => {
        if (!collapsable.classList.contains('is-contracted')) {
          const maxHeightVal = collapsable.lastElementChild.scrollHeight;
          collapsable.lastElementChild.style.maxHeight = `${maxHeightVal}px`;
        }
      });
    });
  });

  allAccordions.forEach((accordionWrapper) => {
    const allCollapsable = accordionWrapper.querySelectorAll('.et_accordion__single-wrapper');
    allCollapsable.forEach((accordionElement) => {
      const mobileHide = accordionElement.querySelector('.mobile-hide');
      mobileHide?.addEventListener('click', () => {
        accordionElement.classList.add('is-contracted');
      });
      const title = accordionElement.firstElementChild;
      title.addEventListener('click', () => {
        const maxHeightVal = accordionElement.lastElementChild.scrollHeight;
        accordionElement.lastElementChild.style.maxHeight = `${maxHeightVal}px`;
        if (!accordionElement.classList.contains('is-contracted')) {
          accordionElement.classList.add('is-contracted');
        } else {
          allCollapsable.forEach((accordionElement) => {
            accordionElement.classList.add('is-contracted');
          });
          accordionElement.classList.remove('is-contracted');
        }
      });
    });
  });
});
