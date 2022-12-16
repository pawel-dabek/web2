const searchPageIcon = document.querySelector('.search-icon');
const searchPageForm = document.querySelector('.main-search form');

searchPageIcon.addEventListener('click', () => {
  searchPageForm.submit();
});
