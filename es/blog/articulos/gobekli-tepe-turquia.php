<?php
$title = "Göbekli Tepe Turquia: el Templo Más Antiguo del Mundo";
$metaD = "Göbekli Tepe es un sitio arqueológico ubicado en el sureste de Turquía, cerca de la ciudad de Sanliurfa. Gobekli Tepe es el Templo Más Antiguo del Mundo."; 
include '../../../config.php';
include '../../includes/header.php';
$heading1 = "Göbekli Tepe: el Templo Más Antiguo del Mundo";
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/blog/gobeklitepe.webp" alt="gobeklitepe" class="img-fluid header-image">
<main>
    <article>
        <section class="top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h1 class="top-wrap-h1" id="header1"><?php echo $heading1; ?></h1>
                        <p>Göbekli Tepe es un sitio arqueológico ubicado en el sureste de Turquía, cerca de la ciudad de Sanliurfa. Se cree que es el templo más antiguo del mundo, que data de alrededor del año 10.000 a. C., que es más de 6.000 años más antiguo que Stonehenge en Inglaterra y las pirámides de Egipto.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Inicio</a> &rsaquo;<a href="<?= $base_url; ?>es/blog.php"> Blog</a> &rsaquo;<a href="<?= $base_url; ?>es/blog/articulos/gobekli-tepe-turquia.php"> <?php echo $heading1; ?></a></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container main-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <hr>
                        <figure>
                            <img src="<?= $base_url; ?>img/blog/gobeklitepe.webp" alt="gobeklitepe" class="img-fluid img-destination">
                            <figcaption>
                            Gobekli Tepe, Turquía
                            </figcaption>
                        </figure>
                        <h2>Descubrimiento y Excavación</h2>
<p>Göbekli Tepe fue descubierto por primera vez en 1963 por un equipo de arqueólogos de la Universidad de Chicago y la Universidad de Estambul, pero no fue hasta 1994 que el sitio fue plenamente reconocido por su importancia. Desde entonces, las excavaciones han estado en curso, revelando una increíble cantidad de información sobre las personas que construyeron y usaron el sitio.</p>
<h2>Estructura y Diseño</h2>
<p>El sitio consta de una serie de estructuras circulares, llamadas "recintos", que se componen de pilares y paredes de piedra maciza. Cada recinto está rodeado por pilares independientes más pequeños, algunos de los cuales están decorados con tallas intrincadas de animales y otros símbolos.</p>
<p>Los pilares en sí miden hasta 18 pies de alto y pesan hasta 16 toneladas, lo que hace que su transporte y construcción sean una hazaña notable para el período de tiempo. Los recintos también están dispuestos en un patrón específico, con cada uno frente a un punto central, lo que sugiere que el sitio fue utilizado con fines religiosos o ceremoniales.</p>
<h2>Importancia e interpretación</h2>
<p>El descubrimiento de Göbekli Tepe ha desafiado muchas suposiciones sobre el desarrollo de la civilización humana. Sugiere que la religión organizada y el culto comunal pueden haber sido la fuerza impulsora detrás de la creación de sociedades complejas, en lugar de la agricultura u otros factores económicos.</p>
<p>Las tallas en los pilares también sugieren una comprensión sofisticada del arte y el simbolismo, lo que indica que las personas que construyeron el sitio no eran primitivas ni incivilizadas, como se les había representado anteriormente.</p>
<h2>Preservación y Acceso</h2>
<p>Göbekli Tepe ahora es un sitio del Patrimonio Mundial de la UNESCO y está abierto al público para recorridos y visitas. Sin embargo, el sitio es frágil y se necesitan esfuerzos continuos de conservación para garantizar su supervivencia para las generaciones futuras.</p>
<p>En conclusión, Göbekli Tepe es un sitio arqueológico notable que ha brindado nuevos conocimientos sobre el desarrollo de la civilización humana. Su descubrimiento ha desafiado nuestra comprensión de la historia y ha abierto nuevas vías para la investigación y la interpretación.</p>
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