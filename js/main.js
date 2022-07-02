(function ($) {
  $(document).ready(function () {
    $('.menu-bar').click(function () {
      $('.main-menu').slideToggle();
    });
    $('.add_post_form_open_btn').click(function () {
      $('.add-post-form-area').css('display', 'block');
    });
    $('.add_post_form_close_btn').click(function () {
      $('.add-post-form-area').css('display', 'none');
    });
    $('.create_new_post').click(function () {
      $('.add-post-form-area').css('display', 'block');
    });
    $('p.slice').text(function () {
      var text = $(this).text(),
        length = text.length;

      if (length > 95) return text.substr(0, 95) + ' ......';
      else return text;
    });
  });
})(jQuery);

(() => {
  const currentLocaton = location.href;
  const menuItem = document.querySelectorAll('.main-menu a');
  const menuLength = menuItem.length;

  for (let index = 0; index < menuLength; index++) {
    if (menuItem[index].href === currentLocaton) {
      menuItem[index].className = 'active';
    }
  }
})();

/* ----toggle style switcher ---------------*/
const styleSwitcherToggler = document.querySelector('.style-switcher-toggler');
styleSwitcherToggler.addEventListener('click', () => {
  document.querySelector('.style-switcher').classList.toggle('open');
});

//hide style  switcher on window scroll
window.addEventListener('scroll', () => {
  if (document.querySelector('.style-switcher').classList.contains('open')) {
    document.querySelector('.style-switcher').classList.remove('open');
  }
});

/* ----theme colors ---------------*/
const alternateStyles = document.querySelectorAll('.alternate-style');

function setActiveStyle(color) {
  localStorage.setItem('color', color);
  changeColor();
}
function changeColor() {
  alternateStyles.forEach((style) => {
    if (localStorage.getItem('color') === style.getAttribute('title')) {
      style.removeAttribute('disabled');
    } else {
      style.setAttribute('disabled', "'true");
    }
  });
}
