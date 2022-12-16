/* eslint-disable new-cap */
/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */

function init_hero_pc(element = document) {
  function appendArrows() {
    setTimeout(() => {
      const list = document.querySelector('#autoComplete_list_1');
      const arrowUp = document.createElement('div');
      const arrowDown = document.createElement('div');
      arrowUp.classList.add('arrow-up');
      arrowUp.classList.add('active');
      arrowDown.classList.add('arrow-down');
      list.insertBefore(arrowUp, list.childNodes[0]);
      list.appendChild(arrowDown);

      arrowUp.addEventListener('click', () => {
        list.scrollBy(0, -150, 'smooth');
      });

      arrowDown.addEventListener('click', () => {
        list.scrollBy(0, 150, 'smooth');
      });

      list.addEventListener('scroll', () => {
        const scroll = document.querySelector('#autoComplete_list_1').scrollTop;
        const height = document.querySelector('#autoComplete_list_1').scrollHeight;
        if (scroll === 0) {
          document.querySelector('.arrow-up').classList.add('active');
        }
        if (scroll > 0) {
          document.querySelector('.arrow-up').classList.remove('active');
        }
        if (scroll >= height - 300) {
          document.querySelector('.arrow-down').classList.add('active');
        }
        if (scroll < height - 301) {
          document.querySelector('.arrow-down').classList.remove('active');
        }
      });
    }, 100);
  }

  const resultItem = { highlight: true };

  const autoCompleteJS_07 = new autoComplete({
    selector: '#autoComplete_07',
    placeHolder,
    data,
    threshold: 0,
    resultsList: { maxResults: undefined },
    resultItem,
    events: {
      input: {
        focus(event) {
          autoCompleteJS_07.start();
          appendArrows();
        },
        selection(event) {
          const selection = event.detail.selection.value;
          autoCompleteJS_07.input.value = selection;
          appendArrows();
        },
      },
    },
  });

  const input = document.querySelector('#autoComplete_07');
  const datalist = document.querySelector('.datalist');

  document.querySelector('#autoComplete_07').addEventListener('selection', (event) => {
    const option = datalist?.querySelector(`option[value="${event.detail.selection.value}"]`);
    const url = option?.getAttribute('data-slug');
    if (url) {
      window.location.href = url;
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_hero_pc();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=hero-pc', (el) => {
    if (!!el[0].querySelector('.hero-pc') && !el[0].querySelector('.hero-pc').classList.contains('block-js-added')) {
      init_hero_pc(el[0]);
      el[0].querySelector('.hero-pc').classList.add('block-js-added');
    }
  });
  window.acf.addAction('unmount', (el) => {});
}
/* -- END -- */
