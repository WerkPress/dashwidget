$j = jQuery.noConflict();
$j(document).ready(function(){

	$j('#ww_form').submit(function(event){
		event.preventDefault();
		var data = {};
		data.name = $j('#ww_name').val();
		data.company = $j('#ww_company').val();
		data.email = $j('#ww_email').val();
		data.website = $j('#ww_website').val();
		data.theme = $j('#ww_theme').val();
		data.hosting = $j('#ww_hosting').val();
		data.changes = $j('#ww_changes').val();
		data.budget = $j('#ww_budget').val();
		console.log(data);
		
		$j.ajax({
			type: 'POST',
			url: ajaxcontactajax.ajaxurl,
			data: data,
			action: 'wwSendMail',
			success: function(data) {
				console.log(data);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert(errorThrown);
			}
			
		});
	});
});