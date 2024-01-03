<?php
$title = "Trabaja Con Nosotros - Oportunidades Profesionales";
$metaD = "Estamos constantemente en crecimiento, evoluciona con nosotros y pon a volar tu experiencia, consulta aquí nuestras vacantes.";
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
                    <h1 class="top-wrap-h1">Viva Turquía Carreras</h1>
                    <p>¿Quieres hacer parte de un equipo de trabajo único?</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo/carrera-con-viva-turquia.php">Carrera con Viva Turquía</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo.php">Misión, Visión y Valores</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <p>Estamos en constante crecimiento, nuestro equipo de trabajo se caracteriza por ser creativo, entusiasta y autónomo.</p>
                    <h2>Viva Turquía Está Buscando</h2>
                    <ul>
                        <li>PHP, Python, Javascript, Ruby Developer</li>
                        <li>Back-End Web Developer</li>
                        <li>SEO Expert (Onpage, Technical and Backlinking)</li>
                        <li>Content Writer</li>
                    </ul>
                    <p>¿Crees que tienes alguna de estas características? Pues contáctanos por <em><a href="mailto:vivaturquiatours@gmail.com">el correo electrónico de Viva Turquía</a></em> con asunto Carrera en Viva Turquía.</p>
                    <p>Envíanos tu CV, haz una breve descripción de ti, de tus habilidades y cuéntanos cómo podrías impactar Viva Turquía.</p>
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