var idContDes = '';
jQuery(document).ready(function(){
  jQuery('.paraContDes, .paraContDes2, .paraContDes3').on('click', descCont);
  idContDes = jQuery('.paraContDes, .paraContDes2, .paraContDes3').attr("id");
});

function descCont(){
  $.ajax({
	url: 'https://comunicacion-cientifica.com/wp-content/themes/comunicacioncientifica/reqConDes.php',
	type: 'POST',
	data: {
		'varjs_idContDes':idContDes
	},
	success: descCont_resp,
	error: descCont_error
  });
}

function descCont_resp(_resp) {
  jQuery('#contContDesc').html(_resp)
}

function descCont_error(xhr, ajaxOptions, thrownError) {
	alert('Error:\n'+xhr.status+'/'+thrownError);
}
