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
