
<?php
	$title = "Viaje a Turquía Todo Incluido - Globos en Turquia";
	$metaD = "Encuentra todo lo relacionado a los Viajes Turquia, todo lo que necesitas saber sobre globos en turquia, detalles de viaje a Turquía todo incluido y precos.";
    include 'config.php';
    include 'includes/header.php';
	?>
            <!-- main image-->
    <div class="main-image">
        <h2 class="main-top-h2">UN SUEÑO <div class="sliding-words-wrapper">
            <div class="sliding-words">
              <span>DIFFERENTE</span>
              <span>MARAVILLOSO</span>
              <span>MAGICO</span>
              <span>AVENTURERO</span>
              <span>ATREVIDO</span>
              <span>DIVERTIDO</span>
              <span>EXTREMO</span>
              <span>LOCO</span>
              <span>INTENSO</span>
            </div>
          </div></h2>
        <h2 class="main-h2">Reserva Tu Tour a Turquía Ahora y Gana 10% de Descuento!</h2>
        <div class="text-center">
            <button class="btn btn-first"><a href="https://wa.me/905435278390?text=Hola%20Viva%20Turquía%20.Quiero%20hacer%20mi%20reserva%20ahora." target="_blank"> !RESERVA AHORA! <i
                        class="fab fa-whatsapp"></i></a></button>
        </div>
    </div>
    <section id="top-section">
        <div>
            <div id="form-div">
                <h3 id="main-h3">¡Sé el primero en obtener los mejores planes y ofertas!</h3>
                <div class="newsletter-response text-success anabasarili">
                    <h3>Te has suscrito con éxito a nuestro canal de noticias!</h3>
                </div>
								<div class="newsletter-response text-danger anabasarisiz">
                    <h3>Los correos no coinciden, vuelve a intentarlo por favor.</h3>
                </div>
                <form id="formindex"  method="post">
                    <div class="container gizle">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="indexemail"
                                        aria-describedby="emailHelp" placeholder="Correo electrónico **" multiple name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Please provide only a @b.c e-mail address" >
                                    <div class="form-check">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="indexemail2"
                                        aria-describedby="emailHelp" placeholder="Confirma tu correo electrónico **" multiple name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Please provide only a @b.c e-mail address" >
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col checkbox-1">
                                    <input type="checkbox" class="form-check-input" id="mailCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Sí, envíame ofertas, tips e información de destinos. *</label>
                                </div>
                                <div class="col" id="mail-submit-button">
                                    <a href="javascript:void(0)" class="btn btn-primary float-right" id="mailSubmit">Enviar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- test  -->
    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-10 col-xs-12">
                            <h4 class="travel-warnings">
                                ¡Estamos aquí <strong>7/24</strong> para ti!</h4>
                               <p class="travel-warnings">No somos traductores de Google ni robots.  Somos hablantes nativos de Español de América Latina y hablantes de Turco de Turquía. <br><i class="fa-solid fa-suitcase-rolling fa-lg"></i>
                                ¡Adelante! reserva el viaje de tus sueños y juntos lo haremos posible,
                                nuestra ejecutiva de ventas te acompañará siempre que lo necesites y si tienes una eventualidad que te impida realizar el viaje cuéntanoslo todo y ¡listo! cancela fácil.</p>
                        </div>
                        <div class="col-md-2 col-xs-12 text-center">
                            <a href="<?= $base_url; ?>es/contacto.php" class="btn btn-warnings">LEER MAS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row alerts">
                <div class="col-md-3 col-sm-6 col-6">
                    <div>
                       <img src="<?= $base_url; ?>img/alerts/woman-discount.webp" alt="Mujer emocionada con sus documentos de viaje en la mano y foto de su destino en la parte inferior">
                        <a href="<?= $base_url; ?>es/noticias/notas-de-viaje.php" class="a-important">Notas de Viaje »</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div>
                        <img src="<?= $base_url; ?>img/alerts/visa-approved.webp" alt="Formulario de aplicacion de visa con sello de aprobado y una lupa sobre el papel">
                        <a href="<?= $base_url; ?>es/noticias/requisitos-de-visa.php" class="a-important">Requisitos para Ingresar a Turquía »</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div>
                        <img src="<?= $base_url; ?>img/alerts/covid-sample.webp" alt="Globo terraqueo junto a un tubo de ensayo del COVID 19 y un fonendoscopio haciendo alusion a la pandemia en el mundo">
                        <a href="<?= $base_url; ?>es/noticias/noticias-sobre-covid-19.php" class="a-important">Noticias sobre el Covid - 19 »</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div>
                        <img src="<?= $base_url; ?>img/alerts/turkiye.webp" alt="Mapa de Turquia en animacion con puntos y la bandera de Turquia al lado">
                        <a href="<?= $base_url; ?>es/noticias/que-tipo-pais-es-turquia.php" class="a-important">¿Qué Tipo de País es <br>Turquía? »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- test  -->
    <section class="section-2">
        <div class="section-2-div">
            <div class="container">
                <div class="pad text-center">
                   <h4 class="no-margin">Viva Turquía te da Mucho Mas</h4>
                </div>
            </div>
        </div>
        <div class="bg-white div-couts">
            <div class="">
                <div class="couts">
                    <div class="cout">
                        <div class="cout-icon"></div>
                        <div class="cout-title">
                            <div class="text-center">
                                <i class="fa-solid fa-rocket fa-xl"></i> <br> <a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-acompanado-y-guiado.php" class="a-important">Mas Experiencia</a>
                            </div>
                        </div>
                    </div>
                    <div class="cout">
                        <div class="cout-icon"></div>
                        <div class="cout-title">
                            <div class="text-center">
                                <i class="fa-solid fa-heart-circle-check fa-xl"></i> <br> <a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-bien.php"
                                    class="a-important">Mas Cuidado</a>
                            </div>
                        </div>
                    </div>
                    <div class="cout">
                        <div class="cout-icon"></div>
                        <div class="cout-title">
                            <div class="text-center">
                                <i class="fa-solid fa-dove fa-xl"></i> <br> <a href="<?= $base_url; ?>es/por-que-nosotros/flexibles-y-confiables.php" class="a-important">Mas Flexibilidad</a>
                            </div>
                        </div>
                    </div>
                    <div class="cout">
                        <div class="cout-icon"></div>
                        <div class="cout-title">
                            <div class="text-center">
                                <i class="fa-solid fa-hands fa-xl"></i> <br> <a href="<?= $base_url; ?>es/por-que-nosotros/multi-tour.php" class="a-important">Mas Oportunidades</a>
                            </div>
                        </div>
                    </div>
                    <div class="cout">
                        <div class="cout-icon"></div>
                        <div class="cout-title">
                            <div class="text-center">
                                <i class="fa-solid fa-martini-glass fa-xl"></i> <br> <a href="<?= $base_url; ?>es/por-que-nosotros/profesionales-y-amigables.php" class="a-important">Mas Plenitud</a>
                            </div>
                        </div>
                    </div>
                    <div class="cout">
                        <a href="<?= $base_url; ?>es/por-que-nosotros.php" class="btn btn-sm btn-primary" target="">
                            Leer Mas <i class="fa-solid fa-arrow-right fa-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--after fixing top part-->
    <section class="promotion">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?= $base_url; ?>img/top-2-cta/descuento-cta-2.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">10% de Descuento Hasta Diciembre</h5>
                    <p class="card-text">Haciendo tu reservación antes del 1 de diciembre del 2023 obtendrás un 10% de descuento en todos nuestros paquetes turísticos a Turquía.</p>
                    <a href="<?= $base_url; ?>es/tours.php" class="btn btn-primary">Leer Mas</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?= $base_url; ?>img/top-2-cta/cappadocia-balloon-cta-1.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Capadocia Globo y Más</h5>
                    <p class="card-text">¿Estás listo para volar sobre las increíbles chimeneas de hadas con globo aerostático? <br>Capadocia te está esperando.</p>
                    <a href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php" class="btn btn-primary">Leer Mas</a>
                </div>
            </div>
        </div>
    </section>
    <!--TEST: now fanfastic carousel test -->
    <section class="pt-5 pb-5 all-sections">
        <div class="container">
            <h1><a id="tours-de-turquia" href="<?= $base_url; ?>es/tours.php">Viaje a Turquía todo incluido con Viva Turquía!</a></h1>
            <p>Hemos hecho la selección de los mejores destinos y actividades para hacer de los viajes a Turquía únicos y completos.  Globos en Turquia, actividades locales, transporte privado y  optimización de los tiempos han sido planificados cuidadosamente para que visitar turquía sea divertido y puedas sacar el máximo provecho según tu presupuesto y tiempo.</p>
            <p>Te invitamos a revisar nuestro portafolio de tours y te ayudaremos a organizar tu viaje contáctanos por <a href="https://wa.me/905435278390" target="_blank"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a> o por <a href="mailto:vivaturquiatours.com"><i class="fa-regular fa-envelope"></i> Correo Electronico</a>. </p>
            <h2 id="h2-after-h1">Aquí descubre tu Tour a Turquia y has de tus viajes a Turquía una experiencia inolvidable</h2>
            <p>Cada Tour a turquia es único, ven a descubrirlo tú mismo; los  viajes a Turquía te sumergen en una atmósfera de la cual no querrás salir, en Viva Turquía te ofrecemos- paquetes a Turquía completos libres de preocupaciones y cargos extras, descubre algunas ciudades de Turquía y anímate a viajar.</p>
            <hr>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <i class="fa-solid fa-left-long"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa-solid fa-right-long"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
  </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                          <a href="<?= $base_url; ?>es/tours/8-dias-tour-a-turquia.php"><img class="img-fluid tour-card-img" alt="Amanecer en Cappadocia globos aerostáticos en el aire sobre el valle de Goreme"
                                                src="<?= $base_url; ?>img/tours/cappadocia-balloon-2.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/8-dias-tour-a-turquia.php">8 Dias Tour a Turquia</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp" alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 790,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/9-dias-tour-a-turquia.php"><img class="img-fluid tour-card-img" alt="Terrazas de traventina blanca en Pamukkale con agua azul y cielo azul"
                                                src="<?= $base_url; ?>img/destinations/pamukkale-traverten.webp"></a>
                                            <div class="card-body">
                                            <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/9-dias-tour-a-turquia.php">Capadocia&#x2c; Efeso&#x2c; Pamukkale&#x2c; Antalya Tour 9 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 810,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/10-dias-tour-a-turquia.php"><img class="img-fluid tour-card-img" alt="Atardecer en la biblioteca Celsius en Éfeso"
                                                src="<?= $base_url; ?>img/tours/celsus-library.webp"></a>
                                            <div class="card-body">
                                               <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/10-dias-tour-a-turquia.php">Capadocia&#x2c; Efeso&#x2c; Pamukkale&#x2c; Bodrum Tour 10 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 830,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/estambul-capadocia-antalya-tour-8-dias.php"><img class="img-fluid tour-card-img" alt="Playa con sillas de descanso y sombrillas en la arena, cielo azul claro y mar claro en Kemer"
                                                src="<?= $base_url; ?>img/destinations/antalya-beach.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/estambul-capadocia-antalya-tour-8-dias.php">Estambul&#x2c; Capadocia&#x2c; Antalya Tour 8 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 800,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/estambul-efeso-pamukkale-tour-5-dias.php"><img class="img-fluid tour-card-img" alt="Mezquita Azul en un día soleado con una fuente de agua y personas caminando"
                                                src="<?= $base_url; ?>img/tours/istanbul-2.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/estambul-efeso-pamukkale-tour-5-dias.php">Estambul&#x2c; Efeso&#x2c; Pamukkale Tour 5 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 440,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.php"><img class="img-fluid tour-card-img" alt="Chimeneas de las hadas de Goreme Turquía apuntando al cielo azul con pocas nubes"
                                                src="<?= $base_url; ?>img/tours/goreme-cappadocia-2.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.php">Estambul&#x2c; Capadocia Tour 6 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 570,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php"><img class="img-fluid tour-card-img" alt="Panorama del valle de Ürgüp con monolitos y chimeneas de hadas"
                                                src="<?= $base_url; ?>img/tours/cappadocia-chimeneas.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php">Capadocia Tour <br>3 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 390,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-parent col-md-3 col-sm-12 col-12">
                                        <div class="card tour-card">
                                           <a href="<?= $base_url; ?>es/tours/ankara-capadocia-tour-4-dias.php"><img class="img-fluid tour-card-img" alt="Amanecer en Cappadocia globos aerostáticos en el aire sobre el valle de Goreme"
                                                src="<?= $base_url; ?>img/tours/cappadocia-ballon-3.webp"></a>
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/ankara-capadocia-tour-4-dias.php">Ankara&#x2c; Capadocia Tour <br>4 Dias</a></h4>
                                                <h5 class="card-text">Calificación&#x3a;<img src="<?= $base_url; ?>img/5.webp"
                                                        alt="calificación 5 estrellas"></h5>
                                                <h6 class="card-text"> <i>desde</i><b> 400,00 EUR
                                                    </b><i>pp&#x2a;</i>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEST- FANTASTIC CAROUSEL TEST ENDS -->


    <!--CAPADOCIA TOURS SECTION STARS-->
    <section class="all-sections" id="capadocia-tours">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/destinos/capadocia-turquia.php">Tour Cappadocia</a></h2>
            <p>Disfruta del Green tour Cappadocia, Red Tour a Cappadocia, el famoso Valle del amor, el increíble Museo al aire libre y actividades locales como paseo en Camello, Jeep, Noche Turca y Paseo en Globo aerostático con nuestro tour a Capadócia Turquia.</p>
            <hr>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6 text-right div-btn">
                    <a class="btn btn-primary" href="<?= $base_url; ?>es/tours.php" role="button">
                        Ver Todos<i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="card-parent col-md-3 col-sm-12">
                    <div class="card tour-card">
                       <a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.ph"><img class="img-fluid tour-card-img" alt="Amanecer en Cappadocia globos aerostáticos en el aire sobre el valle de Goreme"
                            src="<?= $base_url; ?>img/tours/cappadocia-ballon-3.webp"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/capadocia-tour-2-dias.php">Capadocia Tour 2 Dias</a></h4>
                            <h5 class="card-text">Calificación de Tour&#x3a;<img src="<?= $base_url; ?>img/5.webp" alt="calificación 5 estrellas">
                            </h5>
                            <h6 class="card-text"> <i>desde</i><b> 320,00 EUR </b><i>pp&#x2a;</i>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-3 col-sm-12">
                    <div class="card tour-card">
                       <a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.ph"><img class="img-fluid tour-card-img" alt="Chimeneas de las hadas de Goreme Turquía apuntando al cielo azul con pocas nubes"
                            src="<?= $base_url; ?>img/tours/goreme-cappadocia-2.webp"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php">Capadocia Tour 3 Dias</a></h4>
                            <h5 class="card-text">Calificación de Tour&#x3a;<img src="<?= $base_url; ?>img/5.webp" alt="calificación 5 estrellas">
                            </h5>
                            <h6 class="card-text"> <i>desde</i><b> 390,00 EUR </b><i>pp&#x2a;</i>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-3 col-sm-12">
                    <div class="card tour-card">
                       <a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.ph"><img class="img-fluid tour-card-img" alt="Ojos turcos colgando en las ramas de un árbol de fondo el valle de chimeneas de hadas en capadocia Turquía"
                            src="<?= $base_url; ?>img/tours/cappadocia-ojos-turcos.webp"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.php">Estambul&#x2c; Capadocia Tour 6 Dias</a></h4>
                            <h5 class="card-text">Calificación de Tour&#x3a;<img src="<?= $base_url; ?>img/5.webp" alt="calificación 5 estrellas">
                            </h5>
                            <h6 class="card-text"> <i>desde</i><b> 570,00 EUR </b><i>pp&#x2a;</i>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-3 col-sm-12">
                    <div class="card tour-card">
                      <a href="<?= $base_url; ?>es/tours/paseos-en-globo-aerostatico.php"><img class="img-fluid tour-card-img" alt="Amanecer en Cappadocia globos aerostáticos en el aire sobre el valle de Goreme"
                            src="<?= $base_url; ?>img/tours/cappadocia-ballon-4.webp"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?= $base_url; ?>es/tours/paseos-en-globo-aerostatico.php">Paseos En Globo Aerostatico</a></h4>
                            <h5 class="card-text">Calificación de Tour&#x3a;<img src="<?= $base_url; ?>img/5.webp" alt="calificación 5 estrellas">
                            </h5>
                            <h6 class="card-text"> <i>desde</i><b> 180,00 EUR </b><i>pp&#x2a;</i>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CAPADOCIA TOURS SECTION ENDS-->
    <!--CITIES STARTS-->
    <section class="all-sections" id="cities">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/destinos.php">Ciudades de Turquía</a></h2>
            <p>El turismo en Turquía es increíble, por eso desde ya puedes empiezan esta travesía; infórmate sobre las ciudades de Turquía: Ankara, Estambul, Esmirna, Antalya, Capadocia, Mesopotamia.</p>
            <p>Lugares que no dejan de sorprender nunca, en ellas hay más de 400 actividades para realizar, entre playas, museos, sitios arqueológicos, restaurantes, catedrales y curiosidades fascinantes.</p>
            <hr>
            <div class="row">
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/estambul-turquia.php"><img class="img-fluid" alt="Mezquita de Santa Sofia con tres minaretes en día soleado sin nubes"
                                src="<?= $base_url; ?>img/destinations/santa-sofia.webp"></a>
                        <div class="card-body">
                            <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/estambul-turquia.php">Estambul Turquía</a></h3>
                            <p>Una ciudad importante para Turquía, está ubicada en Europa y Asia en el Bósforo, lee mas detalles de su historia y algunos de sus lugares turísticos como la Mezquit Azul, Santa Sofía, Palacio de Topkapi.</p>
                            <a href="<?= $base_url; ?>es/destinos/estambul-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/capadocia-turquia.php"><img class="img-fluid" alt="Cuevas del valle Pigeon con algunas personas tomando fotos"
                                src="<?= $base_url; ?>img/destinations/goreme-capadocia.webp"></a>
                        <div class="card-body">
                        <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/capadocia-turquia.php">Capadócia Turquia</a></h3>
                            <p>La histórica ciudad de la región de Anatolia central es rica no solo por su antigüedad y cultura sino también por su fascinante belleza natural, lee mas sobre este destino y sus lugares mas famosos como el Castillo de Uchisar.</p>
                            <a href="<?= $base_url; ?>es/destinos/capadocia-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/esmirna-turquia.php"><img class="img-fluid" alt="Frente de la Biblioteca de Celsus en Éfeso con algunas personas caminando en un día soleado"
                                src="<?= $base_url; ?>img/destinations/efeso.webp"></a>
                        <div class="card-body">
                        <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/esmirna-turquia.php">Esmirna Turquía</a></h3>
                            <p>La perla del Egeo, es la tercera ciudad mas grande de todo Turquía, y esta ubicada al occidente del país, debes saber que en esta región hay tantos tesoros como historias, lee aquí sobre Éfeso, Templo de Artemisa y mucho mas.</p>
                            <a href="<?= $base_url; ?>es/destinos/esmirna-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/pamukkale-turquia.php"><img class="img-fluid" alt="Terrazas de traventina blanca en Pamukkale con agua azul y cielo azul"
                                src="<?= $base_url; ?>img/destinations/pamukkale-traverten.webp"></a>
                        <div class="card-body">
                        <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/pamukkale-turquia.php">Pamukkale Turquía</a></h3>
                            <p>Hace parte de la ciudad de Denizli en la mitad occidental de Turquía, su fama se debe a la Hierápolis, una ciudad antigua fundada en el año 190 a.C. Y a sus ricas y hermosas aguas termales que forman una montaña blanca como el algodón.</p>
                            <a href="<?= $base_url; ?>es/destinos/pamukkale-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/antalya-turquia.php"><img class="img-fluid" alt="Atardecer en Antalya el sol puesto al horizonte y sombrillas con sillas"
                                src="<?= $base_url; ?>img/destinations/antalya-kemer-plaj.webp"></a>
                        <div class="card-body">
                        <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/antalya-turquia.php">Antalya Turquía</a></h3>
                            <p>Está ubicada en la costa mediterránea al suroeste de Turquía, famosa por sus hermosas playas y por la historia de los imperios que tuvieron paso por allí, lee sobre la puerta de Adriano y otros lugares importantes de la región.</p>
                            <a href="<?= $base_url; ?>es/destinos/antalya-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <div class="card-parent col-md-4 col-sm-12 col-12">
                    <div class="card tour-card">
                        <a href="<?= $base_url; ?>es/destinos/ankara-turquia.php"><img class="img-fluid" alt="Personas caminando frente al mausoleo de Ataturk en Anıtkabir Anakara"
                                src="<?= $base_url; ?>img/destinations/ankara.webp"></a>
                        <div class="card-body">
                        <h3 class="card-title"><a href="<?= $base_url; ?>es/destinos/ankara-turquia.php">Ankara Turquía</a></h3>
                            <p>Es la Capital del país está ubicada en la región de Anatolia central, resguarda uno de los museos mas importantes: El Museo de las Civilizaciones, que muestra hallazgos arqueológicos y rastros de la humanidad de diferentes civilizaciones, lee mas aquí.</p>
                            <a href="<?= $base_url; ?>es/destinos/ankara-turquia.php" class="btn btn-primary">Leer Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CITIES ENDS-->


<!--test starts-->
<!--test ends-->

    <!--HOTELS STARTS-->
    <section class="all-sections" id="hotels">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/hoteles.php">Cappadocia Hotel</a></h2>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                <p>Los hoteles en Turquía tienen una marca hospitalaria, amable con altos estándares de calidad en sus instalaciones y en la prestación de sus servicios.</p>
                <p>Aquí puedes leer sobre los hoteles cueva en Capadocia con los que trabajamos juntos, como <strong><a href="<?= $base_url; ?>es/hoteles/hera-cave-suites-cappadocia.php">Hera Cave Suites</a></strong>, <strong><a href="hotel-taskonaklar-cappadocia.php">Taşkonaklar Cave Hotel</a></strong>, <strong><a href="argos-hotel-cappadocia.php">Argos Hotel Capadocia</a></strong>, <strong><a href="kayakapi-premium-caves-cappadocia.php">Kayakapı Premium Caves</a></strong>.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
   <a href="<?= $base_url; ?>es/hoteles/hera-cave-suites-cappadocia.php"><img src="<?= $base_url; ?>img/hotels/hera-suite-2.webp" class="d-block w-100 h-100" alt="Suite tipo cueva del hotel Hera dos camas, sofá de descanso y televisión"></a>
    </div>
    <div class="carousel-item">
   <a href="<?= $base_url; ?>es/hoteles/hotel-taskonaklar-cappadocia.php"><img src="<?= $base_url; ?>img/hotels/taskonaklar.webp" class="d-block w-100 h-100" alt="Jacuzzi del hotel Taskonaklar con vista panorámica de Capadocia"></a>
    </div>
    <div class="carousel-item">
   <a href="<?= $base_url; ?>es/hoteles/kayakapi-premium-caves-cappadocia.php"><img src="<?= $base_url; ?>img/hotels/kayakapi-1-min.webp" class="d-block w-100 h-100" alt="Espacio común con piscina y sillas de descanso del hotel Kayakapi en Capadocia"></a>
    </div>
    <div class="carousel-item">
   <a href="<?= $base_url; ?>es/hoteles/argos-hotel-cappadocia.php"><img src="<?= $base_url; ?>img/hotels/argos-hotel-1.webp" class="d-block w-100 h-100" alt="Suite tipo cueva del hotel Argos en Capadocia con cama doble y sofá de descanso"></a>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
</section>
    <!--HOTELS ENDS-->

    <!--WHY US STARTS-->
    <section class="all-sections" id="why-us">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/por-que-nosotros.php">¿Por qué Viva Turquía?</a></h2>
            <p>Detallistas, flexibles, amigables y confiables, así somos en Viva Turquía. Conócenos y reserva con nosotros.</p>
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-6">
                   <a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-bien.php"><img src="<?= $base_url; ?>img/why-us/yoga-pose.webp" class="img-fluid" alt="Icono de posición de yoga que hace referencia a estar tranquilo"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-bien.php">La Experiencia de Viajar Bien</a></h3>
                    <p>Viaja libre con la certeza de la comodidad, nuestros vehiculos de lujo te brindan seguridad.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6">
                   <a href="<?= $base_url; ?>es/por-que-nosotros/tres-maneras-de-reservar.php"><img src="<?= $base_url; ?>img/why-us/booking.webp" class="img-fluid" alt="icono de un computador y un avión haciendo alusión a reservación en línea"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/tres-maneras-de-reservar.php">Tres Maneras de Reservar</a></h3>
                    <p>Nos ajustamos a tus condiciones, revisa nuestras opciones y reserva ahora.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6">
                    <a href="<?= $base_url; ?>es/por-que-nosotros/profesionales-y-amigables.php"><img src="<?= $base_url; ?>img/why-us/professionals.webp" class="img-fluid" alt="icono de mujer con medalla haciendo alusión a excelencia y profesionalismo"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/profesionales-y-amigables.php">Profesionales y Amigables</a></h3>
                    <p>Somos profesionales expertos pero ante todo somos humanos, queremos que te sientas cómodo y en confianza.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6">
                   <a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-acompanado-y-guiado.php"><img src="<?= $base_url; ?>img/why-us/travel-and-tourism.webp" class="img-fluid" alt="icono de maleta de viaje con pasaporte y globo terráqueo"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-acompanado-y-guiado.php">La Experiencia de Viajar Acompañado y Guiado</a></h3>
                    <p>No pierdas detalles de tu viaje en procesos, nos encargamos de cada detalle operativo-logístico.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6">
                   <a href="<?= $base_url; ?>es/por-que-nosotros/multi-tour.php"><img src="<?= $base_url; ?>img/why-us/dervish.webp" class="img-fluid" alt="Icono de baile tradicional turco"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/multi-tour.php">Multi Tour</a></h3>
                    <p>Saca el maximo provecho a tu tiempo, combina tours y vive mas.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-6">
                   <a href="<?= $base_url; ?>es/por-que-nosotros/flexibles-y-confiables.php"><img src="<?= $base_url; ?>img/why-us/personalization.webp" class="img-fluid" alt="icono de computador con flechas en alusión a la facilidad de hacer cambios"></a>
                    <h3><a href="<?= $base_url; ?>es/por-que-nosotros/flexibles-y-confiables.php">Somos Flexibles</a></h3>
                    <p>Entendemos cualquier eventualidad, si quieres modificar o cancelar tus planes solo cuentanos.</p>
                </div>
            </div>
        </div>
    </section>
    <!--WHY US ENDS-->
    <!--WHO WE ARE STARTS-->
    <section class="all-sections" id="who-we-are">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/quienes-somos.php">¿Quiénes Somos?</a></h2>
            <p>Al igual que a ti, en Viva Turquía nos encanta la aventura, la diversión y las nuevas experiencias.</p>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h3>¡Te Saluda Una Colombiana y Un Turco!</h3>
                    <p>En Viva Turquía estamos convencidos de que ningún destino puede estar completo sin una buena compañía, la calidad humana, el apoyo y la solidaridad son nuestros pilares.</p>
                    <p>Te invitamos a conocer quiénes somos, quién es Viva Turquía y qué es eso que nos hace tan únicos.</p>

                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <h3>Paquetes a Turquía</h3>
                    <p>Somos una agencia que impulsa el turismo e invita a todas las personas de habla hispana a visita turquia, creemos que el turismo en turquía es muy potente y tiene mucho por ofrecer, con su variada gastronomía, música e historia los viajes a Turquia se vuelven en algo definitivamente único, una experiencia más que memorable. </p>
                    <p>Por ello, decidimos dedicarnos a esto, a preparar para un amplio grupo de viajeros los mejores paquetes a turquia, para que el sueño de visitar turquia se cumpla!</p>
                </div>
            </div>
        </div>
    </section>
    <!--WHO WE ARE ENDS-->
    <!--TESTIMONIALS STARTS-->
    <section class="all-sections" id="testimonial">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/por-que-nosotros/testimonios.php">¿Qué Opinan de Viva Turquia?</a></h2>
            <p>Considerar otras opiniones y perspectivas es una buena idea, sobre todo cuando lo que está en juego es un viaje. Te invitamos a leer algunos <em><a href="<?= $base_url; ?>es/por-que-nosotros/testimonios.php">testimonios</a></em>.</p>
            <hr>
            <div class="row">
                <div class="col-sm">
                    <img src="<?= $base_url; ?>img/testimonial/javiera.webp" alt="Mujer tocando el cuello de un camello en Göreme Capadocia, Turquía">
                    <p>Javiera Mallorga <br>ESPAÑA<br> Hice un viaje de <a href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php" class="a-testimonial">3 Dias Cappadocia Tour</a>. La experiencia en globo es bellísima, amé la comida turca.
                            volveré a visitar Turquía con un tour más largo, muchos lugares para tan poco tiempo.. ¡Muchas gracias!</p>
                </div>
                <div class="col-sm">
                    <p>Maria Lidia Castro <br>COLOMBIA<br>Ellos organizaron cada activdad en Estambul <a href="<?= $base_url; ?>es/tours/9-dias-tour-a-turquia.php" class="a-testimonial">9 Dias Paquetes Turísticos</a> porque no teniamos conocimiento de ningun proceso, ni del lugar, son muy organizados
                        y tienen siempre la informacion a la mano. Fue una experiencia maravillosa, cada rincon de Turquia es un mundo entero.</p>
                    <img src="<?= $base_url; ?>img/testimonial/maria-lidia-family.webp" alt="familia viajera de Viva Turquía en un atardecer en una playa de antalya">
                </div>
                <div class="col-sm">
                    <img src="<?= $base_url; ?>img/testimonial/testimonios-banderas.webp" alt="Mujeres viajeras con Viva Turquía luciendo camisetas con la bandera de Turquía">
                    <p>Jenifer Gonzalez Perez <br>MEXICO<br> Logré mi sueño de Turkiye con Viva Turquia. Mis amigas y yo vinimos a Estambul con <a href="<?= $base_url; ?>es/tours/10-dias-tour-a-turquia.php" class="a-testimonial">10 Dias Paquetes Turisticos a Turquia</a>. Desde el aeropuerto, llegada al hotel y vuelos internos, todo estuvo perfectamente organizado. Muchas gracias a Ibonne, nos atendió día y noche cada vez que teníamos dudas. Le sugiero encarecidamente que tenga esta increíble experiencia con Viva Turquia.com. ¡Viva Turquía y viva el poder de las mujeres!</p>
                </div>
            </div>
        </div>
    </section>
    <!--TESTIMONIALS ENDS-->
    <!--CONTACT STARTS-->
    <section class="all-sections" id="contact">
        <div class="container">
            <h2><a href="<?= $base_url; ?>es/contacto.php">Contacto</a></h2>
            <p>Bienvenidos a Viva Turquia, somos parte de Tours 4 Turkey.</p>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h3>¿Quieres hablar con nosotros? </h3>
                    <p><a href="https://wa.me/905435278390" target="_blank"><em><span><i class="fa-brands fa-whatsapp"></i> Whatsapp</span></em></a><br>
No somos un robot. Nuestros ejecutivos de ventas te atenderán.
                    </p>
                    <p><a href="tel:+905435278390"><em><span><i class="fa-solid fa-phone"></i> Llámanos</span></em></a><br>
                    Siéntete libre de llamarnos cuando lo requieras.
                    </p>
                    <p><a href="mailto:vivaturquiatours@gmail.com" target="_blank"><em><span><i class="fa-solid fa-paper-plane"></i> Email</span></em></a><br>
                    Escríbenos un <a href="mailto:vivaturquiatours@gmail.com" target="_blank">e-mail</a>.
                    </p>
                    <p><a href="https://www.facebook.com/profile.php?id=100090471456918" target="_blank"><em><span><i class="fa-brands fa-facebook"></i> Facebook</span></em></a> o <a href="https://www.instagram.com/vivaturquia_" target="_blank"><em><span><i class="fa-brands fa-square-instagram"></i> Instagram</span></em></a> o <a href="https://www.youtube.com/@VivaTurquia_" target="_blank"><i class="fa-brands fa-youtube"></i> Instagram</span></em></a>
                    <br>
                    Contáctanos en nuestras redes.
                    </p>
                    <p><a href="<?= $base_url; ?>es/contacto.php" target="_blank"><em><span><i class="fa-solid fa-map-location-dot"></i> Dirección</span></em></a><br>
                    Visítanos en nuestras oficinas.
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                <figure>
                <img src="<?= $base_url; ?>img/logo/viva-turquia-logo-big.webp" class="img-fluid" alt="logo de Viva Turquía con un globo aerostático y letras azules con fondo blanco">
                    <figcaption>
                   Viajes a Turquía con Via Turquía: Vive - Viaja - Vuela
                    </figcaption>
                </figure>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT ENDS-->

<!--Structured data starts-->
<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "TravelAgency",
  "name": "Viva Turquía",
  "url": "https://vivaturquia.com/",
  "logo": "https://vivaturquia.com/img/logo/logo-main.webp",
  "priceRange": "$$$$",
  "image": "https://vivaturquia.com/img/tours/cappadocia-ballon-3.webp",
  "description": "Viaje a Turquía todo incluido con Viva Turquía. Hemos hecho la selección de los mejores destinos y actividades para hacer de los viajes a Turquía únicos y completos. Globos en Turquia, actividades locales, transporte privado y optimización de los tiempos han sido planificados cuidadosamente para que visitar Turquía sea divertido y puedas sacar el máximo provecho según tu presupuesto y tiempo.",
  "address": {
     "@type": "PostalAddress",
     "streetAddress": "Yukarı Mevki Zafer Sk. No: 8/Z1 Mustafapaşa/",
     "addressLocality": "Ürgüp",
     "addressRegion": "Nevşehir",
     "postalCode": "50400",
     "addressCountry": "Turquía"
  },
  "geo": {
     "@type": "GeoCoordinates",
     "latitude": "38.63398",
     "longitude": "34.938455"
  },
  "hasMap": "https://www.google.com/maps/search/Yukar%C4%B1+Mevki+Zafer+Sk.+No:+8%2FZ1+Mustafapa%C5%9Fa%2F%C3%9Crg%C3%BCp%2FNev%C5%9Fehir%2FTurkiye/@38.5825521,34.8946041,17z/data=!3m1!4b1",
   "openingHours": "Mo 01:00-01:00 Tu 01:00-01:00 We 01:00-01:00 Th 01:00-01:00 Fr 01:00-01:00 Sa 01:00-01:00 Su 01:00-01:00",
  "telephone": "+905435278390"
}
</script>
<!--Structured data ends-->
<!--share on social media script-->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0" nonce="5EOAEDZf"></script>
    <?php
    include 'includes/footer.php';
    ?>
