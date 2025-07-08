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
    font-size: 2em;
    transition: all 0.3s ease;
}

.button-corset:hover {
    transform: scale(1.05);
}

.carousel-corset {
    display: flex;
    justify-content: space-between;
    overflow-x: auto;
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
    gap: 2rem;
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
    margin: 2rem 0 2rem 0;
}

.corset-taller-h2 {
    font-size: 2.5rem;
    color: var(--nav-texto);
    border-bottom: 3px solid #d4a62880;
    padding-bottom: 0.5rem;
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
}

.corset-taller-ul {
    padding-left: 1.5rem;
    margin-bottom: 1rem;
}

.corset-taller-ul li {
    margin-bottom: 0.5rem;
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
}

.gif-derecha-corset img {
    height: 100%;
    max-height: 80vh;
    border-radius: 1rem;
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
                <button class="button-corset">Quiero apuntarme</button>
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
            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">💼</span>Descripción general</h2>
                <p class="corset-taller-p"><strong>Taller de Patrón Técnico de Corset a Medida (20h)</strong></p>
                <p class="corset-taller-p">Impartido por Jose Carlos Herrera – Diseñador de moda y patronista</p>
                <p class="corset-taller-p">¿Cuántas veces has deseado hacer un patrón de corset en plano que quede
                    perfecto?...</p>
                <p class="corset-taller-p">Este taller está diseñado para enseñarte, paso a paso, a resolver el volumen
                    del busto con precisión y construir un corset técnico a medida adaptado a cualquier morfología.</p>
                <p class="corset-taller-p">Aquí no hablamos de lencería, sino de corsetería como soporte para vestidos o
                    como prenda exterior de alta costura. Aprenderás a construir desde cero un corset de copas que
                    podrás aplicar a tus futuros diseños, encargos o colecciones.</p>
                <p class="corset-taller-p">No importa si eres profesional con años de experiencia o si estás dando tus
                    primeros pasos.</p>
                <p class="corset-taller-p"><strong>Este taller está pensado para que salgas con el control total sobre
                        una de las piezas más complejas del patronaje.</strong></p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">✅</span>Lo que aprenderás</h2>
                <ul class="corset-taller-ul">
                    <li>Usos y utilidades del corset técnico</li>
                    <li>Toma específica de medidas y herramientas de medición</li>
                    <li>Construcción del patrón base y despiezado del cuerpo</li>
                    <li>Construcción del patrón de la copa y despiezado</li>
                    <li>Técnicas de marcado y corte sobre tejido</li>
                    <li>Confección del cuerpo: entretelado, prueba y ajuste</li>
                    <li>Ballenas y cierres: tipos y colocación</li>
                    <li>Confección de la copa con tejido foamizado, forrado y acabados</li>
                    <li>Unión del cuerpo con las copas y colocación de aros</li>
                </ul>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">🧰</span>Material incluido</h2>
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

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">🎒</span>Material que debes traer tú</h2>
                <ul class="corset-taller-ul">
                    <li>Kit básico de costura: cinta métrica, tijeras (papel y tela), alfileres, agujas, hilo de
                        hilvanar, dedal</li>
                    <li>Regla, escuadra, bolígrafo borrable, lápiz y goma</li>
                    <li>Cuaderno de apuntes</li>
                    <li>Una camiseta ajustada y un Sujetador de aros para poder tomarte las medidas con precisión</li>
                </ul>
                <p class="corset-taller-p">Solo necesitas esto. Lo demás te lo proporcionamos nosotros.</p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">⏰</span>Duración y horarios</h2>
                <p class="corset-taller-p">El taller tiene una duración total de 20 horas, distribuidas en tres
                    jornadas:<br>
                    Viernes: 15:30 – 19:30<br>
                    Sábado y domingo: 10:00 – 14:00 y 15:30 – 19:30</p>
                <p class="corset-taller-p"><strong>Un horario pensado para que puedas aprovechar al máximo tu
                        aprendizaje sin interrumpir tu rutina semanal.</strong></p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">🎓</span>Un diploma, una motivación</h2>
                <p class="corset-taller-p">Al finalizar el curso recibirás un diploma de asistencia.
                    Más que un papel, es un recordatorio de que ningún patrón es imposible, solo hay que encontrar la
                    manera.</p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">💶</span>Precio</h2>
                <p class="corset-taller-p">450 € – todo incluido.
                    <br>
                    <strong>Plazas limitadas</strong> para garantizar una atención personalizada a cada alumno.
                </p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">🏢</span>¿Tienes una empresa? Esto te interesa</h2>
                <p class="corset-taller-p">Este taller es bonificable para empresas a través de FUNDAE (formación
                    continua para trabajadores). Consulta con tu gestor o departamento de RRHH para aprovechar este
                    beneficio.</p>
            </div>

            <div class="bloque-corset-taller">
                <h2 class="corset-taller-h2"><span class="icono">👨‍🏫</span>El profesor: Jose Carlos Herrera</h2>
                <p class="corset-taller-p">Con más de 30 años de experiencia como diseñador y docente, Jose Carlos es un
                    referente en el mundo del patronaje técnico. Dirige su propia firma y escuela, y se desplaza a
                    centros de formación para compartir su conocimiento con profesionales y futuros expertos de la moda.
                </p>
            </div>
        </div>
        <div class="gif-derecha-corset" aria-label="Gif decorativo">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron_tecnico/corsete.png" alt="">
        </div>
    </section>


    <p class="frase-final-corset">#Nada Es Imposible Solo Hay Que Encontrar La Manera</p>
    <?php get_footer(); ?>