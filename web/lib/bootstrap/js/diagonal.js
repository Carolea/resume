/*------------------------------Animation diagonale---------------------------------------*/


$(document).ready(function() {
/**
* Variables
*/
var $button = $('.button');
var $menu = $('.menu');
/**
* Open / Close Menu Functionality
*/

function openMenu() {
  $menu.addClass('active');  
}
    

function closeMenu() {
  $menu.removeClass('active');  
}

closeMenu();
/**
* On Button Click
*/
$button.on('click', function(e) {

e.preventDefault();
var $anim = this;
    
    openMenu();
    console.log([this]);
  setTimeout(function () {
      for(var i = 0; i < $anim.attributes.length; i++){
          console.log( [$anim.attributes[i]] )
          if($anim.attributes[i].name == 'href'){
              document.location.href = $anim.attributes[i].value
          }
      }
    // closeMenu();
  }, 1500);
});

}); // jQuery End


/*--------------------------Animation portfolio-------------------------------------------*/

// JavaScript Document
// Claudio Gomboli . the EGGS LAB
// 2012 / 8 / 29
// Responsive animated gallery

$('.portfolio').each(function(index)
{
    $(this).attr('id', 'img' + (index + 1));
});
    
$('.portfolio').each(function(){
  $('#navi').append('<div class="circle"></div>');
});
  
$('.circle').each(function(index)
{
    $(this).attr('id', 'circle' + (index + 1));
});   
   
$('.portfolio').click(function(){
if($(this).hasClass('opened')){
    $(this).removeClass('opened');
    $(".portfolio").fadeIn("fast");
    $(this).find('.ombra').fadeOut();
    $("#navi div").removeClass("activenav");
}
else{
	var indexi = $("#maincontent .portfolio").index(this) + 1;
    $(this).addClass('opened'); 
    $(".portfolio").not(this).fadeOut("fast");
    $(this).find('.ombra').fadeIn();
    $("#circle" + indexi).addClass('activenav'); 
}
});	

//navi buttons
$("#navi div").click(function() {
    console.log ("click");
if($(this).hasClass("activenav")){
	return false;
}
		
	$("#navi div").removeClass("activenav");
	$(".portfolio").removeClass('opened');
	$(".portfolio").show();
        $('.ombra').hide();
		
	var index = $("#navi div").index(this) + 1;
	$("#img" + index).addClass('opened'); 
    $(".portfolio").not("#img" + index).fadeOut("fast");
    $("#img" + index).find('.ombra').fadeIn();
        
    $(this).addClass("activenav");
});