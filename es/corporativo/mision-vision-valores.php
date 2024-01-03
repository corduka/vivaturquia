<?php
$title = "Valores Corporativos - Misión y Visión Viva Turquía";
$metaD = "Nos encanta soñar e ir detrás de cada meta, te compartimos los valores que nos han hecho llegar hasta aquí y también queremos que sepas hacia dónde vamos.";
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
                    <h1 class="top-wrap-h1">Misión, Visión y Valores de Viva Turquía</h1>
                    <p>Te invitamos a leer nuestra misión, visión y valores.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo.php">Viva Turquía Corporativo</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo.php">Misión, Visión y Valores</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2>Misión de Viva Turquía</h2>
                    <p>Inspirar motivación y optimismo conectando con el mundo del turismo y sus necesidades a través de una plataforma completa y un servicio excepcional.</p>
                    <h2>Visión de Viva Turquía</h2>
                    <ul>
                        <li>Convertir Viva Turquía en una de las plataformas web más reconocidas en el sector del turismo.</li>
                        <li>Conectar con todos los continentes potenciando el sector del turismo.</li>
                        <li>Desarrollar un equipo de trabajo humano y creativo.</li>
                        <li>Maximizar la satisfacción de los viajeros con nuestro valor agregado.</li>
                    </ul>
                    <h2>Valores de Viva Turquía</h2>
                    <ul>
                        <li><em>Integridad:</em> Ser transparentes y poner la humanidad en cada una de nuestras prácticas.</li>
                        <li><em>Responsabilidad social:</em> Conciencia de las problemáticas mundiales y responsabilidad con aquellas prácticas individuales y empresariales que podemos emplear en pro de un mundo mejor.</li>
                        <li><em>Calidad:</em> Revisamos cada acción de manera cautelosa y detallada para garantizar calidad en cada uno de nuestros servicios.</li>
                        <li><em>Pasión:</em> Tenemos pasión por la vida y por lo que hacemos en Viva Turquía, aquello que se hace con pasión no es trabajo e impacta otras vidas de manera positiva.</li>
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