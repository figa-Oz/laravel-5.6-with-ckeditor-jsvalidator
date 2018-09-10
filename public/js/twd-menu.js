$(function(){

	var menu = $('#navbar'),
		pos = menu.offset();

		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('fix-nav')){
				menu.fadeOut('fast', function(){
                    $(this).removeClass('fix-nav').addClass('fixed-top').fadeIn('fast');
				});
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('fixed-top')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('fixed-top').addClass('fix-nav').fadeIn('fast');
				});
			}
		});

});