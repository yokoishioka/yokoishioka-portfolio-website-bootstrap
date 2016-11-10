$(document).ready(function() {
   $('.remove-toggle-arrow').each(function() {
       $(this).append("<span class='glyphicon glyphicon-menu-down'></span>");

   });
    $('.collapse').each(function() {
        $(this).prepend("<span class='glyphicon glyphicon-remove'></span>");
    });
   $('.glyphicon-remove').mouseenter(function() {
      $(this).parent().siblings('.remove-toggle-arrow').children('span').slideUp();
      $(this).parent().siblings('.remove-toggle-arrow').children('span').slideDown();
   });
    $('.glyphicon-remove').click(function() {
        $(this).parent().removeClass('in');
        $(this).parent().siblings('.remove-toggle-arrow').children('span').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
   });
   $('.remove-toggle-arrow').mouseenter(function() {
      $(this).children('span').slideUp();
      $(this).children('span').slideDown(); 
   });
   $('.remove-toggle-arrow').click(function() {
       if ($(this).children('span').hasClass('glyphicon-menu-down')) {
            $(this).children('span').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
            $(this).siblings('collapse').addClass('in');
       }
       else {
           $(this).children('span').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
           $(this).siblings('collapse').removeClass('in');
       }
   });
});
