// ________________________________________________________________________________ OWL CAROUSEL
$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
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


$("#myForm").submit(function(event){
	alert('Sus datos fueron registrados correctamente.');
});


});
// ________________________________________________________________________________ OWL CAROUSEL

