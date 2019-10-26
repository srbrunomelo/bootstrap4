/*
$(document).ready(function() {
    $('#example').DataTable();
} );


jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 443) {
		jQuery(".fb-page").addClass("fixo");
	} else {
		jQuery(".fb-page").removeClass("fixo");
	}
});

$( function(){

	$('.active-drop, .submenu').mouseover(function() {
        
		$('.submenu').addClass('ativar-block');
	});
	$('.active-drop, .submenu').mouseout(function() {
		$('.submenu').removeClass('ativar-block');
	});
});
*/

$(document).ready(function(){ 
	$('.action-close').click(function(){ 
		$(".navigation").animate({left: '-280px'}, {duration: 250});
		$('.navigation').css({background: '#05367F'}, {duration: 200});
		$('.hide-navigation').html('<i class="fas fa-angle-right"></i>');
		$('.content').animate({marginLeft: '70px'}, {duration: 250});
		$('.action-close').addClass('open-navigation');
		$('.action-close').removeClass('hide-navigation'); 
	})	
	$('.open-navigation').click(function(){  
		console.log('gdfgdf');
		//$(".navigation").animate({left: '300px'}, {duration: 250});
		
	})
});
 
 