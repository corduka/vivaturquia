<?php
$title = "Experiencia, Acompañamiento y Cuidados - Viajes a Turquia";
$metaD = "Viva Turquía cuenta con todos los protocolos de higiene y seguridad. Transporte en Vehículos de lujo, libres de humo pensando en ti."; 
include '../../config.php';
include '../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/alerts/visa-approved.webp" alt="Formulario de aplicacion de visa con sello de aprobado y una lupa sobre el papel" class="img-fluid header-image">
<main>
    <section class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h1 class="top-wrap-h1">La Experiencia de Viajar Bien</h1>
                    <p>Tú y tu viaje son nuestra prioridad, cuidaremos cada detalle de seguridad incluso antes del arribo a Turquía ¿Cómo?</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros.php">Por Que Nosotros</a>  &rsaquo; <a
                            href="<?= $base_url; ?>es/por-que-nosotros/la-experiencia-de-viajar-bien.php">La Experiencia de Viajar Bien</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/why-us/call-center-girl.webp" class="img-fluid" alt="Mujer en call center hablando con diadema y atendiendo a su computador">
                                <figcaption>Logística y organización</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Preparación y Alistamiento</h2>
                            <ul>
                                <li>Acompañamiento y guía de vacunas requeridas.</li>
                                <li>Acompañamiento y guía de documentación requerida según tu país.</li>
                                <li>Protegemos tu reserva ante cualquier eventualidad.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/why-us/vito-car.webp" class="img-fluid" alt="Viva Turquia vedículo de lujo por dentro sillas cómodas color café">
                                <figcaption>Viaja seguro en nuestros vehículos de lujo</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Durante el Viaje</h2>
                            <ul>
                                <li>Transporte privado libre de humo.</li>
                                <li>Nuestro equipo cumple con altos estándares de higiene y chequeo constante de enfermedades virales que puedan ser fácilmente contagiosas.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="ways-to-book">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <figure>
                                <img src="<?= $base_url; ?>img/why-us/at-office.webp" class="img-fluid" alt="Profesionales de Viva Turquia en oficina haciendo un acuerdo y dándose la mano">
                                <figcaption>Recibimos tus comentarios y retroalimentación para mejorar</figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h2>Después de Tu Viaje</h2>
                            <p>Atenderemos cualquier tipo de comentario u observación que pueda llevarnos a mejorar aspectos que consideres relevantes.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>
<?php
    include '../includes/footer.php';
    ?>