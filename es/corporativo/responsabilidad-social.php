<?php
$title = "Responsabilidad Social - Viajes a Turquía con Viva Turquía";
$metaD = "En Viva Turquía estamos a favor de los Derechos Humanos, del cuidado de nuestro planeta a través de concretas prácticas organizacionales.";
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
                    <h1 class="top-wrap-h1">Responsibilidad Social</h1>
                    <p>La responsabilidad Social nos lleva a la conciencia y a la acción.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo.php">Corporativo</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2>Viva Turquía Considera Que</h2>
                    <p>Los Derechos Humanos, deben prevalecer sobre todas las circunstancias, por este motivo; Viva Turquía como parte del sector del turismo rechaza rotundamente cualquier tipo de violencia basada en género, se opone contundentemente al turismo sexual, a la  trata de personas y el tráfico ilícito de migrantes.</p>
                    <p>Nos recogemos en normas internacionales que abogan por la integridad y vida de mujeres, niñas y niños.</p>
                    <ul>
                        <li>Resolución 57/176 de la Asamblea General, de 18 de diciembre de 2002, titu- lada “Trata de mujeres y niñas”.</li>
                        <li>Convención sobre la eliminación de todas las formas de discriminación contra la mujer (1979) (El artículo 6 de la Parte I se refiere a la trata de mujeres y la explotación de la prostitución de la mujer) Resolución 34/180, anexo, de la Asamblea General.</li>
                        <li>Protocolo facultativo de la Convención sobre los Derechos del Niño relativo a la venta de niños, la prostitución infantil y la utilización de niños en la pornografía (2000) Resolución 54/263, anexo II, de la Asamblea General.</li>   
                        <li>Convenio sobre la prohibición de las peores formas de trabajo infantil y la acción inmediata para su eliminación.</li>
                        <li>Convenio núm. 182 de la Organización Internacional del Trabajo, de 17 de junio de 1999 Naciones Unidas, Treaty Series, vol. 2133, núm. 37245.</li>
                        <p>En Viva Turquía nos responsabilizamos con el impacto ambiental y hemos reducido el uso de papel para prevenir su uso innecesario.</p>
                    </ul>
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