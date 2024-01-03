<?php
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/hotels/argos-hotel-1.webp" alt="Suite tipo cueva del hotel Argos en Capadocia con cama doble y sofá de descanso" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Argos Hotel Cappadocia</h1>
                    <p>Que nada te impida realizar el viaje que tanto sueñas, en Argos Hotel te estamos esperando.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles.php"> Hoteles</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles/argos-hotel-cappadocia.php"> Argos Hotel Cappadocia</a></p>
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
                            <img src="<?= $base_url; ?>img/hotels/argos-hotel-1.webp" alt="Suite tipo cueva del hotel Argos en Capadocia con cama doble y sofá de descanso" class="img-fluid img-destination">
                        </div>
                    </div>
                    <section class="hotels">
                        <p>Argos Cappadocia, es uno de los más reconocidos hoteles de la región, reconocido internacionalmente por su historia y originalidad.</p>
                        <p>Se fundó en el año 1996 y la idea inicial fue construir una casa familiar, con lo que no contaron era que el lugar que habitaban en ese momento tenía algunas ruinas arqueológicas asociadas a un antiguo monasterio. </p>
                        <p>Así pues, por la importancia estética e historia del lugar antes de  empezar la construcción se buscó el apoyo de arquitectos expertos, historiadores y el comité de conservación de la región, quienes hicieron un trabajo impecable posibilitando un lugar mágico para nuestros invitados. </p>
                        <p>Si optas por este hotel, te sentirás mejor que en casa, en cualquiera de sus 51 habitaciones, su ubicación es central por lo que puedes caminar hacia lugares importantes como el castillo de Uchisar o el Valle de las Palomas.</p>
                        <p>Si deseas conocer más detalles ve al <a href="https://www.argosincappadocia.com/home-page" target="_blank">sitio oficial de Argos Hotel Cappadocia</a>.</p> 
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