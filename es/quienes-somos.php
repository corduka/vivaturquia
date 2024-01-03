<?php
$title = "Te Contamos Quiénes Hacen Posible Tus Viajes a Turquía";
$metaD = "Entre apasionados por la vida y amantes de los viajes nos entendemos, conócenos y contáctanos. Viajes a Turquía con Viva Turquía te da muchos mas.";
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
                    <h1 class="top-wrap-h1">¿Quiénes Somos?</h1>
                    <p>La conexión es importante, lee sobre nosotros y conócenos un poco más.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/destinos.php"> ¿Quiénes Somos?</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2>Viajas con Viva Turquia</h2>
                    <p>Viva Turquía está conformada por Ibonne una mujer colombiana, entusiasta y amante de las aventuras y Abdullah, un turco divertido, apasionado por la vida, viajero innato que ha recorrido Latinoamérica como nómada digital.</p>
                    <p>Como viajeros y en nuestro recorrido por Turquía logramos identificar y conocer de cerca las necesidades y principales preocupaciones a la hora de planear y realizar un viaje, es por ello que nace Viva Turquía, una plataforma web innovadora, completa y fácil de usar, nuestro compromiso es hacerte sentir acompañado y en confianza antes, durante y después de tus viajes. contarás con un equipo de trabajo experto, comprometido, honesto y amigable.</p>
                    <p>Somos conscientes de que Turquía es un destino fascinante y puede resultar muy ajeno a nuestra cultura, te ayudamos a dar este importante paso: cumplir sueños y atreverse a lo diferente.</p>
                </div>



                <div class="col-sm-12 col-md-12 col-lg-4">








<div class="col-sm-12 col-md-12 col-lg-12">
                        <!--Accordion Explain Reservation Stars-->
                        <?php
    include 'includes/corporativo-sidebar.php';
    ?>
                        <!--Accordion Explain Reservation Ends-->
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