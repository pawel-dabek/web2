/* eslint-disable no-param-reassign */
const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('header');
const main = document.querySelector('main');
const headerNav = document.querySelector('.header-nav');
const mobileNav = document.querySelector('.mobile-nav');
const mainSubMenuMobile = mobileNav?.querySelectorAll('.main-sub-menu');

const searchFormWrapper = document.querySelector('header .search-form-wrapper');
const searchIcon = document.querySelector('header .search-form-wrapper .icon');
const searchButton = document.querySelector('header .button-search');
const searchForm = document.querySelector('header .search-form-wrapper form');
const searchInput = document.querySelector('header .search-form-wrapper form #s');

const headerTempContainer = document.querySelector('header .temp-container');
const navKariera = document.querySelector('header .header-nav .kariera');
const navZespol = document.querySelector('header .header-nav .zespol');
const navFirma = document.querySelector('header .header-nav .firma');
const headerKariera = headerTempContainer.querySelector('.kariera');
const headerZespol = headerTempContainer.querySelector('.zespol');
const headerFirma = headerTempContainer.querySelector('.firma');

const bubbles = document.querySelector('.bubbles');
const polylang = document.querySelector('.polylang-wrapper');
const polylangCurrent = polylang.querySelector('.current-lang');

bubbles?.addEventListener('click', () => {
  if ('ontouchstart' in window) {
    bubbles.classList.add('active');
  }
});

polylang?.addEventListener('click', () => {
  polylang.classList.add('active');
});

function moveCurrentLangToTop() {
  polylang.prepend(polylangCurrent);
}

moveCurrentLangToTop();

document.addEventListener('click', (e) => {
  if (e.target.closest('.bubbles')) return;
  bubbles.classList.remove('active');
});

document.addEventListener('click', (e) => {
  if (e.target.closest('.polylang-wrapper')) return;
  polylang.classList.remove('active');
});

navKariera?.appendChild(headerKariera);
navZespol?.appendChild(headerZespol);
navFirma?.appendChild(headerFirma);

document.addEventListener('DOMContentLoaded', () => {});

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  header?.classList.toggle('mobile-menu-active');
  if (mobileNav.classList.contains('active')) {
    mobileNav.classList.remove('active');
    const allActive = mobileNav.querySelectorAll('.active');
    allActive.forEach((item) => {
      item.classList.remove('active');
    });
  } else {
    mobileNav?.classList.toggle('active');
  }
});

mainSubMenuMobile?.forEach((item) => {
  const subMenus = item.querySelectorAll('.sub-menu .menu-item-has-children');
  const allBackButtons = item.querySelectorAll('.back-mobile');
  const allBackButtonsInner = item.querySelectorAll('.back-mobile-inner');

  item.querySelector(':scope > a').addEventListener('click', () => {
    mobileNav.querySelector('.mobile-nav-menu').classList.toggle('active');
    item.classList.toggle('active');
  });

  subMenus.forEach((subMenu) => {
    subMenu.querySelector(':scope > a').addEventListener('click', () => {
      subMenu.parentElement.classList.toggle('active');
      subMenu.parentElement.scrollTop = 0;
      subMenu.classList.toggle('active');
    });
  });

  allBackButtons.forEach((backButton) => {
    backButton.addEventListener('click', () => {
      backButton.parentElement.parentElement.classList.remove('active');
      backButton.parentElement.parentElement.parentElement.classList.remove('active');
    });
  });

  allBackButtonsInner.forEach((backButton) => {
    backButton.addEventListener('click', () => {
      backButton.parentElement.parentElement.classList.remove('active');
      backButton.parentElement.parentElement.parentElement.classList.remove('active');
    });
  });
});

searchIcon.addEventListener('click', () => {
  const fakeInput = document.createElement('input');
  fakeInput.setAttribute('type', 'text');
  fakeInput.classList.add('fake-input');
  fakeInput.style.position = 'absolute';
  fakeInput.style.opacity = 0;
  fakeInput.style.height = 0;
  fakeInput.style.fontSize = '16px';

  document.body.prepend(fakeInput);

  fakeInput.focus();

  if (!header.classList.contains('search-active')) {
    header.classList.toggle('search-active');
    setTimeout(() => {
      searchInput.focus();
      searchInput.click();
    }, 1000);
  } else {
    searchForm.submit();
  }
});

searchButton.addEventListener('click', () => {
  searchForm.submit();
});

document.addEventListener('click', (event) => {
  const isClickInsideSearch = searchFormWrapper.contains(event.target);
  const fakeInput = document.querySelector('.fake-input');
  if (!isClickInsideSearch && header.classList.contains('search-active') && event.target !== searchButton) {
    header.classList.remove('search-active');
    fakeInput.remove();
  }
});

/* Header desktop menu navigation */

const mainSubMenus = headerNav?.querySelectorAll('.main-sub-menu');

function childrenRemoveActive(element) {
  const allActive = element.querySelectorAll('.active');
  allActive.forEach((item) => {
    item.classList.remove('active');
  });
}

function desktopNavToggleActive(element) {
  element.classList.toggle('active');
  main.classList.toggle('desktop-menu-active');
  header.classList.toggle('desktop-menu-active');
}

function desktopNavRemoveActive(element) {
  element.classList.remove('active');
  main.classList.remove('desktop-menu-active');
  header.classList.remove('desktop-menu-active');
}

mainSubMenus?.forEach((menu) => {
  const subMenus = menu.querySelectorAll('.sub-menu .menu-item-has-children');
  const backButtonMenu = menu.querySelectorAll('.back');

  menu.querySelector(':scope > a').addEventListener('click', (event) => {
    if (event.target.parentElement.classList.contains('active')) {
      desktopNavToggleActive(menu);
      childrenRemoveActive(menu);
    } else {
      mainSubMenus.forEach((item) => {
        desktopNavRemoveActive(item);
        childrenRemoveActive(item);
      });
      desktopNavToggleActive(menu);
    }
  });

  subMenus.forEach((sub) => {
    sub.querySelector(':scope > a').addEventListener('click', () => {
      sub.parentElement.classList.toggle('active');
      sub.classList.toggle('active');
    });
  });

  backButtonMenu.forEach((button) => {
    button.addEventListener('click', () => {
      button.parentElement.parentElement.classList.remove('active');
      button.parentElement.parentElement.parentElement.classList.remove('active');
    });
  });

  document.addEventListener('click', (event) => {
    const isClickInsideSearch = menu.contains(event.target);
    if (!isClickInsideSearch && menu.classList.contains('active') && !event.target.classList.contains('.main-sub-menu')) {
      desktopNavRemoveActive(menu);
      childrenRemoveActive(menu);
    }
  });
});

if (navigator.userAgent.indexOf('Safari') !== -1 && navigator.userAgent.indexOf('Chrome') === -1) {
  console.log('is safari');
  document.documentElement.style.setProperty('--variable-top', '-6px');
}
