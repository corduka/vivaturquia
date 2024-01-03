<?php
$title = "Preguntas Frecuentes y Sugerencias - Viva Turquía";
$metaD = "Todos los comentarios y preguntas las ponemos en un lugar visible y útil para ti. Haznos preguntas o consulta esta sección si tienes alguna duda.";
include '../config.php';
include 'includes/header.php';
?>

<!--INCLUDES HEADER ENDS-->
<img src="<?= $base_url; ?>img/tours/cappadocia-chimeneas.webp" alt="Panorama del valle de Ürgüp con monolitos y chimeneas de hadas" class="img-fluid header-image">
<main>
  <section class="top-wrap">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h1 class="top-wrap-h1">FAQs</h1>
          <p>Seccion para resolucion de preguntas, quejas o reclamos.</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <p class="top-wrap-p"><a href="<?= $base_url; ?>es/index.php">Homepage</a> &rsaquo;<a
              href="<?= $base_url; ?>es/por-que-nosotros.php"> FAQs</a></p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container main-wrapper">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8">
          <figure>
            <img src="<?= $base_url; ?>img/faqs.webp" class="img-fluid" alt="Animación de personas con varias preguntas y caras preocupadas">
            <figcaption>
              Tengo Una Pregunta a Viva Turquía:
            </figcaption>
          </figure>
          <h2>Reservas, Métodos de Pago y Cancelaciones</h2>
<ol class="faqs-ol">
  <div class="pb-2">
  <li>¿Cómo reservo?</li>
  <span>Puedes reservar de tres maneras: en línea, por llamada telefónica.</span>
  </div>
  <div class="pb-2">
  <li>¿Es seguro reservar en línea? </li>
  <span>Si, contamos con protocolos de seguridad que protegen tu información bancaria.</span>
  </div>
  <div class="pb-2">
  <li>¿Cómo puedo cancelar el valor total de mi tour?</li>
  <span>Puedes comunicarte con nuestro equipo de servicio al cliente para que te ayuden con la devolución del dinero en caso de que ya hayas cancelado o reservado con algún porcentaje.  </span>
  </div>
  <div class="pb-2">
  <li>¿Puedo personalizar mi tour?</li>
  <span>Si ninguno de nuestros planes se ajusta a lo que quieres puedes escoger los destinos de tu preferencia. </span>
  </div>
  <div class="pb-2">
  <li>¿Qué métodos de pago puedo usar?</li>
  <span>Paga con tu tarjeta crédito o débito, western unión, o en efectivo. </span>
  </div>
  <div class="pb-2">
  <li>¿Horario de atención?</li>
  <span>Nuestro canal de atención está abierto los 7 días de la semana las 24 horas. </span>
  </div>
  <div class="pb-2">
  <li>¿Tienen tarifas especiales?</li>
  <span>Frecuentemente hacemos ofertas especiales dependiendo de la época del año y estas ofertas pueden estar sujetas a términos y condiciones. </span>
  </div>
</ol>
<h2>Preguntas Relacionadas Con los Paquetes de Tour</h2>
<ol class="faqs-ol">
<div class="pb-2">
  <li>¿Puedo tener un guía en español?</li>
  <span>Si, nuestros guías expertos además de contar con certificado hablan español así como nuestra ejecutiva de ventas. </span>
  </div>
  <div class="pb-2">
  <li>¿Qué debo llevar para mi tour?</li>
  <span>Cada tour es diferente sin embargo, estas son cosas que debes tener a la mano siempre: <br>
  <ul>
    <li>Pasaporte</li>
    <li>Tirilla de reserva o tour</li>
    <li>Dinero en moneda local (Liras turcas)</li>
    <li>Si piensas usar tu tarjeta de crédito o débito, recuerda que debes hablar con tu banco para evitar cualquier tipo de novedad.</li>
  </ul>
  </span>
  <p>Por otro lado y dependiendo de la temporada en la que vengas la ropa puede variar, pero siempre será recomendable tener en la maleta tus zapatos más cómodos para aquellos recorridos largos, no olvides un banco de batería y ten en cuenta que las tomas eléctricas son diferentes, así que no está demás comprar un adaptador para tus dispositivos. </p>
  </div>
  <div class="pb-2">
  <li>¿Qué incluye cada tour?</li>
  <span>Todos los tours incluyen transporte en carro de lujo, vuelos nacionales, entradas a museos u otras actividades, guía turístico en español, hoteles, desayunos y almuerzos. Puedes consultar también los detalles en la página de <a href="<?= $base_url; ?>es/tours.php">Viajes a Turquía</a>.</span>
  </div>
  <div class="pb-2">
  <li>¿De dónde salen los tours?</li>
  <span>En su mayoría el lugar de arribo es Estambul, esto puede variar para los tour que inician desde la ciudad de Ankara. </span>
  </div>
  <div class="pb-2">
  <li>¿Los tour están adaptados a personas con movilidad reducida o necesidades especiales?</li>
  <span>No, lo ideal es que al momento de hacer la compra o reserva de tu tour te comuniques con nosotros para revisar a detalle el tipo de tour y ofrécete una atención personalizada.</span>
  </div>
</ol>
<h2>Preguntas Generales</h2>
<ol class="faqs-ol">
<div class="pb-2">
  <li>¿Tengo problemas si consumo alcohol en Turquía?</li>
  <span>No, Turquía es un país laico que se aleja mucho de las reglas de países con leyes extremas, de hecho la bebida alcohólica más tradicional es el Raki. </span>
  </div>
  <div class="pb-2">
  <li>¿Hay algún código de vestimenta en Turquía? </li>
  <span>No, cada persona en Turquía es libre de usar cualquier tipo de ropa, lo que sí debes tener en cuenta, especialmente si eres mujer, es que si quieres ingresar a una Mezquita deberás cubrir tu cabello, y además tus piernas y brazos no deben estar muy visibles, por lo que en algunos recintos te felicitan tanto la burka para el cabello como una falda larga. </span>
  </div>
  <div class="pb-2">
  <li>¿Qué idioma debo saber para tener una buena comunicación? </li>
  <span>Inglés, aunque en el sector del turismo vas a encontrar a muchas personas hablando español y otros idiomas, no está demás que aprendas algunas cosas básicas de turco, aquí podrás ver un blog con algunos saludos y cosas que te será muy útil saber. </span>
  </div>
  <div class="pb-2">
  <li>¿Dónde puedo comprar regalos y recuerdos de mi viaje? </li>
  <span>En el gran bazar puedes encontrar muchas opciones, Capadocia ofrece muchas artesanías preciosas, así como podrás visitar algunos lugares en Esmirna, todo depende del lugar donde estés y tus gustos. </span>
  </div>
  <div class="pb-2">
  <li>¿Mi operador local como Claro, Movistar, Virgin funciona en Turquía?</li>
  <span>No, y activar el roaming internacional puede resultar un gasto innecesario un poco caro, así que te recomendamos adquirir un chip en Turquía. <br>Existen  opciones como airalo, Vodafone que funcionan perfecto.  </span>
  </div>
  <div class="pb-2">
  <li>¿Debo llevar dinero en efectivo?</li>
  <span>Si, te recomendamos llevar dinero en efectivo local: liras turcas, aunque la gran mayoría de establecimientos cuentan con sistema de datáfono, algunos lugares muy locales solo reciben dinero en efectivo. </span>
  </div>
  <div class="pb-2">
  <li>¿Cuál es la conversión de moneda?</li>
  <span>Consulta en el sitio oficial del <a href="https://www.tcmb.gov.tr/kurlar/kurlar_tr.html" target="_blank">banco central de Turquía</a> and <a href="https://www.isbank.com.tr/" target="_blank">Türkiye İş Bankas</a>ı.</span>
  </div>
</ol>



        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
    include 'includes/reservation-box.php';
    ?>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!--aside why us starts-->
            <?php
    include 'includes/why-us.php';
    ?>
            <!--aside why us ends-->
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!--aside why us starts-->
            <?php
    include 'includes/top-blogs.php';
    ?>
            <!--aside why us ends-->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
    include 'includes/footer.php';
    ?>