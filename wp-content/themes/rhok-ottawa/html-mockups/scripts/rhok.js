
$( ".pic-center" )
  .mouseenter(function() {
  	//$('.pic-feature').innerHTML = "Random Hacks of Kindness is a global initiative to make the world a better place by developing solutions in response to challenges facing humanity.";
	$('.pic-feature').css("background-image","url(./images/gallery/pic1_color.jpg)");
	$('#rhok_brief').hide( ).delay(400).fadeIn(400); 

  })
  .mouseleave(function() {
	$('.pic-feature').css("background-image","url(./images/gallery/pic1_bw.jpg)");
 	$('#rhok_brief').hide();
 });



//projects page: get the height for each project item

$('.proj-item').each(function() {
  var divh = $(this).height();
  $(this).find('.proj-traceline').css('height', divh + "px");
  //console.log(divh);
});