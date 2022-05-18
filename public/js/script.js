$(document).ready(function () {
   $('.header__burger').click(function (event) {
      $('.header__burger,.header__menu').toggleClass('active');
      $('body').toggleClass('lock');

   });
   $("a.header__link").click(function (event) {
      $('.header__burger,.header__menu').toggleClass('active');
      $('body').toggleClass('lock');
   });
});