<?php
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/hotels/hera-suite-2.webp" alt="Suite tipo cueva del hotel Hera cave suites dos camas, sofá de descanso y televisión" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Hera Cave Suites Cappadocia</h1>
                    <p>Hotel Cueva de Hera, les da la bienvenida.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Homepage</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles.php"> Hoteles</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles/hera-cave-suites-cappadocia.php"> Hera Cave Suites Cappadocia</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <img src="<?= $base_url; ?>img/hotels/hera-suite-2.webp" alt="Suite tipo cueva del hotel Hera cave suites dos camas, sofá de descanso y televisión" class="img-fluid img-destination">
                        </div>
                    </div>
                    <section class="hotels">
                        <p>Este hotel tipo cueva está ubicado en Goreme, tiene un bello contraste entre lo moderno y lo antiguo, su atmósfera oscila entre épocas históricas, y te acogerán personas con una calidad humana increíble,  es considerado por muchos turistas por su hospitalidad y buen servicio. </p>
                        <p>El hotel cuenta con 28 amplias, impecables y decoradas habitaciones turcas, alfombras y colores que contrastan perfectamente. Al tener una ubicación elevada en la región ofrece una excelente vista tanto al amanecer -donde se pueden apreciar los cientos de globos que van apareciendo gradualmente en el cielo- y los atardeceres desde sus amplias y cómodas terrazas. </p>
                        <p>Si deseas más información sobre el lugar, precios y reservas no dudes en contactarnos. Ve al <a href="https://www.heracavesuites.com/en" target="_blank">sitio oficial de Hera Cave Suites Hotel</a> por mas detalles.</p> 
                    </section>
                </div>
                <!--Tabs ends-->
                <!--Reservation From Starts-->
               
                <div class="col-sm-12 col-md-12 col-lg-4">



                <div class="col-sm-12 col-md-12 col-lg-12">
                        <!--Accordion Explain Reservation Stars-->
                        <?php
    include '../includes/explain-rezervation.php';
    ?>
                        <!--Accordion Explain Reservation Ends-->
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">


                        <?php
    include '../includes/reservation-box.php';
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
        </section>
    </main>
<!--Reservation From Ends-->

<?php
    include '../includes/footer.php';
    ?>