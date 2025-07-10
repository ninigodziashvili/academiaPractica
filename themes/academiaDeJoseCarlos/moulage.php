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
        font-size: 1.5em;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .button-moulage:hover {
        transform: scale(1.05);
    }

    .carousel-moulage {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
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
        margin-top: 1em;
    }

    .moulage-taller-h2 {
        font-size: 2rem;
        color: var(--nav-texto);
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
        font-size: 1.3rem;
    }

    .moulage-taller-ul {
        padding-left: 1.5rem;
        margin-bottom: 1rem;
    }

    .moulage-taller-ul li {
        margin-bottom: 0.5rem;
        font-size: 1.3rem;
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
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .gif-derecha-moulage img {
        height: 100%;
        max-height: 80vh;
        border-radius: 1rem 0 0 1rem;
    }

    /* Pestañas desplegables */

    .bloque-plegable-moulage {
        border: 1px solid #ccc;
        border-radius: 1rem;
        margin-bottom: 1rem;
        overflow: hidden;
        transition: max-height 0.3s ease;
        cursor: pointer;
    }

    .bloque-plegable-moulage .contenido-plegable {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease;
        padding: 0 1rem;
    }

    .bloque-plegable-moulage.abierto .contenido-plegable {
        max-height: 2000px;
        /* valor alto para permitir expansión completa */
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .boton-toggle-moulage {
        background-color: transparent;
        color: var(--nav-texto);
        border: none;
        font-weight: bold;
        font-size: 1.3rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin: 1rem auto;
        /* centrado horizontal */
        padding: 0.5rem 1rem;
        max-width: 90%;
    }


    .boton-toggle-moulage::after {
        content: "▼";
        display: inline-block;
        transition: transform 0.3s;
    }

    .bloque-plegable-moulage.abierto .boton-toggle-moulage::after {
        transform: rotate(180deg);
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

    @media (max-width: 1024px) {
        .carousel-moulage {
            justify-content: center;
            gap: 1rem;
        }

        .carousel-moulage img {
            width: 45%;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .carousel-moulage {
            flex-direction: column;
            align-items: center;
        }

        .carousel-moulage img {
            width: 90%;
            height: auto;
        }
    }

    @media (max-width: 480px) {
        .inicio_contenido-moulage h1 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }

        .inicio_contenido-moulage p {
            font-size: 1em;
        }

        .button-moulage {
            font-size: 1em;
            padding: 12px 18px;
        }

        .moulage-taller-h1 {
            font-size: 1.6rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .moulage-taller-h2 {
            font-size: 1.1rem;
        }

        .moulage-taller-h3 {
            font-size: 1.1rem;
        }

        .moulage-taller-p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .moulage-taller-ul li {
            font-size: 1rem;
            margin-bottom: 0.4rem;
        }

        .frase-final-moulage {
            font-size: 1.5rem;
            padding: 0.8rem;
        }

        .boton-toggle-moulage {
            font-size: 1rem;
            gap: 0.3rem;
            padding: 0.4rem 0.8rem;
        }

        .carousel-moulage img {
            width: 100%;
            height: auto;
        }

        .bloque-moulage-taller {
            padding: 1.2rem;
        }
    }
</style>
<!-- CURSO MOULAGE -->

<section class="inicio-moulage">
    <div class="hero-moulage">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/hero.JPEG" alt="" />
    </div>
    <div class="inicio_contenido-moulage">
        <h1>Aprende a hacer el patrón directamente sobre el maniquí.</h1>
        <p>Una técnica visual y precisa que transforma tu forma de patronar para siempre</p>
        <div class="botones-moulage">
            <a href="/agenda/">
                <button class="button-moulage">Quiero apuntarme</button>
            </a>
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

        <!-- Descripción general -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">💼</span>Descripción general</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p"><strong>Taller de Moulage Técnico (20h)</strong></p>
                    <p class="moulage-taller-p"><strong>Impartido por:</strong> Jose Carlos Herrera – Diseñador de moda y patronista</p>
                    <p class="moulage-taller-p">¿Cuántas veces te has atascado con un patrón imposible de sacar?</p>

                    <p class="moulage-taller-p"><strong>Te identificás con esto:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Te cuesta empezar sobre plano.</li>
                        <li>No sabes cómo resolver ciertos volúmenes.</li>
                        <li>Haces glasilla tras glasilla sin acertar.</li>
                    </ul>
                    <p class="moulage-taller-p"><strong>O con esto:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Drapeas en plano sin éxito.</li>
                        <li>Te preguntas cómo se resuelven los volúmenes en las grandes casas de moda.</li>
                        <li>Llevas años trabajando, pero sientes que puedes mejorar.</li>
                    </ul>

                    <p class="moulage-taller-p">
                        Este taller te enseña a <strong>crear directamente sobre el maniquí</strong> cualquier prenda, volumen o diseño que puedas imaginar.
                    </p>
                    <p class="moulage-taller-p">
                        Verás cómo el <strong>moulage</strong> —la técnica tridimensional para construir patrones en 3D— se convierte en tu mejor aliada para entender el cuerpo y dominar el patronaje <strong>sin frustraciones</strong>.
                    </p>
                    <p class="moulage-taller-p">
                        ¿Lo mejor? Luego aprenderás a <strong>trasladarlo al plano (2D)</strong>, para <strong>industrializar</strong> tus piezas y usarlas en <strong>producción, costura o colecciones</strong>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Lo que aprenderás -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">✅</span>Lo que aprenderás</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">

                    <p class="moulage-taller-p"><strong>Introducción y fundamentos:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Fundamentos del moulage: historia y utilidad</li>
                        <li>Cómo preparar el maniquí y colocar las cintas correctamente</li>
                        <li>Tipos de maniquíes, cintas y retor; adaptación a otras medidas</li>
                    </ul>

                    <p class="moulage-taller-p"><strong>Prácticas técnicas:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Realización del patrón de brazo sobre maniquí y confección</li>
                        <li>Patrón base de cuerpo, cuello y transformaciones visuales</li>
                        <li>Creación y transformación de una americana con manga sastre</li>
                    </ul>

                    <p class="moulage-taller-p"><strong>Diseños complejos y drapeado:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Realización de un bustier (corset) técnico con copas y ballenas</li>
                        <li>Técnicas de drapeado cruzado (cuerpo, falda y vestido de fiesta)</li>
                        <li>Industrialización del patrón: de 3D a 2D, de forma clara y sencilla</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Material incluido -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">🧰</span>Material incluido</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p">Recibirás una <strong>carpeta personalizada</strong> con:</p>

                    <ul class="moulage-taller-ul">
                        <li>Breve introducción teórica al moulage</li>
                        <li>Paso a paso de la colocación de cintas</li>
                        <li>Patrón de brazo completo</li>
                        <li>Fichas de todos los ejercicios realizados</li>
                        <li>Tejido necesario para el taller</li>
                    </ul>

                    <p class="moulage-taller-p">
                        Durante las sesiones también dispondrás de los <strong>maniquís preparados</strong> y el resto de <strong>materiales técnicos</strong> para trabajar sin preocuparte de nada.
                    </p>
                </div>
            </div>
        </div>

        <!-- Material que debes traer -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">🎒</span>Material que debes traer tú</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p"><strong>Solo necesitas traer:</strong></p>
                    <ul class="moulage-taller-ul">
                        <li>Tijeras</li>
                        <li>Regla y escuadra</li>
                        <li>Bolígrafo borrable</li>
                        <li>Rotuladores (rojo, verde y negro)</li>
                        <li>Cinta métrica</li>
                        <li>Alfileres</li>
                    </ul>
                    <p class="moulage-taller-p"><strong>Lo demás te lo proporcionamos nosotros.</strong></p>
                </div>
            </div>
        </div>

        <!-- Duración y horarios -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">⏰</span>Duración y horarios</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p">
                        El taller tiene una <strong>duración total de 20 horas</strong>, distribuidas en tres jornadas:<br><br>
                        <strong>Viernes:</strong> 15:30 – 19:30<br>
                        <strong>Sábado y domingo:</strong> 10:00 – 14:00 y 15:30 – 19:30
                    </p>
                    <p class="moulage-taller-p"><strong>Un horario flexible</strong> que se adapta a tu ritmo y te permite concentrarte en aprender.</p>
                </div>
            </div>
        </div>

        <!-- Diploma -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">🎓</span>Un diploma, una motivación</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p">
                        Al finalizar el curso recibirás un <strong>diploma de asistencia</strong>.
                        Un <strong>reconocimiento real</strong> para ti y una <strong>motivación más para seguir creciendo</strong> como profesional.
                    </p>
                </div>
            </div>
        </div>

        <!-- Precio -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">💶</span>Precio</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p">
                        <strong>390 € – todo incluido.</strong><br>
                        <strong>Plazas limitadas</strong> a un grupo muy reducido para garantizar <strong>atención individualizada</strong>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Profesor -->
        <div class="bloque-plegable-moulage">
            <button class="boton-toggle-moulage">
                <h2 class="moulage-taller-h2"><span class="icono">👨‍🏫</span>El profesor: Jose Carlos Herrera</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-moulage-taller">
                    <p class="moulage-taller-p">
                        Con <strong>más de 30 años de experiencia</strong> como diseñador y docente, Jose Carlos es <strong>experto en patronaje técnico y moulage</strong>.<br>
                        Dirige su propia escuela y firma, y <strong>comparte su conocimiento</strong> con profesionales y amantes de la moda que <strong>buscan crecer y perfeccionarse</strong>.
                    </p>
                </div>
            </div>
        </div>

    </div>


    <div class="gif-derecha-moulage" aria-label="Gif decorativo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moulage/maniqui-tela.gif" alt="" role="presentation">
    </div>
</section>
<p class="frase-final-moulage">#Nada Es Imposible Solo Hay Que Encontrar La Manera</p>


<?php get_footer(); ?>