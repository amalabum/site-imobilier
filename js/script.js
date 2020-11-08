    function bg() {
    $('.form').animate({'margin-top':'500px' , opacity: '19px'},1000);
      $('.pa').animate({'margin-left':'0px' , opacity: '19px'},1000);
  
}
$('.message a').click(function() {
	$('form').animate({height:"toggle" , opacity: "toggle"}, 1500);
	
});
$('button').fadeTo('normal', 0.8);
$('.lol').css({
color : 'red'
});