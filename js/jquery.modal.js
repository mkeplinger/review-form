$(function()
{
	$('.modal-opener').on('click', function()
	{
		if( !$('#sky-form-modal-overlay').length )
		{
			$('body').append('<div id="sky-form-modal-overlay" class="sky-form-modal-overlay"></div>');
		}		
	
		$('#sky-form-modal-overlay').on('click', function()
		{
			$('#sky-form-modal-overlay').fadeOut();
			$('.sky-form-modal').fadeOut();
		});
		
		form = $($(this).attr('href'));
		product = $(this).data('product');
		
		if(typeof product != "undefined") {
			//	Add product name in the form title
			if($(form).find("header").length) $(form).find("header").append(' for ' + product);
			$("#productname").val(product);
		} 
		
		$('#sky-form-modal-overlay').fadeIn();
		form.css('top', '50%').css('left', '50%').css('margin-top', -form.outerHeight()/2).css('margin-left', -form.outerWidth()/2).fadeIn();
		
		return false;
	});
	
	$('.modal-closer').on('click', function()
	{
		$('#sky-form-modal-overlay').fadeOut();
		$('.sky-form-modal').fadeOut();
		
		return false;
	});
});