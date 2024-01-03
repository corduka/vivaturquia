<?php
$title = "Flexibilidad y Profesionalismo - Viajes a Turquía";
$metaD = "En Viva Turquía somos comprensibles y entendemos que existen motivos para cancelar un viaje, consulta las formas de cancelación, términos y condiciones."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/why-us/trust.webp" alt="Seis manos una sobre la otra mostrando estar en acuerdo" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Flexibles y Confiables</h1>
                    <p>En Viva Turquía somos enemigos de la rigidez, por eso queremos ser flexibles con las modalidades de pago.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros.php">Por Que Nosotros</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros/flexibles-y-confiables.php">Flexibles y Confiables</a></p>
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
                                <img src="<?= $base_url; ?>img/why-us/trust.webp" class="img-fluid" alt="Seis manos una sobre la otra mostrando estar en acuerdo">
                                <figcaption>Flexibilidad ante los cambios</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Si ya lo decidiste y quieres viajar con nosotros podrás pagar así</h2>
                                <ul>
                                    <li>Deposita un parcial del 25% y paga el 75% restante al llegar.</li>
                                    <li>Pago en línea. Visa, Mastercard, American Express, Iyzico.</li>
                                    <li>Pago en efectivo en oficina.</li>
                                    <li>Pago en Western Union.</li>
                                </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>
<?php
    include '../includes/footer.php';
    ?>