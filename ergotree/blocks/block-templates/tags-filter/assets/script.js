/* eslint-disable func-names */
/* eslint-disable no-undef */
/* eslint-disable no-param-reassign */
/* eslint-disable no-shadow */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

// get full screen height
const vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

const formObject = document.forms['form-taxonomy'];

function autoSubmit() {
  formObject.submit();
}

const tagsSection = document.querySelector('.tags-filter');
const tagsWrapper = document.querySelector('.stage-1-wrapper');
const allTags = tagsWrapper.querySelectorAll('input[type="checkbox"]');
const clearFilters = document.querySelector('.clear-filters');
const noPostsClear = document.querySelector('.no-posts-clear');
const moreTags = document.querySelector('.more-tags');
const showMore = moreTags.innerHTML;
const showLess = moreTags.getAttribute('data-less');
const filtersTrigger = document.querySelector('.stage-1-trigger-wrapper .btn-red-full');
const closeFilters = document.querySelector('.close-stage-1');
const acceptFilters = document.querySelector('.accept-filters');

const categories = document.querySelector('input[name="categories"]');

moreTags.addEventListener('click', () => {
  if (tagsWrapper.classList.contains('active')) {
    tagsWrapper.classList.remove('active');
    moreTags.innerHTML = showMore;
    tagsWrapper.style.maxHeight = '';
  } else {
    tagsWrapper.classList.add('active');
    moreTags.innerHTML = showLess;
    tagsWrapper.style.maxHeight = `${tagsWrapper.scrollHeight}px`;
  }
});

let scrollY;

filtersTrigger.addEventListener('click', () => {
  tagsWrapper.parentElement.classList.add('filters-active');
  tagsSection.classList.add('filters-active');
  setTimeout(() => {
    scrollY = window.scrollY;
    document.body.classList.add('no-scroll-filters');
  }, 400);
  document.body.style.scrollBehavior = 'auto';
  document.documentElement.style.scrollBehavior = 'auto';
});

closeFilters.addEventListener('click', () => {
  tagsWrapper.parentElement.classList.remove('filters-active');
  tagsSection.classList.remove('filters-active');
  document.body.classList.remove('no-scroll-filters');
  setTimeout(() => {
    document.body.style.scrollBehavior = 'smooth';
    document.documentElement.style.scrollBehavior = 'smooth';
  }, 400);
  window.scrollTo(0, scrollY);
});

acceptFilters.addEventListener('click', () => {
  tagsWrapper.parentElement.classList.remove('filters-active');
  tagsSection.classList.remove('filters-active');
  setTimeout(() => {
    document.body.style.scrollBehavior = 'smooth';
    document.documentElement.style.scrollBehavior = 'smooth';
  }, 400);
  document.body.classList.remove('no-scroll-filters');
  window.scrollTo(0, scrollY);
  autoSubmit();
});

let timer;

allTags.forEach((tag) => {
  tag.addEventListener('change', () => {
    clearFilters.classList.remove('active');
    if (window.innerWidth >= 576) {
      clearTimeout(timer);
      timer = setTimeout(() => {
        autoSubmit();
      }, 1000);
    }
  });
});

clearFilters.addEventListener('click', () => {
  clearFilters.classList.add('active');

  allTags.forEach((tag) => {
    tag.checked = false;
  });

  if (window.innerWidth >= 576) {
    autoSubmit();
  }
});

noPostsClear?.addEventListener('click', () => {
  allTags.forEach((tag) => {
    tag.checked = false;
  });
  categories.value = '';
  autoSubmit();
});

window.addEventListener('resize', () => {
  if (tagsWrapper.classList.contains('active')) {
    tagsWrapper.style.maxHeight = `${tagsWrapper.scrollHeight}px`;
  }
});

function init_tags_filter(element = document) {
  const sliderElement = element.querySelector('.splide-authors');
  const slider = new Splide(sliderElement, {
    arrows: false,
    pagination: false,
    type: 'loop',
    cloneStatus: true,
    updateOnMove: true,
    perPage: 5,
    perMove: 1,
    padding: '45px',
    gap: '60px',
    breakpoints: {
      991: {
        perPage: 4,
      },
      767: {
        padding: { left: 0, right: '100px' },
        gap: '50px',
        pagination: true,
      },
      699: {
        perPage: 3,
      },
      575: {
        padding: { left: 0, right: '60px' },
        gap: '40px',
      },
      499: {
        perPage: 2,
        padding: { left: 0, right: '100px' },
      },
      399: {
        padding: { left: 0, right: '80px' },
      },
      350: {
        padding: { left: 0, right: '60px' },
      },
    },
  });
  slider.mount();

  const r = document.querySelector(':root');
  const wrapImg = element.querySelector('#splide01-slide01 .wrap-img img');
  const wrapImgHeight = wrapImg.scrollHeight;
  r.style.setProperty('--arrow-pos', `${wrapImgHeight / 2}px`);

  setInterval(() => {
    const wrapImg = element.querySelector('#splide01-slide01 .wrap-img img');
    const wrapImgHeight = wrapImg.scrollHeight;
    r.style.setProperty('--arrow-pos', `${wrapImgHeight / 2}px`);
  }, 1000);

  const arrowPrev = element.querySelector('.arrow-prev');
  const arrowNext = element.querySelector('.arrow-next');

  arrowPrev.addEventListener('click', () => {
    slider.go('<');
  });

  arrowNext.addEventListener('click', () => {
    slider.go('>');
  });

  const allCategoryItems = document.querySelectorAll('.category-item');

  allCategoryItems.forEach((item) => {
    item.addEventListener('click', () => {
      if (item.classList.contains('active')) {
        const role = item.parentElement.getAttribute('aria-label');
        const sameRoleItems = document.querySelectorAll(`.splide__slide[aria-label="${role}"]`);

        item.classList.remove('active');
        categories.value = '';

        sameRoleItems.forEach((item) => {
          const categoryItem = item.querySelector('.category-item');
          categoryItem.classList.remove('active');
        });

        autoSubmit();
      } else {
        allCategoryItems.forEach((item) => {
          const role = item.parentElement.getAttribute('aria-label');
          const sameRoleItems = document.querySelectorAll(`.splide__slide[aria-label="${role}"]`);

          item.classList.remove('active');
          categories.value = '';

          sameRoleItems.forEach((item) => {
            const categoryItem = item.querySelector('.category-item');
            categoryItem.classList.remove('active');
          });

          autoSubmit();
        });
        const role = item.parentElement.getAttribute('aria-label');
        const sameRoleItems = document.querySelectorAll(`.splide__slide[aria-label="${role}"]`);

        item.classList.add('active');

        sameRoleItems.forEach((item) => {
          const categoryItem = item.querySelector('.category-item');
          const dataValue = categoryItem.getAttribute('data-value');
          categories.value = dataValue;
          categoryItem.classList.add('active');

          autoSubmit();
        });
      }
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_tags_filter();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=tags-filter', (el) => {
    if (!!el[0].querySelector('.tags-filter') && !el[0].querySelector('.tags-filter').classList.contains('block-js-added')) {
      init_tags_filter(el[0]);
      el[0].querySelector('.tags-filter').classList.add('block-js-added');
    }
  });
}
/* -- Admin JS END -- */
