(function($) {
  $.fn.iconview = function() {
    set_icons();
  }
})(jQuery);

//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////

/* give us some rest... */

var timeOut = 2000;

/* update all icon-fields on the page (pageload / -change or modal-entry) */

function set_icons()
  {
		
	$('input.icon_text').each(function()
	{
		set_icon($(this));
	});

}

/* update a single icon-field, when the icon-field is altered */

function set_icon(field)
{
	
	var classname = 'icon entypo-dot' ;
	icon_img = field.val().replace(/\s+/g,'').toLowerCase();
	if(icon_img.indexOf("fa-") === 0) {
		classname = 'icon fa '+icon_img ;
	} else {
		classname = 'icon entypo-'+icon_img ;
	}
	field.next().find('i.icon').removeClass().addClass(classname).parent().removeClass().addClass('field-icon icon-change');
	setTimeout(function(){$('.field-icon').removeClass('icon-change');},750);
		
}

/* wait 'till the page is loaded and all is clear */

/* initially fire all icon-fields */

$(function(){

	$(document).on('keyup blur','input.icon_text',function(e){
		set_icon($(this));
	});
	
	$('a[data-modal=""]').on('click',function() {
		console.log("modal");
  	setTimeout(function(){set_icons();},timeOut);
  });

});