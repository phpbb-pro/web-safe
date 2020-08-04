import 'instant.page';

document.querySelectorAll('.js-button-loading').forEach(elem => {
  elem.addEventListener('click', () => {
    const link = elem.href;

    elem.removeAttribute('href');
    elem.style.width = elem.offsetWidth + 'px';
    elem.innerHTML = '<div class="button-loader">loading...</div>';

    window.location.href = link;
  });
});
