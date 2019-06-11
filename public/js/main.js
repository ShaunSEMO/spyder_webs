$(document).ready(function(){
  $('body').css('display', 'none');
  $('.header-content *').css('display', 'none');
  $('.about-img').css('display','none');
  $('.about-p').css('display','none');
  $('.readmore').css('display','none');
  $('.about-sec').css('display','none');
  $('.services-sec').css('display','none');
  $('.sec- ').css('-*display','none');
  $('.prices-sec').css('display','none');
  $('.p1').css('display','none');
  $('.p2').css('display','none');
  $('.p3').css('display','none');
  $('.contact-sec').css('display','none');

  console.log($('.body').height());

  $('body').fadeIn('slow', function() {
    $('.header-img').fadeIn('slow', function(){
      $('.subhead').fadeIn('slow', function() {
        $('.slidedown').slideDown(1500, function() {
          function refreshData(){
            x = 1.6;  // 5 Seconds
            $('.slidedown').css('display','none')
            $('.slidedown').slideDown(1400)
            setTimeout(refreshData, x*1000);
          }
          refreshData();
        })
      });
    });
  });


  $(window).scroll(function() {

    if($(this).scrollTop() > 200){
      $('.about-sec').fadeIn('slow');
    };

    if($(this).scrollTop() > 400) {
      $('.about-img').fadeIn('slow');
    };

    if($(this).scrollTop() > 600) {
      $('.about-p').slideDown('slow');
    };

    if($(this).scrollTop() > 900) {
      $('.readmore').fadeIn('slow');
    };

    if($(this).scrollTop() > 1050) {
      $('.sec-cont').fadeIn('slow');
    };

    if($(this).scrollTop() > 1350) {
      $('.services-sec').fadeIn('slow');
    };

    if($(this).scrollTop() > 3500) {
      $('.prices-sec').fadeIn('slow');
    };

    if($(this).scrollTop() > 3850) {
      $('.p1').slideDown('slow');
    };

    if($(this).scrollTop() > 4450) {
      $('.p2').slideDown('slow');
    };

    if($(this).scrollTop() > 5100) {
      $('.p3').slideDown('slow');
    };

    if($(this).scrollTop() > 5700) {
      $('.contact-sec').slideDown('slow');
    };

  });

});