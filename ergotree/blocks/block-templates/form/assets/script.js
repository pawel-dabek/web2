/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */

// eslint-disable-next-line prefer-const
let attachText = '';

document.addEventListener('aos:in:tada', ({ detail }) => {
  detail.classList.add('tada-animation');
});

function removeInvalidOnChange(item) {
  item.addEventListener('change', () => {
    if (item.classList.contains('wpcf7-not-valid')) {
      item.classList.remove('wpcf7-not-valid');
      item.setAttribute('aria-invalid', 'false');
      item.parentNode.querySelector('span').remove();
    }
  });
}

function removeInvalidOnKeyup(item) {
  item.addEventListener('keyup', () => {
    if (item.classList.contains('wpcf7-not-valid')) {
      item.classList.remove('wpcf7-not-valid');
      item.setAttribute('aria-invalid', 'false');
      item.parentNode.querySelector('span').remove();
    }
  });
}

function initForm(element = document) {
  const allWrappers = element.querySelectorAll('.single-input');
  allWrappers.forEach((item) => {
    const inputSpan = item.querySelector('span');
    const label = item.querySelector('label');
    inputSpan.appendChild(label);
  });

  const allInputs = element.querySelectorAll('.single-input input');
  allInputs.forEach((item) => {
    removeInvalidOnChange(item);
    removeInvalidOnKeyup(item);
  });

  const allTextareas = element.querySelectorAll('.wpcf7-textarea');
  allTextareas.forEach((item) => {
    removeInvalidOnChange(item);
    removeInvalidOnKeyup(item);
  });

  const allAccepts = element.querySelectorAll('.wpcf7-acceptance');
  allAccepts.forEach((item) => {
    item.addEventListener('click', () => {
      if (item.classList.contains('wpcf7-not-valid')) {
        item.classList.remove('wpcf7-not-valid');
        item.querySelector('input').setAttribute('aria-invalid', 'false');
        item.parentNode.querySelector('.wpcf7-not-valid-tip').remove();
      }
    });
  });

  const allForms = element.querySelectorAll('.wpcf7-form');
  allForms.forEach((item) => {
    item.addEventListener('change', () => {
      if (item.classList.contains('invalid')) {
        const allInvalid = item.querySelectorAll('.wpcf7-not-valid');
        if (!allInvalid.length > 0) {
          item.classList.remove('invalid');
        }
      }
    });
  });

  const modal = document.querySelector('.modal-contact');

  allForms.forEach((item) => {
    if (!item.querySelector('.all-rows').classList.contains('without-modal')) {
      item.addEventListener('wpcf7mailsent', () => {
        if (item.parentElement.id === 'wpcf7-f2110-o1') {
          modal.querySelector('.newsletter-text').style.display = 'block';
          modal.querySelector('.message-text').style.display = 'none';
        }
        modal.classList.add('open');
      });
    }
  });

  modal?.querySelector('.modal-close').addEventListener('click', () => {
    modal.querySelector('.newsletter-text').style.display = 'none';
    modal.querySelector('.message-text').style.display = 'block';
    modal.classList.remove('open');
  });

  modal?.querySelector('.modal-close-outer').addEventListener('click', () => {
    modal.querySelector('.newsletter-text').style.display = 'none';
    modal.querySelector('.message-text').style.display = 'block';
    modal.classList.remove('open');
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const fileAttachParent = document.querySelector('.cv-file');
  const fileAttach = document.querySelector('.wpcf7-file');

  const fileLabel = document.createElement('label');
  fileLabel?.setAttribute('for', 'cv-file');
  fileLabel?.classList.add('cv-file-label');
  fileAttachParent?.appendChild(fileLabel);
  fileLabel.innerHTML = attachText;

  fileAttach?.addEventListener('change', () => {
    if (fileAttach?.files.length > 0) {
      const fileName = fileAttach?.files[0].name;
      const fileExt = fileName.split('.').pop();
      const shortFileName = fileName.length > 8 ? `${fileName.substring(0, 8)}...${fileExt}` : fileName;
      fileLabel.innerHTML = shortFileName;
    } else {
      fileLabel.innerHTML = attachText;
    }
  });
  initForm();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=form', (el) => {
    if (!!el[0].querySelector('.form') && !el[0].querySelector('.form').classList.contains('block-js-added')) {
      initForm(el[0]);
      el[0].querySelector('.form').classList.add('block-js-added');
    }
  });
  window.acf.addAction('remount', (el) => {
    if (!!el[0].querySelector('.form') && !el[0].querySelector('.form').classList.contains('block-js-added')) {
      initForm(el[0]);
      el[0].querySelector('.form').classList.add('block-js-added');
    }
  });
  window.acf.addAction('unmount', (el) => {});
}
/* -- END -- */
