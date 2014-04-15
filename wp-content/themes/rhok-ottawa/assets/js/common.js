jQuery( ".pic-center" )
  .mouseenter(function() {
  	//$('.pic-feature').innerHTML = "Random Hacks of Kindness is a global initiative to make the world a better place by developing solutions in response to challenges facing humanity.";
	jQuery('.pic-feature').css("background-image","url(../images/gallery/pic1_color.jpg)");
	jQuery('#rhok_brief').hide( ).delay(400).fadeIn(400); 

  })
  .mouseleave(function() {
	jQuery('.pic-feature').css("background-image","url(../images/gallery/pic1_bw.jpg)");
 	jQuery('#rhok_brief').hide();
 });



//projects page: get the height for each project item

jQuery('.proj-item').each(function() {
  var divh = jQuery(this).height();
  jQuery(this).find('.proj-traceline').css('height', divh + "px");
  //console.log(divh);
});