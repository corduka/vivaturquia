<?php
$title = "Para Reservar Tour a Turquia o Solicitar Contáctanos";
$metaD = "Hemos habilitado varios canales de comunicación para que puedas hacer tus reservaciones Tour a Turquia de manera fácil y rápida. Viajes con Viva Turquia!";
include '../config.php';
include 'includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/tours/cappadocia-ojos-turcos.webp" alt="Ojos turcos colgando en las ramas de un árbol de fondo el valle de chimeneas de hadas en capadocia Turquía" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Contacta a Viva Turquía</h1>
                    <p>Estamos listos para atenderte las 24 horas los 7 dias de las semana.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/contacto.php"> Contacto</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                <figure>
                <img src="<?= $base_url; ?>img/logo/viva-turquia-logo-big.webp" class="img-fluid" alt="logo de Viva Turquía con un globo aerostático y letras azules con fondo blanco">
                    <figcaption>
                   Viajes a Turquía con Via Turquía: Vive - Viaja - Vuela
                    </figcaption>
                </figure>
                    <h2>Aquí podras encontrar nuestra direcciones</h2>
                    <span>Pamukkale:</span>
                    <address>
                    Sümer Mahallesi 2482 /2 Sk Skycity iş merkezi, No.51 Kat.6, 20000 Merkezefendi/Denizli
                    </address>>
                    <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.969322606727!2d29.084597682583734!3d37.79075869973728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c71234823ca6f1%3A0xeaa413851a75fd78!2sTurkey%20Tours%20-%20Tours4Turkey%20Travel!5e0!3m2!1sen!2str!4v1692291333275!5m2!1sen!2str" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h2>Puedes llamarnos en cualquier momento</h2>
                    <span>Teléfono Turquía 1</span>
                    <p><a href="https://wa.me/905435278390?text=Hola%20Viva%20Turquía%20&#128578." target="_blank">+905435278390</a></p>
                    <span>Teléfono Turquía Whatsapp</span>
                    <p><a href="https://wa.me/905433509590?text=Hola%20Viva%20Turquía%20&#128578." target="_blank">+905433509590</a></p>
                </div>



                <div class="col-sm-12 col-md-12 col-lg-4">







                <div class="col-sm-12 col-md-12 col-lg-12">

                        <?php
    include 'includes/reservation-box.php';
    ?>

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <?php
    include 'includes/explain-rezervation.php';
    ?>
                    </div>
<div class="col-sm-12 col-md-12 col-lg-12">
                        <?php
    include 'includes/corporativo-sidebar.php';
    ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--aside why us starts-->
                        <?php
    include 'includes/why-us.php';
    ?>
                        <!--aside why us ends-->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--aside why us starts-->
                        <?php
    include 'includes/top-blogs.php';
    ?>
                        <!--aside why us ends-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    include 'includes/footer.php';
    ?>