jQuery(document).scroll(function(){
  if(jQuery(this).scrollTop()> jQuery(window).height()){
    jQuery('#topbar').css({
      'background-color': 'black',
      'opacity': '0.6',
      'transition': '0.5s'});
    console.log('true');
  }
  else{
    jQuery('#topbar').css({
      'background-color': 'transparent',
      'opacity': '1.0',
      'transition': '0.5s'});
      console.log("false");
  }
});
