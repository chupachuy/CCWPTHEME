<!--Footer-->

<!-- WHATS APP -->
<a href="https://api.whatsapp.com/send?phone=525545162170&amp;text=Quiero%20m%C3%A1s%20informaci%C3%B3n." class="float" target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicita información ahora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	      <div class="modal-body">
	      	<!-- Default form subscription -->
	      	<div class="contact-form">
	      		<?php echo apply_shortcodes( '[contact-form-7 id="145" title="Contacto2"]' ); ?>
	      	</div>				
	      </div>

    </div>
  </div>
</div>


<?php if ( !is_home() ) { ?>
    <div class="fixedbutton">
		<a href="<?php bloginfo('url'); ?>"><i class="fas fa-home"></i></a>
	</div>    
<?php } ?>

	<footer class="page-footer text-center">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<br/>
					<p class="textFoot"><span class="spTextFoot">Contacto</span></p>
					<p>
						<a target="_blank" href="https://www.facebook.com/comunicacioncientificapublicaciones"><i class="fab fa-facebook fa-2x"></i></a> 
						<a target="_blank" href="https://twitter.com/ComunidadCient2"><i class="fab fa-twitter fa-2x"></i></a>
						<a target="_blank" href="https://www.instagram.com/comunicacion.cientifica/"><i class="fab fa-instagram fa-2x"></i><a href="https://wa.me/525545162170?text=mensaje%20desde%20comunicacioncientifica.com"><i class="fab fa-whatsapp  fa-2x"></i></a><a href="mailto:infocomunicacioncientifica@gmail.com"><i class="far fa-envelope fa-2x"></i></a> <a href="https://telegram.me/comunicacioncientifica"><i class="fab fa-telegram fa-2x"></i></a></p>
					Móvil, WhatsApp y Telegram: <a href="https://wa.me/525545162170?text=mensaje%20desde%20comunicacioncientifica.com">(52) 55 4516-2170</a>  | <a href="https://wa.me/525527124734?text=mensaje%20desde%20comunicacioncientifica.com"><a href="https://wa.me/525527124734?text=mensaje%20desde%20comunicacioncientifica.com">(52) 55 2712-4734</a></a><br>Oficina: (52) 55 5696-6541 <br><a href="mailto:infocomunicacioncientifica@gmail.com">infocomunicacioncientifica@gmail.com</a>
					<br/>
					<strong>Dirección</strong>: Av. Insurgentes Sur 1602, Piso 4, suite 400, Crédito Constructor, Benito Juárez, CP 03940, Ciudad de México, CDMX
					<br></p>
					<br>
				</div>
			</div>
		</div>

	</footer>
	<!--/.Footer-->

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mdb.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php bloginfo('template_url'); ?>/js/owlcarousel/owl.carousel.min.js"></script>
	<!-- Lazy Load -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lazy.min.js"></script>

	

	<!-- Map -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mapael/js/jquery.mapael.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/mapael/js/maps/world_countries.js" charset="utf-8"></script>
	<!-- SECTIONS --->

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accCatalogo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accColecciones.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accComoPublicar.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accComunicacion.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accContacto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accHome.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accImpactoInvest.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accPerfilAutor.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accQueEsperar.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accServEdit.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accTransparencia.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accPerfilLibro.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
	
	<!-- Initializations -->
	<script type="text/javascript">
		// Animations initialization
		//new WOW().init();

	</script>
	<script>

		const d = document;


		function searchFilter(input, selector){
			d.addEventListener("keyup", (e) => {
				if(e.target.matches(input)){
					//console.log(e.key);
					const minusculas = e.target.value.toLowerCase();
					console.log(minusculas);
					//console.log(e.target.value)
					d.querySelectorAll(selector).forEach(el => el.textContent.includes(e.target.value)
					/*d.querySelectorAll(selector).forEach(el => el.textContent.toLowerCase().includes(e.target.value)*/
						? el.classList.remove("filter")
						: el.classList.add("filter")
					)				
				}
			});
		}

		searchFilter(".card-filter", ".book-search");


        $(document).ready(function(){

          //$(".alert").alert();
          
          //$("#modalEvento").modal("show");

          $("#Formulario2").submit(function( event ){
          event.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'contact2.php',
            data: $(this).serialize(),
            success: function(data){
              $("#respuesta2").html(data);
              $("#respuesta2").css("display", "block");

              setTimeout(function() {
                $(".alert").fadeOut(1500);
              },3000);

              document.getElementById('Formulario2').reset();
            }
          });

          return false;
        });
        
        /** OCULTAR EL ID DE UN POST */
          $("#522").hide();

          
        });


    </script>

    <script type="text/javascript">
        function evitarSpam() {
          // Si el campo está vacío, envía el formulario.
          if(!document.getElementById("nospam").value) { 
            return true;
          } 
           // Si el campo tiene algún valor, es un spam bot
          else {
            return false;
          }
        }


      </script>
      <script type="text/javascript">

      	//const btn = document.getElementsByClassName('copy-btn');
      	//const text  = document.getElementsByClassName('copy-text');

      	var boton = document.querySelector('.copy-btn');
        var message = document.querySelector('.message');

          boton.addEventListener('click', function(event) {
            // seleccionar el texto 

            var textCopy = document.querySelector('.copy-text');
            var range = document.createRange();
            range.selectNode(textCopy);
            window.getSelection().addRange(range);

            try {
              // intentar copiar el contenido seleccionado
              var resultado = document.execCommand('copy');
              message.innerHTML = "Copiado al portapapeles";
              message.style.display = "block";
              //setTimeout(() => message.innerHTML = "", 5000);
              console.log(resultado ? 'Texto Copiado' : 'No se pudo copiar el Texto');
            } catch(err) {
              console.log('ERROR al intentar copiar el Texto');
            }

            // eliminar el texto seleccionado
            window.getSelection().removeAllRanges();
            // cuando los navegadores lo soporten, habría
            // que utilizar: removeRange(range)
          });

          

					/*** CREATE TABLE PDF */

					let mainTable = document.getElementById("ficha-catalografica");
					let pdfFile = document.getElementById("pdfFile");

					console.log(pdfFile)

					pdfFile.addEventListener("click", function (){
						let doc = new jsPDF('p', 'pt', 'letter');
						let margin = 20;

						let scale = (doc.internal.pageSize.width - margin * 2) / document.body.clientWidth;
						let scale_mobile = (doc.internal.pageSize.width - margin * 2) / document.body.getBoundingClientRect();

						console.log("aca");

						// Checking 

						if(/Android|webOS|iPhone|iPad|iPod|Blackberry|IEMobile|Opera MIni/i.test(navigator.userAgent)){
							// Mob¡l
							doc.html(mainTable, {
								x: margin,
								y: margin,
								html2canvas: {
									scale: scale_mobile,
								},
								callback: function(doc){
									doc.output('dataurlnewwindow', {filename: 'ficha_vatalografica.pdf'});
								}
							})
						} else {
							// PC
							doc.html(mainTable, {
								x: margin,
								y: margin,
								html2canvas: {
									scale: scale,
								},
								callback: function(doc){
									doc.output('dataurlnewwindow', {filename: 'ficha_vatalografica.pdf'});
								}
							})


						}



					});

					/*pdfFile.onlick = */


		

		function searchFilter(input, selector){
			d.addEventListener("keyup", (e) => {
				if(e.target.matches(input)){
					//console.log(e.key);
					const minusculas = e.target.value.toLowerCase();
					console.log(minusculas);
					//console.log(e.target.value)
					d.querySelectorAll(selector).forEach(el => el.textContent.includes(e.target.value)
					/*d.querySelectorAll(selector).forEach(el => el.textContent.toLowerCase().includes(e.target.value)*/
						? el.classList.remove("filter")
						: el.classList.add("filter")
					)				
				}
			});
		}

		searchFilter(".card-filter", ".book-search");

      </script>

	<?php wp_footer(); ?>
</body>

</html>