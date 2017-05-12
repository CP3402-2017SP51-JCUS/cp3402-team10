jQuery(document).ready(function() {
  jQuery('#nav-toggle').click(function(e) {
     if(jQuery('.menu').hasClass('bar'))
     {
       jQuery(".menu").toggleClass('bar')
       jQuery('body').animate({marginRight: '0px'},275)
     }
     else{
       jQuery(".menu").addClass('bar')
       jQuery('body').animate({marginRight: '285px'},400)
       e.stopPropagation();
       console.log("Toggled bar");
     }
   });
   jQuery('body').click(function(e) {
     if(e.target.id == "menu")
     {
       e.stopPropagation();
       console.log("Clicked bar");
     }
     else{
       if (jQuery('.menu').hasClass('bar')) {
         jQuery(".menu").toggleClass('bar')
         jQuery('body').animate({marginRight: '0px'},275)
       }
     }
   });
});
