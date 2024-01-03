<?php
$title = "Viva Turquía Te da Mas - 10% off en Viajes a Turquía";
$metaD = "Obtén 10% de descuento en nuestros paquetes turísticos a Turquía, consulta nuestro sitio web para mas información."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/alerts/discount.webp" alt="descuentos especiales" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Descuentos Especiales</h1>
                    <p>10% de Descuento Hasta Mayo. No te lo pierdas.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias.php">Noticias</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias/descuentos-especiales.php">Descuentos Especiales</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/alerts/woman-discount.webp" class="img-fluid" alt="Mujer emocionada con sus documentos de viaje en la mano y foto de su destino en la parte inferior">
                                <figcaption>Descuentos especiales para ti</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>¡Buenas noticias! Descuentos Especiales</h2>
                            <p>Haciendo tu reservación antes del 1 de mayo del 2023 obtendrás un 10% de descuento en todos nuestros paquetes turísticos a Turquía.</p>
                            
                    </div>
                </section>

            </div>
        </div>
    </section>
</main>
<?php
    include '../includes/footer.php';
    ?>