<?php
/*
Template Name: Corsete
*/
?>
<?php get_header(); ?>
<style>
    /* CURSO corset */

    .inicio-corset {
        position: relative;
        height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 5%;
        text-align: right;
    }

    .hero-corset {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .hero-corset img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.5);
    }

    .inicio_contenido-corset h1 {
        color: var(--color-fondo);
        font-size: 3em;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0 0 10px 50%;
    }

    .inicio_contenido-corset p {
        color: var(--nav-texto);
        font-size: 1.5em;
        margin: 0 0 20px 0;
    }

    .botones-corset {
        display: flex;
        justify-content: flex-end;
    }

    .button-corset {
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

    .button-corset:hover {
        transform: scale(1.05);
    }

    .carousel-corset {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 10px;
        padding: 20px 5%;
    }

    .carousel-corset img {
        width: 400px;
        height: 300px;
        object-fit: cover;
        flex-shrink: 0;
        border-radius: 5px;
    }

    .taller-section-corset {
        padding: 2rem;
        display: flex;
        position: relative;
        justify-content: center;
    }

    .contenido-corset-taller {
        flex: 1;
        max-width: 1040px;
    }

    .bloque-corset-taller {
        background: linear-gradient(145deg, #f7f7f5, #e7e7e4);
        box-shadow: var(--sombra-suave);
        border-radius: 1rem;
        padding: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }

    .bloque-corset-taller::before {
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

    .corset-taller-h1 {
        text-align: center;
        font-size: 3rem;
        color: var(--nav-texto);
        margin-bottom: 2rem;
        margin-top: 1em;
    }

    .corset-taller-h2 {
        font-size: 2rem;
        color: var(--nav-texto);
        margin-top: 0;
    }

    .corset-taller-h3 {
        font-size: 2rem;
        color: var(--color-fondo2-hover);
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }

    .corset-taller-p {
        line-height: 1.7;
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .corset-taller-ul {
        padding-left: 1.5rem;
        margin-bottom: 1rem;
    }

    .corset-taller-ul li {
        margin-bottom: 0.5rem;
        font-size: 1.3rem;
    }

    .icono {
        font-size: 1.5rem;
        margin-right: 0.5rem;
    }

    .frase-final-corset {
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
    .gif-derecha-corset {
        position: sticky;
        top: 10vh;
        align-self: flex-start;
        height: 80vh;
        flex: 1;
        display: flex;
        justify-content: center;
    }


    .gif-derecha-corset img {
        height: 100%;
        max-height: 80vh;
        border-radius: 1rem 0 0 1rem;
    }

    /* Pestañas desplegables */

    .bloque-plegable-corset {
        border: 1px solid #ccc;
        border-radius: 1rem;
        margin-bottom: 1rem;
        overflow: hidden;
        transition: max-height 0.3s ease;
        cursor: pointer;
    }

    .bloque-plegable-corset .contenido-plegable {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease;
        padding: 0 1rem;
    }

    .bloque-plegable-corset.abierto .contenido-plegable {
        max-height: 2000px;
        /* valor alto para permitir expansión completa */
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .boton-toggle-corset {
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


    .boton-toggle-corset::after {
        content: "▼";
        display: inline-block;
        transition: transform 0.3s;
    }

    .bloque-plegable-corset.abierto .boton-toggle-corset::after {
        transform: rotate(180deg);
    }


    @media (max-width: 1200px) {
        .taller-section-corset {
            flex-direction: column;
        }

        .gif-derecha-corset {
            display: none;
        }

        .inicio_contenido-corset h1 {
            margin: 0;
        }
    }

    @media (max-width: 1024px) {
        .carousel-corset {
            justify-content: center;
            gap: 1rem;
        }

        .carousel-corset img {
            width: 45%;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .carousel-corset {
            flex-direction: column;
            align-items: center;
        }

        .carousel-corset img {
            width: 90%;
            height: auto;
        }
    }

    @media (max-width: 480px) {
        .inicio_contenido-corset h1 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }

        .inicio_contenido-corset p {
            font-size: 1em;
        }

        .button-corset {
            font-size: 1em;
            padding: 12px 18px;
        }

        .corset-taller-h1 {
            font-size: 1.6rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .corset-taller-h2 {
            font-size: 1.1rem;
        }

        .corset-taller-h3 {
            font-size: 1.1rem;
        }

        .corset-taller-p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .corset-taller-ul li {
            font-size: 1rem;
            margin-bottom: 0.4rem;
        }

        .frase-final-corset {
            font-size: 1.5rem;
            padding: 0.8rem;
        }

        .boton-toggle-corset {
            font-size: 1rem;
            gap: 0.3rem;
            padding: 0.4rem 0.8rem;
        }

        .carousel-corset img {
            width: 100%;
            height: auto;
        }

        .bloque-corset-taller {
            padding: 1.2rem;
        }
    }
</style>
<!-- CURSO corset -->

<section class="inicio-corset">
    <div class="hero-corset">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/hero.jpeg" alt="" />
    </div>
    <div class="inicio_contenido-corset">
        <h1>Domina el patrón técnico del corset de copas… sin misterios, sin frustraciones</h1>
        <p>Una técnica precisa que te permitirá adaptar cualquier copa a cualquier cuerpo.</p>
        <div class="botones-corset">
            <a href="/agenda/">
                <button class="button-corset">Quiero apuntarme</button>
            </a>
        </div>
    </div>
</section>
<section class="carousel-corset">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/carrousel2.jpeg" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/carrousel3.jpeg" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/carrousel4.jpeg" alt="">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/carrousel5.jpeg" alt="">
</section>

<h1 class="corset-taller-h1">Taller de Patrón Técnico de Corset a Medida</h1>

<section class="taller-section-corset">
    <div class="contenido-corset-taller">

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">💼</span>Descripción general</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">

                    <p class="corset-taller-p"><strong>Taller de Patrón Técnico de Corset a Medida (20h)</strong></p>
                    <p class="corset-taller-p"><strong>Impartido por:</strong> Jose Carlos Herrera – Diseñador de moda y patronista</p>
                    <p class="corset-taller-p"><strong>¿Cuántas veces has deseado hacer un patrón de corset en plano que quede perfecto?...</strong></p>

                    <p class="corset-taller-p">Este taller está diseñado para enseñarte, paso a paso, a resolver el volumen del busto con precisión y construir un corset técnico a medida adaptado a cualquier morfología.</p>

                    <p class="corset-taller-p"><strong>Aquí no hablamos de lencería,</strong> sino de corsetería como soporte para vestidos o como prenda exterior de alta costura. Aprenderás a construir desde cero un corset de copas que podrás aplicar a tus futuros diseños, encargos o colecciones.</p>

                    <p class="corset-taller-p"><strong>No importa si eres profesional con años de experiencia o si estás dando tus primeros pasos.</strong></p>

                    <p class="corset-taller-p"><strong>Este taller está pensado para que salgas con el control total sobre una de las piezas más complejas del patronaje.</strong></p>

                </div>
            </div>
        </div>



        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">✅</span>Lo que aprenderás</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">

                    <p class="corset-taller-p"><strong>Fundamentos y preparación:</strong></p>
                    <ul class="corset-taller-ul">
                        <li>Usos y utilidades del corset técnico</li>
                        <li>Toma específica de medidas y herramientas de medición</li>
                    </ul>

                    <p class="corset-taller-p"><strong>Construcción del patrón:</strong></p>
                    <ul class="corset-taller-ul">
                        <li>Construcción del patrón base y despiezado del cuerpo</li>
                        <li>Construcción del patrón de la copa y despiezado</li>
                    </ul>

                    <p class="corset-taller-p"><strong>Confección y técnicas de costura:</strong></p>
                    <ul class="corset-taller-ul">
                        <li>Técnicas de marcado y corte sobre tejido</li>
                        <li>Confección del cuerpo: entretelado, prueba y ajuste</li>
                        <li>Ballenas y cierres: tipos y colocación</li>
                    </ul>

                    <p class="corset-taller-p"><strong>Trabajo con copas y acabados:</strong></p>
                    <ul class="corset-taller-ul">
                        <li>Confección de la copa con tejido foamizado, forrado y acabados</li>
                        <li>Unión del cuerpo con las copas y colocación de aros</li>
                    </ul>

                </div>
            </div>
        </div>


        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">🧰</span>Material incluido</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <ul class="corset-taller-ul">
                        <p class="corset-taller-p"><strong>Te llevas todo lo necesario para realizar el corset y seguir
                                trabajando en casa:</strong></p>
                        <li>
                            <p class="corset-taller-p">Recibirás una carpeta personalizada con:</p>
                        </li>
                        <ul class="corset-taller-ul">
                            <li>Dossier completo de toma de medidas</li>
                            <li>Construcción del patrón paso a paso</li>
                        </ul>
                        <li>Tejidos, entretelas, foam, ballenas, cubreballenas y cierres</li>
                        <li>Herramientas de construcción y medición</li>
                        <li>Calibrador</li>
                    </ul>
                    <p class="corset-taller-p"><strong>Además, durante el taller tienes a tu disposición:</strong></p>
                    <ul class="corset-taller-ul">
                        <li>Curvas francesas, compás, papel de patrones, cinta métrica y elástica</li>
                        <li>Moldes de planchado, máquina de coser y plancha</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">🎒</span>Material que debes traer tú</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <ul class="corset-taller-ul">
                        <li>Kit básico de costura: cinta métrica, tijeras (papel y tela), alfileres, agujas, hilo de
                            hilvanar, dedal</li>
                        <li>Regla, escuadra, bolígrafo borrable, lápiz y goma</li>
                        <li>Cuaderno de apuntes</li>
                        <li>Una camiseta ajustada y un Sujetador de aros para poder tomarte las medidas con precisión</li>
                    </ul>
                    <p class="corset-taller-p"><strong>Lo demás te lo proporcionamos nosotros.</strong></p>
                </div>
            </div>
        </div>

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">⏰</span>Duración y horarios</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <p class="corset-taller-p">
                        El taller tiene una <strong>duración total de 20 horas</strong>, distribuidas en tres jornadas:<br><br>
                        <strong>Viernes:</strong> 15:30 – 19:30<br>
                        <strong>Sábado y domingo:</strong> 10:00 – 14:00 y 15:30 – 19:30
                    </p>
                    <p class="corset-taller-p"><strong>Un horario flexible</strong> que se adapta a tu ritmo y te permite concentrarte en aprender.</p>
                </div>
            </div>
        </div>

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">🎓</span>Un diploma, una motivación</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <p class="corset-taller-p"> Al finalizar el curso recibirás un <strong>diploma de asistencia</strong>.
                        Un <strong>reconocimiento real</strong> para ti y una <strong>motivación más para seguir creciendo</strong> como profesional.</p>
                </div>
            </div>
        </div>

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">💶</span>Precio</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <p class="corset-taller-p"> <strong>450 € – todo incluido.</strong><br>
                        <strong>Plazas limitadas</strong> a un grupo muy reducido para garantizar <strong>atención individualizada</strong>.
                    </p>
                </div>
            </div>
        </div>

        <div class="bloque-plegable-corset">
            <button class="boton-toggle-corset">
                <h2 class="corset-taller-h2"><span class="icono">👨‍🏫</span>El profesor: Jose Carlos Herrera</h2>
            </button>
            <div class="contenido-plegable">
                <div class="bloque-corset-taller">
                    <p class="corset-taller-p">Con <strong>más de 30 años de experiencia</strong> como diseñador y docente, Jose Carlos es <strong>experto en patronaje técnico y moulage</strong>.<br>
                        Dirige su propia escuela y firma, y <strong>comparte su conocimiento</strong> con profesionales y amantes de la moda que <strong>buscan crecer y perfeccionarse</strong>. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="gif-derecha-corset" aria-label="Gif decorativo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/corsete.png" alt="">
    </div>
</section>


<p class="frase-final-corset">#Nada Es Imposible Solo Hay Que Encontrar La Manera</p>
<?php get_footer(); ?>