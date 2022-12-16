/* eslint-disable no-param-reassign */
document.addEventListener('DOMContentLoaded', () => {
  const paginationLinks = document.querySelectorAll('.pagination a');
  paginationLinks.forEach((link) => {
    link.href += '#blog';
  });
});
