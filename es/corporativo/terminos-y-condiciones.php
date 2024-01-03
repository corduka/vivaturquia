<?php
$title = "Términos y Condiciones - Viajes a Turquia con Viva Turquía";
$metaD = "Lee detenidamente nuestros términos y condiciones, si tienes alguna duda con ellos contáctanos y la resolvemos. !Que chevere viajar con Viva Turquía!";
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
                    <h1 class="top-wrap-h1">Términos y Condiciones</h1>
                    <p>Por favor lee cuidadosamente los términos y condiciones.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo/carrera-con-viva-turquia.php">Carrera con Viva Turquía</a> &rsaquo; <a href="<?= $base_url; ?>es/corporativo/terminos-y-condiciones.php">Términos y Condiciones</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container main-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <h2>Imágenes y Fotos</h2>
                    <p>Algunas de las imágenes están tomadas de www.freepik.com por free. El uso de los mismos en sitios web personales o comerciales es gratuito. Si tiene alguna pregunta sobre derechos de autor y derechos de uso o si tiene alguna duda, envíe un correo electrónico a vivaturquiatours@gmail.com. Si hay algún problema de derechos de autor, envíe un correo electrónico a vivaturquiatours@gmail.com e infórmenos. La acción requerida se tomará en 5 días hábiles.</p>
                    <h2>Images and Photos</h2>
                    <p>Some of the images are taken from www.freepik.com by free. Usage of them in a personal or commercial websites are free. If you have any question about copyright and usage rights or if you have any doubts, please send e-mail to vivaturquiatours@gmail.com. If there is any copyright issue, please send email to vivaturquiatours@gmail.com and inform us. Required action will be taken in 5 business days.</p>
                    <h2>Görseller ve Fotoğraflar</h2>
                    <p>Görsellerin bir kısmı ücretsiz olarak www.freepik.com'dan alınmıştır. Kişisel veya ticari web sitelerinde kullanımı ücretsizdir. Telif hakkı ve kullanım haklarıyla ilgili herhangi bir sorunuz varsa veya herhangi bir şüpheniz varsa, lütfen vivaturquiatours@gmail.com adresine e-posta gönderin. Ya da herhangi bir telif hakkı sorunu varsa lütfen vivaturquiatours@gmail.com adresine e-posta gönderin ve bizi bilgilendirin. 5 iş günü içerisinde gerekli işlem yapılacaktır.</p>
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