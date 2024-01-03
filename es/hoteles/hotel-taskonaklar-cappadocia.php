<?php
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
    <img src="<?= $base_url; ?>img/hotels/taskonaklar.webp" alt="Jacuzzi del hotel Taskonaklar con vista panorámica de Capadocia" class="img-fluid header-image">
    <main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">Hotel Taşkonaklar Cappadocia</h1>
                    <p>¿Estás listo para tener las vacaciones mas inolvidables?</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Homepage</a> &rsaquo;<a href="<?= $base_url; ?>es/hoteles.php"> Hoteles</a> &rsaquo;<a href="<?= $base_url; ?>es/destinos.php"> Hotel Taşkonaklar Cappadocia</a></p>
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
                            <img src="<?= $base_url; ?>img/hotels/taskonaklar.webp" alt="Jacuzzi del hotel Taskonaklar con vista panorámica de Capadocia" class="img-fluid img-destination">
                        </div>
                    </div>
                    <section class="hotels">
                        <p>La trayectoria de este hotel se remonta al 2006, y entra en la categoría de Cappadocia cave hotels, u hoteles tipo cueva. Durante todos estos años ha tenido como objetivo ser un lugar cómodo, acogedor y seguro para sus visitantes.</p>
                        <p>Para su 15 aniversario hicieron una increíble remodelación que lo ha convertido en uno de los más llamativos hoteles de la región al ser muy solicitado para lunas de miel  para recién casados ¿por qué? El hotel incluye jacuzzi, terrazas, piscinas con agua caliente y una atmósfera muy romántica.</p>
                        <p>El hotel queda en Uchisar, favorece mucho a los que quieren observar los globos aerostáticos de Capadocia. Así que te invitamos a conocer más detalles y a  tener un tiempo de descanso y relajación invaluable. Has <a href="https://taskonaklar.com/en/" target="_blank">clic aquí</a> para ir al sitio oficial de Taşkonaklar Cave Hotel por mas detalles.</p>
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