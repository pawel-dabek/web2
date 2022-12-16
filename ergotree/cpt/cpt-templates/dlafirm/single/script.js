const link = document.querySelector('#breadcrumbs span span span a');
const href = link.getAttribute('href').replace(/%20/g, '-');
link.setAttribute('href', href);
