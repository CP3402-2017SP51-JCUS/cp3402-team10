//Sidebar Menu//
jQuery('body').click(function(e) {
  if(e.target.id=="nav-toggle" || e.target.id=="menu-icon"){
    if( jQuery('.menu').css('width') == '0px') {
      jQuery('.menu').animate({ 'width': '285px' }, 300);
      jQuery('body').animate({ 'margin-right': '285px' }, 300);
      jQuery('.menu-title').animate({'margin-right': '285px'}, 300);
      console.log("A");
    }
    else {
      jQuery('.menu').animate({ 'width': '0px' }, 300);
      jQuery('body').animate({ 'margin-right': '0px' }, 300);
      jQuery('.menu-title').animate({'margin-right': '1em'}, 300);
      console.log("B");
    }
  }
  else if(e.target.id== "menu"){
      console.log('menu');
   }
  else{
      jQuery('.menu').animate({ 'width': '0px' }, 300);
      jQuery('body').animate({ 'margin-right': '0px' }, 300);
      jQuery('.menu-title').animate({'margin-right': '1em'}, 300);
      console.log("C");
  }
});
//Sidebar Menu//
