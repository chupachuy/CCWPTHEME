// ________________________________________________________________________________ PERFIL AUTOR
$('#btnAbrir').show();
$('#btnCerrar').hide();
//alert('JS Como Publicar');
$(function() {
	$('.lazy').Lazy({
		// your configuration goes here
		scrollDirection: 'vertical',
		effect: 'fadeIn',
		visibleOnly: true,
		onError: function(element) {
		    console.log('error loading ' + element.data('src'));
		}
	});
});

$('#buscAvanza').on('hidden.bs.collapse', function () {
	$('#btnAbrir').show();
	$('#btnCerrar').hide();
});
$('#buscAvanza').on('show.bs.collapse', function () {
	$('#btnAbrir').hide();
	$('#btnCerrar').show();
});
// ________________________________________________________________________________ PERFIL AUTOR