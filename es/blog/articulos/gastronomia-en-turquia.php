<?php
$title = "Conoce Los Exquisitos Platos de la Gastronomía en Turquía";
$metaD = "La gastronomía en turquia tiene una fuerte influencia de la cocina mediterránea y oriental, te invitamos a conocer algunos de sus platos mas famosos aquí."; 
include '../../../config.php';
include '../../includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/blog/baklava.webp" alt="baklava" class="img-fluid header-image">
<main>
    <article>
        <section class="top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h1 class="top-wrap-h1">Gastronomía en Turquía</h1>
                        <p>Una de las cosas que mas impactan en un viaje es la comida, eso dice mucho de las costumbres de un país, particularmente la gastronomía turca es una delicia para los sentidos.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/blog.php"> Blog</a> &rsaquo;<a href="<?= $base_url; ?>es/blog/articulos/gastronomia-en-turquia.php"> Gastronomía en Turquía</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container main-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <hr>
                        <p>Una de las cosas que mas impactan en un viaje es la comida, eso dice mucho de las costumbres de un país, particularmente la gastronomía turca es una delicia para los sentidos. Su mezcla de sabores, aromas y texturas hacen que sea una de las más apreciadas en todo el mundo. A continuación, te presentamos algunos de los platos más populares de la cocina turca.</p>
                        <h2>Kebab</h2>
                        <p>Este es uno de los platos más famosos de Turquía. Se trata de una brocheta de carne marinada en especias y cocida a la parrilla. Hay diferentes tipos de kebab, pero el más conocido es el kebab de cordero.</p>
                        <h2>Baklava</h2>
                        <figure>
                            <img src="<?= $base_url; ?>img/blog/baklava.webp" alt="baklava" class="img-fluid img-destination">
                            <figcaption>
                            Baklava
                            </figcaption>
                        </figure>
                        <p>Este postre turco es una deliciosa combinación de hojaldre, miel, nueces y pistachos. Es un postre dulce y pegajoso que se sirve en pequeñas porciones.</p>
                        <h2>Meze</h2>
                        <p>En Turquía, los meze son una variedad de pequeños platos que se sirven como aperitivo. Pueden incluir hummus, tzatziki, berenjena asada, albóndigas y mucho más.</p>
                        <h2>Mantı</h2>
                        <p>Este plato es una especie de dumpling turco relleno de carne picada y especias. Se sirve con yogur y una salsa de tomate picante.</p>
                        <h2>Lahmacun</h2>
                        <p>Este plato es una especie de pizza turca. Se trata de una masa fina cubierta de carne picada, tomate y especias.</p>
                        <h2>Çöp Şiş</h2>
                        <p>Este es otro tipo de kebab, pero en lugar de carne en una brocheta, se trata de pequeños trozos de carne marinada y asada a la parrilla.</p>
                        <h2>Döner</h2>
                        <p>Es un plato de carne de cordero cocida en un asador vertical. Se puede servir en un plato o en un pan pita con ensalada y salsa.</p>
                        <p>Estos son solo algunos de los platos más populares de la gastronomía turca.</p>
                        <h3>¿Cómo Son los Desayunos Turcos?</h3>
                        <p>Para los turcos, la comida mas importante del día es el desayuno, por tal razón, sus mesas en la mañana son grandes y coloridas. Los alimentos que se requieren  para preparar un desayuno tradicional turco son: Aceitunas, pan, quesos, tomates, pepinos, huevos y  por supuesto.</p>
                        <p>Una de las cosas que suelen ser muy interesantes para viajeros de países latinoamericanos es que los turcos comen pan en las tres comidas del día, Si tienes la oportunidad de visitar Turquía, lo podrás comprobar por ti mismo.</p>
                        <p>No olvides visitar nuestra página de <a href="<?= $base_url; ?>es/tours.php">tours a Turquía</a>, tendrás desayunos y almuerzos turcos incluidos en cualquiera que sea tu elección.</p>
                    </div>
                    <!--Reservation From Starts-->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <!--aside why us starts-->
                            <?php
    include '../../includes/top-blogs.php';
    ?>
                            <!--aside why us ends-->
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <!--aside why us starts-->
                            <?php
    include '../../includes/why-us.php';
    ?>
                            <!--aside why us ends-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<!--Reservation From Ends-->
<?php
    include '../../includes/footer.php';
    ?>