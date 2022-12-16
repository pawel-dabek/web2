/* eslint-disable no-unused-vars */
/* eslint-disable camelcase */
function init_clip_cpt(element = document) {
  const video = element.querySelector('.video iframe');
  const videoDatasrc = video?.getAttribute('data-src');
  const thumbnail = element.querySelector('.video .thumbnail');
  const videoId = videoDatasrc?.split('embed/')[1];

  if (videoId) {
    const thumbnailUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
    const img = document.createElement('img');
    img.src = thumbnailUrl;
    thumbnail?.appendChild(img);
  }

  thumbnail?.addEventListener('click', () => {
    thumbnail.remove();
    video.setAttribute('src', videoDatasrc);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  init_clip_cpt();
});

/* -- Admin JS START -- */
if (window.acf) {
  window.acf.addAction('render_block_preview/type=clip-cpt', (el) => {
    if (!!el[0].querySelector('.clip-cpt') && !el[0].querySelector('.clip-cpt').classList.contains('block-js-added')) {
      init_clip_cpt(el[0]);
      el[0].querySelector('.clip-cpt').classList.add('block-js-added');
    }
  });
}
/* -- END -- */
