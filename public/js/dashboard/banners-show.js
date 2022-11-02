const formEl = document.querySelector('.form-dash');
const imgChooserEl = formEl.querySelector('input[name="image"]');
const submitEl = document.querySelector('[data-action="submit"]');
const bannerInner = document.querySelector('.banner-inner');
const bannerTitle = document.querySelector('.banner__title');
const bannerSubitle = document.querySelector('.banner__subtitle');
const bannerText = document.querySelector('.banner__text');

imgChooserEl.addEventListener('change', (evt) => {
  const file = evt.target.files[0];

  imgChooserEl.nextElementSibling.value = file.name;
});

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  formEl.submit();
});

formEl.title.addEventListener('input', (evt) => {
  bannerTitle.children[0].textContent = evt.target.value;
});
