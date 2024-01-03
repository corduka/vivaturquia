<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    
        <?php
if(isset($title) && !empty($title)) {
echo $title;
}
else {
echo "Bienvenido a Viva Turquia Donde los Sueños se Hacen Realidad";
}
?>
    </title>

    <meta name="description" content="<?php
if(isset($metaD) && !empty($metaD)) { 
   echo $metaD; 
} 
else { 
   echo "Viajes Turquia, Tour a Capadocia. Turquia Packete Tours."; 
} ?>
"/> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SFSWPZS9N0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SFSWPZS9N0');
</script>
    <link rel="icon" type="image/png" sizes="62x60" href="<?= $base_url; ?>img/logo/icon-32x32.webp"/>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS FILE-->
    <link rel="stylesheet" href="<?= $jscssurl; ?>style.css"> 
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <!--APPLE TOUCH ICONS-->
    <link rel="shortcut icon" href="<?= $base_url; ?>img/apple-touch-icons/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon.webp" />
<link rel="apple-touch-icon" sizes="57x57" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-57x57.webp" />
<link rel="apple-touch-icon" sizes="72x72" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-72x72.webp" />
<link rel="apple-touch-icon" sizes="76x76" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-76x76.webp" />
<link rel="apple-touch-icon" sizes="114x114" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-114x114.webp" />
<link rel="apple-touch-icon" sizes="120x120" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-120x120.webp" />
<link rel="apple-touch-icon" sizes="144x144" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-144x144.webp" />
<link rel="apple-touch-icon" sizes="152x152" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-152x152.webp" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url; ?>img/apple-touch-icons/apple-touch-icon-180x180.webp" />
<!--CSS Animations-->
<link rel="stylesheet" href="<?= $jscssurl; ?>animate.min.css"/>
<!--Canonical URL-->
<link rel="canonical" href="https://vivaturquia.com" />
</head>
<body>
    <header>
        <!--languages-->
        <div class="languages text-right">
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100090471456918" target="_blank"><i class="fa-brands fa-facebook fa-xl"></i></a></li>
                <li><a href="https://www.instagram.com/vivaturquia_" target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a></li>
                <li><a href="https://wa.me/905435278390" target="_blank"><i class="fa-brands fa-whatsapp fa-xl"></i></a></li>
                <li><a href="https://t.me/corduka" target="_blank"><i class="fa-brands fa-telegram fa-xl"></i></a></li>
                <li><a href="https://www.youtube.com/@VivaTurquia_" target="_blank"><i class="fa-brands fa-youtube fa-xl"></i></a></li>
                <li id="phone-top"><a href="tel:+905435278390"><i class="fa-solid fa-mobile-screen-button"></i>
                        +905435278390</a></li>
              <!--flags  <li><a href="<?= $base_url; ?>" hreflang="en" class="flags"><img src="<?= $base_url; ?>img/flag/en-flag.webp" alt="Bandera en circulo de Inglaterra"></a></li>
                <li><a href="" hreflang="es" class="flags"><img src="<?= $base_url; ?>img/flag/es-flag.webp" alt="Bandera en circulo de España"></a></li>
                -->
            </ul>
        </div>
        <!--navbar-->
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand mr-auto" href="<?= $base_url; ?>es/index.php"><img src="<?= $base_url; ?>img/logo/logo-main.webp" alt="logo de Viva Turquía con un globo aerostático y letras azules con fondo blanco"></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle" id="navbarDropdown0"
                                    aria-haspopup="true" aria-expanded="false">
                                    <a href="<?= $base_url; ?>es/tours.php" class="dropdown-a">Tours</a></span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown0">
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/capadocia-tour-2-dias.php">2 Días Capadocia Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/capadocia-tour-3-dias.php">3 Días Capadocia Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/ankara-capadocia-tour-4-dias.php">4 Días Ankara&#x2c; Capadocia Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/estambul-efeso-pamukkale-tour-5-dias.php">5 Días Estambul&#x2c; Efeso&#x2c; Pamukkale Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/estambul-capadocia-tour-6-dias.php">6 Días Estambul&#x2c; Capadocia Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/estambul-capadocia-antalya-tour-8-dias.php">8 Días Estambul&#x2c; Capadocia&#x2c; Antalya Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/8-dias-tour-a-turquia.php">8 Días Tour a Turquia</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/9-dias-tour-a-turquia.php">9 Días Tour a Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/10-dias-tour-a-turquia.php">10 Días Tour a Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/paseos-en-globo-aerostatico.php">Paseos En Globo Aerostático</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/tours/personaliza-tu-tour.php">Personaliza Tu Tour <i
                                    class="fa-solid fa-wand-sparkles"></i></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle" id="navbarDropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <a href="<?= $base_url; ?>es/destinos.php" class="dropdown-a">Destinos</a></span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/estambul-turquia.php">Estambul Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/capadocia-turquia.php">Capadócia Turquia</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/pamukkale-turquia.php">Pamukkale Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/esmirna-turquia.php">Esmirna Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/antalya-turquia.php">Antalya Turquía</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/destinos/ankara-turquia.php">Ankara Turquía</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle" id="navbarDropdown1"
                                    aria-haspopup="true" aria-expanded="false">
                                <a href="<?= $base_url; ?>es/hoteles.php" class="dropdown-a">Hoteles</a></span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="<?= $base_url; ?>es/hoteles/hera-cave-suites-cappadocia.php">Hera Cave Suites Cappadocia</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/hoteles/kayakapi-premium-caves-cappadocia.php">Hotel Taşkonaklar Cappadocia</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/hoteles/argos-hotel-cappadocia.php">Argos Hotel Cappadocia</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/hoteles/hotel-taskonaklar-cappadocia.php">Kayakapi Premium Caves Cappadocia</a>
                        </div>           
                    </li>
                    <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle" id="navbarDropdown2"
                                    aria-haspopup="true" aria-expanded="false">
                                    <a href="<?= $base_url; ?>es/por-que-nosotros.php" class="dropdown-a">¿Por Qué Nosotros?</a></span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/tres-maneras-de-reservar.php">3 Maneras de Reservar</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-bien.php">La Experiencia de Viajar Bien</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/profesionales-y-amigables.php">Profesionales y Amigables</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/multi-tour.php">Multi Tour</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-acompanado-y-guiado.php">La Experiencia De Viajar Acompañado y Guiado</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/flexibles-y-confiables.php">Flexibles y Confiables</a>
                            <a class="dropdown-item" href="<?= $base_url; ?>es/por-que-nosotros/testimonios.php">Testimonios</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url; ?>es/quienes-somos.php">¿Quiénes Somos?</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url; ?>es/faqs.php">FAQs <i class="fa-regular fa-circle-question"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url; ?>es/contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url; ?>es/blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/905435278390?text=Hola%20Viva%20Turquía%20.%20Quiero%20un%20tour%20folleto%20con%20mas%20información,%20por%20favor." target="_blank"
                            id="teklif-al">Pide Tu Folleto <i class="fa-brands fa-whatsapp fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>