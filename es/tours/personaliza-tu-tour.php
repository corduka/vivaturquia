<?php
$title = "Turquia que visitar - Planea Tu Viaje A Turquía A Tu Medida";
$metaD = "Selecciona los destinos de tu preferencia,  la duración en cada uno y los planes. Personalizar tu tour es fácil, si tienes dudas contáctanos."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/tours/cappadocia-ballon-3.webp" alt="valle en capadocia Turquía con globos aerostáticos sobrevolando" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Personaliza Tu Tour</h1>
                    <p>No queremos ser herméticos o imponerte una forma de viajar, en esta sección puedes personalizar tu tour dependiendo de tu tiempo, presupuesto e intereses.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/tours.php">Tour a Turquía</a> &rsaquo; <a href="<?= $base_url; ?>es/tours/personaliza-tu-tour.php">Personaliza Tu Tour</a></p>
                </div>
            </div>
        </div>
    </section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <section>
<h2>Viajes a Turquía: Opciones</h2>
<ul>
    <li>Opción 1: Podemos hacer una lista con todos los destinos tour a Turquia y actividades y el usuario puede ir seleccionando lo que le interese. Nos envía esa información en el botón enviar y nosotros le regresamos la llamada para ajustar precios.</li>
    <li>Opción 2: Diligenciar un formulario con su número y correo y nosotros le regresamos la llamada.</li>
    <li>Opción 3: Botón de WhatsApp para asesoría personalizada.</li>
</ul>


                    </section>
                </div>
                <!--Tabs ends-->
                <!--Reservation From Starts-->
                <div class="col-sm-12 col-md-12 col-lg-4">
                <?php
    include '../includes/reservation-box.php';
    ?>
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
                "@id": "https://vivaturquia.com/es/tours/personaliza-tu-tour.php/#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": "1", "item": { "@id": "https://vivaturquia.com", "name": "Inicio" } },
                    { "@type": "ListItem", "position": "2", "item": { "@id": "https://vivaturquia.com/es/tours/personaliza-tu-tour.php", "name": "Personaliza Tu Tour" } }
                ]
            }
        ]
    }
</script>
<script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        [{"@type":"Question","name":"¿Existen tours privados?","acceptedAnswer":{"@type":"Answer","text":"Claro que sí, hacemos tour privados y con los destinos que tu elijas, si por algún motivo nuestro itinerario no se ajusta a lo que esperas."}},{"@type":"Question","name":"¿Como puedo reservar?","acceptedAnswer":{"@type":"Answer","text":"Puedes reservar de tres maneras: en línea, por llamada telefónica, Whatsapp y correo electrónico."}},{"@type":"Question","name":"¿Como puedo pagar mi tour a Turquía?","acceptedAnswer":{"@type":"Answer","text":"Paga en nuestro sitio web, consigna por Western Union, mail order o paga en sitio despues de tu tour."}}]    ]
}</script> 
<!--structured data ends-->
<?php
    include '../includes/footer.php';
    ?>