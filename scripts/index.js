$(document).ready(function() {
   $('nav.nav').click(function() {
      var navSpan = $(this).children('span');
      if (navSpan.hasClass('glyphicon-menu-down')) {
           $(this).css("color","white");
           navSpan.removeClass('glyphicon-menu-down');
           navSpan.addClass('glyphicon-menu-up');
           $(this).siblings('article').slideDown();
      }
      else {
           $(this).css("color", "#444444");
           navSpan.removeClass('glyphicon-menu-up');
           navSpan.addClass('glyphicon-menu-down');
           $(this).siblings('article').slideUp();
      }
   });
   $('nav.nav').mouseenter(function() {
      $(this).children('span').slideUp();
      $(this).children('span').slideDown();
   });
   $('article.collapse').each(function() {
      $(this).prepend("<span class='glyphicon glyphicon-remove'></span>");
   });
   $('.glyphicon-remove').mouseenter(function() {
      $(this).css("color","#999999");
      $(this).parent().siblings('nav.nav').children('span').slideUp();
      $(this).parent().siblings('nav.nav').children('span').slideDown();
   });
   $('.glyphicon-remove').mouseleave(function() {
      $(this).css("color", "#444444");
   });
   $('.glyphicon-remove').click(function() {
      $(this).parent().slideUp();
      $(this).parent().siblings('nav.nav').css("color","#444444");
      $(this).parent().siblings('nav.nav').children('span').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
   });
});
