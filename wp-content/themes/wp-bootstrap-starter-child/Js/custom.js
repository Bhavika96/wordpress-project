$(window).scroll(function () {
            $(window).scrollTop() > 99 && ($(".site-header").addClass("sticky-header"), 
              $("body").addClass("top-padding")),
              $(window).scrollTop() < 100 && ($(".site-header").removeClass("sticky-header"), 
              $("body").removeClass("top-padding"))
        });

$( document ).ready( function(){
    var sidebarTopPos = $('.sidebar').offset().top - $('.site-header').height();
    var footerTopPos = $('footer').offset().top - $('.site-header').height() - $('.sidebar').height() - 450;
    $(window).scroll(function () {
          var scrollPos = $(this).scrollTop();
           if ( scrollPos >= sidebarTopPos ) {
               $('.sidebar').addClass('sidebar-sticky');
          }else{
            $('.sidebar').removeClass('sidebar-sticky');
          }
          if ( scrollPos >= footerTopPos ) {
               $('.sidebar').removeClass('sidebar-sticky');
               $('.sidebar').addClass('sidebar-sticky-none');
          }else{
            $('.sidebar').removeClass('sidebar-sticky-none');
          }
      });
  });  