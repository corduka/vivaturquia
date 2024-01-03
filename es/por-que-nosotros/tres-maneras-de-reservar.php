<?php
$title = "Reserva Fácil De 3  Diferentes Maneras - Viajes a Turquia";
$metaD = "Nos ajustamos a tu tiempo y necesidades, ofrecemos tres maneras de viajar, elige la que mas te convenga. Contáctanos si tienes preguntas."; 
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
                    <h1 class="top-wrap-h1">Tres Maneras de Reservar</h1>
                    <p>Queremos que te sientas cómodo siempre, y sabemos que todos somos diferentes al momento de tomar decisiones.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros.php">Por Que Nosotros</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros/tres-maneras-de-reservar.php">Tres Maneras de Reservar</a></p>
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
                                <img src="<?= $base_url; ?>img/why-us/call-center-girl.webp" class="img-fluid" alt="Mujer en call center hablando con diadema y atendiendo a su computador">
                                <figcaption>Nuestros ejecutivos de viajes está listo para usted las 24 horas del día, los 7 días de la semana.</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Reserva por WhatsApp, Llamada o Correo Electrónico</h2>
                            <p>Si quieres una asesoría para que resolvamos todas tus dudas y te ayudemos a planear tu viaje; contáctanos por WhatsApp o por correo electrónico. Es una manera práctica de reservar porque resolvemos todas tus dudas en tiempo real.</p>
                        </div>
                    </div>
                </section>
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/why-us/couple-checking-tablet.webp" class="img-fluid" alt="Ejecutivo de viajes brindando asesoría a viajera interesada">
                                <figcaption>Diligencia tus datos en nuestro formulario, selecciona tu tour, realiza tu pago en línea.</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Reserva en Línea</h2>
                            <p>Si eres de los que se toma todo con más calma y necesita tiempo para leer y explorar. Aun así cuenta con nosotros, tenemos a tu disposición el canal de preguntas frecuentes y una sección de blogs que te serán de gran ayuda.</p>
                        </div>
                    </div>
                </section>
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/why-us/at-office.webp" class="img-fluid" alt="Profesionales en oficina haciendo un acuerdo y dándose la mano">
                                <figcaption>Bienvenido a nuestra oficina. Nuestros ejecutivos de viaje están listos para ayudarte.</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Reserva En Nuestra Oficina</h2>
                            <p>Si ya estás en Turquía y sientes que te hace falta visitar algún destino, te podemos orientar. Puedes visitar nuestra oficina y reservar de manera presencial.</p>
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