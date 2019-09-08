

$( function(){

	$('.active-drop, .submenu').mouseover(function() {
        
		$('.submenu').addClass('ativar-block');
	});
	$('.active-drop, .submenu').mouseout(function() {
		$('.submenu').removeClass('ativar-block');
	});
});