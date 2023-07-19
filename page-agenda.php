<?php
/*
Template name: Calendly
*/
?>

<?php get_header(); ?>
<div class="separar"></div>
<div class="separar"></div>
<section class="mt-5">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="tituse1">Agende aquí una asesoría personal</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Principio del widget integrado de Calendly -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/comunicacion-cientifica" style="min-width:320px;height:700px;"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <!-- Final del widget integrado de Calendly -->
    </div>
</section>

<?php get_footer(); ?>