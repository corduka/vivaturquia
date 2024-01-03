<?php
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/hotels/kayakapi-1-min.webp" alt="Espacio común con piscina y sillas de descanso del hotel Kayakapi premium caves en Capadocia" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Kayakapi Premium Caves Cappadocia</h1>
                    <p>Siente el éxtasis de hospedarte en uno de los hoteles más prestigiosos de la región.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Homepage</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles.php"> Hoteles</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles.php"> Kayakapı Premium Caves Cappadocia</a></p>
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
                            <img src="<?= $base_url; ?>img/hotels/kayakapi-1-min.webp" alt="Espacio común con piscina y sillas de descanso del hotel Kayakapi premium caves en Capadocia" class="img-fluid img-destination">
                        </div>
                    </div>
                    <section class="hotels">
                        <p>Está ubicado en Ürgüp. En el barrio Kayakapi, una de las zonas residenciales más antiguas de la región, más o menos para los  siglos XVIII-XIX la región ya adoptaría la estética de ciudad que conserva al día de hoy. Además de esto, la región es famosa por conservar iglesias rupestres cristianas, un dato muy interesante para los turistas. </p>
                        <p>Kayakapi Premium Caves Cappadocia Urgup turkey es una elección de la que no te arrepentirás, cada una de sus habitaciones tiene un diseño delicado y fino, hecho que lo convierte en el primer Hotel Boutique de Capadocia con licencia comercial. </p>
                        <p>Te damos la bienvenida desde ya, llámanos o escríbenos si quieres reservar. </p>
                        <p>Si deseas conocer más detalles ve al <a href="" target="_blank">sitio oficial de Kayakapı Premium Caves</a>.</p> 
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