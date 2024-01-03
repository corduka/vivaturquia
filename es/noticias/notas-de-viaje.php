<?php
$title = "Notas de Viaje a Turquía - Viva Turquía";
$metaD = "En Viva Turquía queremos brindarte información completa y actualizada siempre, Lee nuestras notas de viaje y úsalas a tu favor."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/why-us/woman-with-map.webp" alt="mujer viajera de espaldas mostrando un mapa" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Notas de Viaje</h1>
                    <p>Noticias, anuncios y novedades de interés para viajeros.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias.php">Noticias</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/noticias/notas-de-viaje.php">Notas de Viaje</a></p>
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
                                <figcaption>No oldives estos documentos.</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Vamos a hablar de lo que no se te puede olvidar</h2>
                            <ul>
                                <li>Asegúrate de que tu pasaporte tenga validez al menos por 60 días más a partir de la fecha en que culmine tu estancia.</li>
                                <li>Si bien es cierto que no es obligatorio, nuestra recomendación es que cuentes con un seguro de viaje que cubra cualquier eventualidad.</li>
                                <li>Si estas viajando con una agencia de turismo, no olvides la tirilla de reserva o aquellos documentos donde se muestren las actividades que vas a realizar dentro del país.</li>
                                <li>Si estás viajando sin agencia, seguramente te van a pedir un tiquete de salida del país, si no sabes cuánto tiempo te quedarás, lo mejor será que compres una reserva de vuelo (existen paginas que te permiten cancelación y devuelven tu dinero si lo haces antes de 48h onwardticket es una de ellas) así podrás cumplir con este requisito.</li>
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