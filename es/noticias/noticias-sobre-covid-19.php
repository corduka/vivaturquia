<?php
$title = "Novedades del COVID 19 en Turquía";
$metaD = "Actualmente Turquía ha cambiado sus protocolos, consulta aquí toda la información sobre COVID-19."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/alerts/covid-sample.webp" alt="Globo terraqueo junto a un tubo de ensayo del COVID 19 y un fonendoscopio haciendo alusion a la pandemia en el mundo" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Noticias sobre el Covid - 19</h1>
                    <p>Actualizaciones sobre el Covid - 19 Turquía.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias.php">Noticias</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias/noticias-sobre-covid-19.php">Noticias sobre el Covid - 19</a></p>
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
                                <img src="<?= $base_url; ?>img/alerts/covid-sample.webp" class="img-fluid" alt="Globo terraqueo junto a un tubo de ensayo del COVID 19 y un fonendoscopio haciendo alusion a la pandemia en el mundo">
                                <figcaption>Covid-19 en Turquía</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>¡Buenas noticias!</h2>
                            <p>Turquía tiene una de las tasas mas bajas de enfermos confirmados a nivel mundial. En resumen de lo que fue la pandemia; la tasa de letalidad es del 0,6%.</p>
                            <p>Son buenas noticias para ti que estás próximo a viajar a Turquía, no deberás preocuparte por hacerte prueba  PCR, ni vacunas aceptadas en Turquía porque de hecho ya no es un requisito ¡eso quedó en el pasado! Al menos hasta ahora.</p>
                            <p>No obstante, es bueno que tomes las medidas de higiene y salubridad personales, procura cuidarte de los resfriados antes de tu viaje, comer mucha vitamina C y usar tapabocas en tu vuelo, desde Viva Turquía también te cuidaremos, todo nuestro equipo cuenta con vacunación.</p>
                            
                    </div>
                </section>

            </div>
        </div>
    </section>
</main>
<?php
    include '../includes/footer.php';
    ?>