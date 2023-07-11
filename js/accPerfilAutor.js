// ________________________________________________________________________________ PERFIL AUTOR
//alert('JS perfil Autor');
// ________________________________________________________________________________ PERFIL AUTOR

$(document).ready(function(){
	// __________________________________________________________________ OWL CAROUSEL - PERFIL AUTOR : TÍTULOS / PUBLICACIONES
	$("#owl_carr-vista_p").owlCarousel({
		navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        nav:true,
        dots:true,
        margin:10,
        responsive:{
			0:{
				items:2
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
});
	// _______________________________________________________________ OWL CAROUSEL - PERFIL AUTOR : TÍTULOS / PUBLICACIONES