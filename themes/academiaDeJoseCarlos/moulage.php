<?php
/*
Template Name: Moulage
*/
?>
<?php get_header(); ?>
<style>
     /* CURSO MOULAGE */

 .inicio-moulage {
     position: relative;
     height: 100vh;
     overflow: hidden;
     display: flex;
     align-items: center;
     justify-content: flex-end;
     padding-right: 5%;
     text-align: right;
 }

 .hero-moulage {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: -1;
 }

 .hero-moulage img {
     width: 100%;
     height: 100%;
     object-fit: cover;
     filter: brightness(0.5);
 }

 .inicio_contenido-moulage h1 {
     color: var(--color-fondo);
     font-size: 3em;
     font-weight: bold;
     text-transform: uppercase;
     margin: 0 0 10px 50%;
 }

 .inicio_contenido-moulage p {
     color: var(--nav-texto);
     font-size: 1.5em;
     margin: 0 0 20px 0;
 }

 .botones-moulage {
     display: flex;
     justify-content: flex-end;
 }

 .button-moulage {
     padding: 20px 24px;
     border: none;
     background: var(--nav-texto);
     color: #fff;
     border-radius: 20px;
     cursor: pointer;
     font-weight: bold;
     font-size: 2em;
     transition: all 0.3s ease;
 }

 .button-moulage:hover {
     transform: scale(1.05);
 }

 .carousel-moulage {
     display: flex;
     justify-content: space-between;
     overflow-x: auto;
     gap: 10px;
     padding: 20px 5%;
 }

 .carousel-moulage img {
     width: 400px;
     height: 300px;
     object-fit: cover;
     flex-shrink: 0;
     border-radius: 5px;
 }

 .taller-section-moulage {
     padding: 2rem;
     display: flex;
     gap: 2rem;
     position: relative;
     justify-content: center;
 }

 .contenido-moulage-taller {
     flex: 1;
     max-width: 1040px;
 }

 .bloque-moulage-taller {
     background: linear-gradient(145deg, #f7f7f5, #e7e7e4);
     box-shadow: var(--sombra-suave);
     border-radius: 1rem;
     padding: 2rem;
     margin-bottom: 2rem;
     position: relative;
     overflow: hidden;
 }

 .bloque-moulage-taller::before {
     content: "";
     position: absolute;
     top: -20%;
     left: -20%;
     width: 140%;
     height: 140%;
     background: var(--color-fondo-buttom);
     opacity: 0.05;
     transform: rotate(45deg);
 }

 .moulage-taller-h1 {
     text-align: center;
     font-size: 3rem;
     color: var(--nav-texto);
     margin-bottom: 2rem;
 }

 .moulage-taller-h2 {
     font-size: 2.5rem;
     color: var(--nav-texto);
     border-bottom: 3px solid #d4a62880;
     padding-bottom: 0.5rem;
     margin-top: 0;
 }

 .moulage-taller-h3 {
     font-size: 2rem;
     color: var(--color-fondo2-hover);
     margin-top: 1.5rem;
     margin-bottom: 1rem;
 }

 .moulage-taller-p {
     line-height: 1.7;
     margin-bottom: 1rem;
 }

 .moulage-taller-ul {
     padding-left: 1.5rem;
     margin-bottom: 1rem;
 }

 .moulage-taller-ul li {
     margin-bottom: 0.5rem;
 }

 .icono {
     font-size: 1.5rem;
     margin-right: 0.5rem;
 }

 .frase-final-moulage {
     text-align: center;
     font-weight: bold;
     font-size: 2.5rem;
     margin-top: 3rem;
     padding: 1rem;
     background: linear-gradient(90deg, var(--color-fondo2) 0%, var(--color-fondo2-hover) 100%);
     color: #fff;
     border-radius: 0.5rem;
     text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
 }

 /* Cambios para el gif dentro de la sección */
 .gif-derecha-moulage {
     position: sticky;
     top: 10vh;
     align-self: flex-start;
     height: 80vh;
 }

 .gif-derecha-moulage img {
     height: 100%;
     max-height: 80vh;
     border-radius: 1rem 0 0 1rem;
 }

 @media (max-width: 1200px) {
     .taller-section-moulage {
         flex-direction: column;
     }

     .gif-derecha-moulage {
         display: none;
     }

     .inicio_contenido-moulage h1 {
         margin: 0;
     }
 }
</style>
  <!-- CURSO MOULAGE -->

    <section class="inicio-moulage">
        <div class="hero-moulage">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/hero.JPEG" alt="" />
        </div>
        <div class="inicio_contenido-moulage">
            <h1>Aprende a hacer el patrón perfecto a la primera… directamente sobre el maniquí.</h1>
            <p>Una técnica visual y precisa que transforma tu forma de patronar para siempre</p>
            <div class="botones-moulage">
                <button class="button-moulage">Quiero apuntarme</button>
            </div>
        </div>
    </section>
    <section class="carousel-moulage">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/moulage1.webp" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/moulage2.webp" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/moulage3.webp" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/moulage4.webp" alt="">
    </section>

    <h1 class="moulage-taller-h1">Taller de Moulage Técnico</h1>

    <section class="taller-section-moulage">
        <div class="contenido-moulage-taller">
            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">💼</span>Descripción general</h2>
                <p class="moulage-taller-p"><strong>Taller de Moulage Técnico (20h)</strong></p>
                <p class="moulage-taller-p">Impartido por Jose Carlos Herrera – Diseñador de moda y patronista</p>
                <p class="moulage-taller-p">¿Cuántas veces te has atascado con un patrón imposible de sacar?...</p>
                <ul>
                    <li>Te cuesta empezar sobre plano.</li>
                    <li>No sabes cómo resolver ciertos volúmenes.</li>
                    <li>Haces glasilla tras glasilla sin acertar.</li>
                    <li>Drapeas en plano sin éxito.</li>
                    <li>Te preguntas cómo se resuelven los volúmenes en las grandes casas de moda.</li>
                    <li>Llevas años trabajando, pero sientes que puedes mejorar.</li>
                </ul>
                <p class="moulage-taller-p">Este taller te enseña a crear directamente sobre el maniquí cualquier
                    prenda, volumen o diseño que puedas imaginar.</p>
                <p class="moulage-taller-p">Verás cómo el moulage —la técnica tridimensional para construir patrones en
                    3D— se convierte en tu mejor aliada para entender el cuerpo y dominar el patronaje sin
                    frustraciones.</p>
                <p class="moulage-taller-p">¿Lo mejor? Luego aprenderás a trasladarlo al plano (2D), para industrializar
                    tus piezas y usarlas en producción, costura o colecciones.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">✅</span>Lo que aprenderás</h2>
                <ul class="moulage-taller-ul">
                    <li>Fundamentos del moulage: historia y utilidad</li>
                    <li>Cómo preparar el maniquí y colocar las cintas correctamente</li>
                    <li>Tipos de maniquíes, cintas y retor; adaptación a otras medidas</li>
                    <li>Realización del patrón de brazo sobre maniquí y confección</li>
                    <li>Patrón base de cuerpo, cuello y transformaciones visuales</li>
                    <li>Creación y transformación de una americana con manga sastre</li>
                    <li>Realización de un bustier (corset) técnico con copas y ballenas</li>
                    <li>Técnicas de drapeado cruzado (cuerpo, falda y vestido de fiesta)</li>
                    <li>Industrialización del patrón: de 3D a 2D, de forma clara y sencilla</li>
                </ul>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">🧰</span>Material incluido</h2>
                <p class="moulage-taller-p">Recibirás una carpeta personalizada con:</p>
                <ul class="moulage-taller-ul">
                    <li>Breve introducción teórica al moulage</li>
                    <li>Paso a paso de la colocación de cintas</li>
                    <li>Patrón de brazo completo</li>
                    <li>Fichas de todos los ejercicios realizados</li>
                    <li>Tejido necesario para el taller</li>
                </ul>
                <p class="moulage-taller-p">Durante las sesiones también dispondrás de los maniquís preparados y el
                    resto de materiales técnicos para trabajar sin preocuparte de nada.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">🎒</span>Material que debes traer tú</h2>
                <ul class="moulage-taller-ul">
                    <li>Tijeras</li>
                    <li>Regla y escuadra</li>
                    <li>Bolígrafo borrable</li>
                    <li>Rotuladores (rojo, verde y negro)</li>
                    <li>Cinta métrica</li>
                    <li>Alfileres</li>
                </ul>
                <p class="moulage-taller-p">Solo necesitas esto. Lo demás te lo proporcionamos nosotros.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">⏰</span>Duración y horarios</h2>
                <p class="moulage-taller-p">El taller tiene una duración total de 20 horas, distribuidas en tres
                    jornadas:<br>
                    Viernes: 15:30 – 19:30<br>
                    Sábado y domingo: 10:00 – 14:00 y 15:30 – 19:30</p>
                <p class="moulage-taller-p">Un horario flexible que se adapta a tu ritmo y te permite concentrarte en
                    aprender.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">🎓</span>Un diploma, una motivación</h2>
                <p class="moulage-taller-p">Al finalizar el curso recibirás un diploma de asistencia.
                    Un reconocimiento real para ti y una motivación más para seguir creciendo como profesional.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">💶</span>Precio</h2>
                <p class="moulage-taller-p">390 € – todo incluido.
                    Plazas limitadas a un grupo muy reducido para garantizar atención individualizada.
                </p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">🏢</span>¿Tienes una empresa? Esto te interesa</h2>
                <p class="moulage-taller-p">Este taller es bonificable a través de FUNDAE.
                    Si trabajas en una empresa, puedes solicitar que se bonifique a través de su crédito anual para
                    formación continua. Consulta con tu gestor o departamento de RRHH.</p>
            </div>

            <div class="bloque-moulage-taller">
                <h2 class="moulage-taller-h2"><span class="icono">👨‍🏫</span>El profesor: Jose Carlos Herrera</h2>
                <p class="moulage-taller-p">Con más de 30 años de experiencia como diseñador y docente, Jose Carlos es
                    experto en patronaje técnico y moulage. Dirige su propia escuela y firma, y comparte su conocimiento
                    con profesionales y amantes de la moda que buscan crecer y perfeccionarse.
                </p>
            </div>
        </div>
        <div class="gif-derecha-moulage" aria-label="Gif decorativo">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/maniqui-tela.gif" alt="" role="presentation">
        </div>
    </section>
    <p class="frase-final-moulage">#Nada Es Imposible Solo Hay Que Encontrar La Manera</p>
        <?php get_footer(); ?>