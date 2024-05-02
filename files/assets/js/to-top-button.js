jQuery('.to-top-button').hide();
jQuery(window).scroll(function(){
  const value=400;
  const scrolling = jQuery(window).scrollTop();
  if(scrolling>value){
    jQuery('.to-top-button').fadeIn();
  } else{
    jQuery('.to-top-button').fadeOut();
  }
});
jQuery('.to-top-button').click(function(){
  jQuery('html, body').animate({scrollTop:'0px'},800);
  return !1;
});
