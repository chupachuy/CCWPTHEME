<?php
/*
Template Name: Agenda
*/
?>
<?php get_header(); ?>
<!--Main layout-->

<main>
    <section class="mt-5 wow fadeIn">

    <div class="container">
      <div class="row justify-content-center">
            <div class="col-11 col-md-8">
                <br /><br /><br /><br /><br />
            </div>
            <div class="col-11 col-md-8">
                <h1 class="tituse1">Agenda</h1>
                <p class="pgen">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec nunc nisl. Cras lobortis neque vel massa tristique, molestie lacinia tortor interdum. Phasellus nibh arcu, dignissim nec dolor nec, scelerisque consequat ligula. Etiam elementum facilisis tincidunt. Duis sit amet ligula at quam tempor gravida. Suspendisse pretium consequat porttitor. </p>
                <br />
            </div>
        </div>
    </div>
        
    </section>
    <div class="container">
    </div>
    <div class="container agenda">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8">
                <div class="contact-form">
                    <?php echo apply_shortcodes( '[contact-form-7 id="1049" title="agenda"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="separar"></div>
</main>


<?php get_footer(); ?>

<!--

Nombre: (obligatorio)
Institución: (obligatorio)
Disciplina: (obligatorio)
Correo: (obligatorio)
Teléfono: (opcional)


[contact-form-7 id="1049" title="agenda"]

-->