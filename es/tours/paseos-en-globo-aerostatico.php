<?php
$title = "Globos en Turquia - Paseo en Globo aerostático en Capadocia";
$metaD = "Viva Turquia te la da experiencia completa, Globos en Turquia Capadocia, certificado de vuelo, mini desayuno y celebración."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/tours/cappadocia-ballon-4.webp" alt="Amanecer en Cappadocia globos aerostáticos en el aire sobre el valle de Goreme" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Paseos en Globo Aerostático</h1>
                    <p>Tenemos lo que tanto soñaste! Un paseo por las maravillosas tierras de Capadocia.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/tours.php">Tours De Turquía</a></p>
                </div>
            </div>
        </div>
    </section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <section>
                        <!--Tabs starts-->
                        <div class="tabs-to-dropdown">
                            <h2>Detellas de Globo Aerostatico Tour</h2>
                            <div class="nav-wrapper d-flex align-items-center justify-content-between">
                                <ul class="nav nav-pills d-md-flex" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-itinerario-tab" data-toggle="pill"
                                            href="#pills-itinerario" role="tab" aria-controls="pills-itinerario"
                                            aria-selected="true">Capadócia Turquia Globos Aerostaticos</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-recomendaciones-tab" data-toggle="pill"
                                            href="#pills-recomendaciones" role="tab" aria-controls="pills-recomendaciones"
                                            aria-selected="false">Recomendaciones</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-precios-tab" data-toggle="pill" href="#pills-precios"
                                            role="tab" aria-controls="pills-precios" aria-selected="false">Precios</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-itinerario" role="tabpanel"
                                    aria-labelledby="pills-itinerario-tab">
                                    <div class="container-fluid">
                                        <h3 class="">Globo Capadócia Turquia</h3>
                                        <p>¡Los mejores buenos días los tendrás en Capadócia Turquía globos aerostáticos! Si eres de los que odia madrugar pero no puede dormir cuando va a viajar o cuando tiene un super plan, este tour en globo aerostático es para ti.</p>
                                        <p>Te recogeremos una hora antes del amanecer y mientras se completa el grupo tomaremos té con galletas, una vez nos aseguremos de que el grupo está completo daremos unas breves instrucciones de seguridad y subiremos al globo.</p>
                                        <p>Durante sesenta minutos estarás por los aires de una de las regiones más interesantes de Turquía, el amanecer pintará el panorama de un amarillo cálido que te abrazará y hará que la noción de tiempo desaparezca.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-recomendaciones" role="tabpanel"
                                    aria-labelledby="pills-recomendaciones-tab">
                                    <div class="container-fluid">
                                        <h3 class="">Recomendaciones</h3>
                                        <p>Te recomendamos llevar tu ropa favorita y una cámara. Al terminar, te entregaremos un certificado de memoria,  haremos un brindis por la experiencia y te trasladaremos al hotel.</p>
                                        <ul><span>Ten en cuenta:</span>
                                            <li>No recomendado para niños menores de 5 años.</li>
                                            <li>No recomendado para participantes con problemas de espalda o mujeres embarazadas.</li>
                                            <li>No accesible para sillas de ruedas.</li>
                                            <li>Si su viaje en globo se cancela debido a las condiciones climáticas, se le reembolsarán todos sus gastos.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-precios" role="tabpanel"
                                    aria-labelledby="pills-precios-tab">
                                    <div class="container-fluid">
                                        <h3 class="">Globo Aerostático Precio</h3>
                                        <ul>
                                        <p class="card-price">180,00 EUR</p><span> por persona</span>
                                        <li>0-4 años (Gratis)</li>
                                        <li>4-8 años (50% descuento)</li>
                                        <li>8-18 años (Precios corrientes)</li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Tabs ends-->
               <!--Reservation From Starts-->
               <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--Accordion Explain Reservation Stars-->
                        <?php
    include '../includes/reservation-box.php';
    ?>
                        <!--Accordion Explain Reservation Ends-->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php
    include '../includes/explain-rezervation.php';
    ?>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--aside why us starts-->
                        <?php
    include '../includes/why-us.php';
    ?>
                        <!--aside why us ends-->
                    </div>
    </div>
            </div>
        </div>
    </main>
<!--Reservation From Ends-->
<!--structured data starts-->
<script type="application/ld+json" class="rank-math-schema-pro">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": ["Person", "Organization"],
                "@id": "https://vivaturquia.com/#person",
                "name": "Viva Turquía",
                "logo": {
                    "@type": "ImageObject",
                    "@id": "https://vivaturquia.com/#logo",
                    "url": "https://vivaturquia.com/img/logo/logo-main.webp",
                    "caption": "Viva Turquía",
                    "inLanguage": "es",
                    "width": "200",
                    "height": "90"
                },
                "image": {
                    "@type": "ImageObject",
                    "@id": "https://vivaturquia.com/#logo",
                    "url": "https://vivaturquia.com/img/logo/logo-main.webp",
                    "caption": "Viva Turquía",
                    "inLanguage": "es",
                    "width": "200",
                    "height": "90"
                }
            },
            { "@type": "WebSite", "@id": "https://vivaturquia.com/#website", "url": "https://vivaturquia.com", "name": "Viva Turquía", "publisher": { "@id": "https://vivaturquia.com/#person" }, "inLanguage": "es" },
            {
                "@type": "BreadcrumbList",
                "@id": "https://vivaturquia.com/es/tours/paseos-en-globo-aerostatico.php/#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": "1", "item": { "@id": "https://vivaturquia.com", "name": "Inicio" } },
                    { "@type": "ListItem", "position": "2", "item": { "@id": "https://vivaturquia.com/es/tours/paseos-en-globo-aerostatico.php", "name": "Paseos en Globo Aerostático" } }
                ]
            }
        ]
    }
</script>
<script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        [{"@type":"Question","name":"¿Cuánto cuesta el paseo en globo aerostático?","acceptedAnswer":{"@type":"Answer","text":"El valor por persona es de 300 USD."}},{"@type":"Question","name":"¿Los tours a Capadocia pueden ser guiados en español?","acceptedAnswer":{"@type":"Answer","text":"Sí, nuestros profesionales dominan el idioma español, así como nuestra representante de viajes quien es colombiana."}},{"@type":"Question","name":"¿Como puedo pagar mi tour a Turquía?","acceptedAnswer":{"@type":"Answer","text":"Paga en nuestro sitio web, consigna por Western Union, mail order o paga en sitio despues de tu tour."}}]    ]
}</script> 
<!--structured data ends-->
<?php
    include '../includes/footer.php';
    ?>