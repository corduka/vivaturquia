<?php
$title = "Viajes a Turquía Pagos en Línea - Reserva en Línea";
$metaD = "Reserva tu viaje a Turquía en nuestro sitio web, contáctanos para más información o asesorías personalizadas de viaje. Viajar a Turquía nunca fue tan fácil.";
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/why-us/world-on-hands.webp" alt="Cuatro manos sosteniendo el planeta tierra como símbolo de cuidado" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Pago En Linea</h1>
                    <p>Reserva tu viaje a Turquía en nuestro sitio web, contáctanos para más información o asesorías personalizadas de viaje. Viajar a Turquía nunca fue tan fácil.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo.php">Viva Turquía Corporativo</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo/pago-en-linea.php">Pago En Linea</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2>Políticas de Pago</h2>
                   <p> Para los pagos que realizas en nuestro sitio web, se utiliza la infraestructura de TPV virtual del banco en línea.</p>
    <p>En los pagos que realizas en sus compras, la información de tu tarjeta de crédito/débito no se registra ni almacena de ninguna manera en nuestro sitio web ni en la infraestructura del intermediario de pago.</p>
    <p>Gracias al certificado de seguridad SSL utilizado en nuestro sitio web, todas las transacciones que realizará en nuestra página están encriptadas y no pueden ser accedidas por terceros o software.</p>
    <p>Al momento de realizar el pago de tus compras, puedes realizar el pago a plazos con el número de cuotas y tasas de interés permitidas por el banco que utilices, de acuerdo con los convenios realizados por la entidad de pago intermediaria con los bancos.</p>                
                </div>



                <div class="col-sm-12 col-md-12 col-lg-4">






                <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--corporativo Stars-->
                        <?php
    include '../includes/corporativo-sidebar.php';
    ?>
                        <!--corporativo Ends-->
                    </div>

<div class="col-sm-12 col-md-12 col-lg-12">
                        <!--Accordion Explain Reservation Stars-->
                        <?php
    include '../includes/explain-rezervation.php';
    ?>
                        <!--Accordion Explain Reservation Ends-->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--aside why us starts-->
                        <?php
    include '../includes/why-us.php';
    ?>
                        <!--aside why us ends-->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--aside why us starts-->
                        <?php
    include '../includes/top-blogs.php';
    ?>
                        <!--aside why us ends-->
                    </div>


                </div>
            </div>
        </div>
    </section>
</main>
<?php
    include '../includes/footer.php';
    ?>