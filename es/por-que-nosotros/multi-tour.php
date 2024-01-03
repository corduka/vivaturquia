<?php
$title = "Destinos Turquía - Combina Tus Viajes a Turquia Aquí";
$metaD = "Organiza tu viaje a tu medida y tus intereses, combina destinos según el tiempo que tengas disponible, llámanos y te asesoramos."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/why-us/woman-with-map.webp" alt="mujer viajera de espaldas mostrando un mapa " class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Multi Tour</h1>
                    <p>Combinar tours es una buena manera de ahorrar dinero y disfrutar tu tiempo en Turquía.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros.php">Por Que Nosotros</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros/multi-tour.php">Multi Tour</a></p>
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
                                <img src="<?= $base_url; ?>img/why-us/woman-with-map.webp" class="img-fluid" alt="mujer viajera de espaldas mostrando un mapa ">
                                <figcaption>La libertad de viajar a tu ritmo</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Combina, Disfruta Ahorra Mas</h2>
                                <p>Algunos viajeros saben cuándo salen de sus países pero no saben cuándo regresan, por eso si tienes planeado estar varios meses en Turquía podrás reservar y combinar los destinos de tu interés en las fechas que tu lo necesites.</p>
                                <p>Solo tienes que contactarnos, contarnos tus ideas y te ayudaremos a planear un buen itinerario</p>
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