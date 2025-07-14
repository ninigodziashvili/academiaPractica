<?php
/*
Template Name: Agenda
*/
?>

<?php get_header(); ?>

<style>
    /* Agenda */

    :root {
        /* Colores base */
        --color-fondo: #f0eee9;
        ;
        --color-fondo-buttom: #d4a628d5;
        --color-fondo2: #2B2B28;
        --color-fondo2-hover: #3b3b38;
        --nav-texto: #d4a528;
        --nav-hover: var(--color-primario);

        /* Sombra y blur */
        --blur: blur(10px);
        --sombra-suave: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* loader */

    .pespunte-loader {
        display: flex;
        gap: 8px;
        justify-content: center;
        align-items: center;
        height: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }


    .pespunte-loader span {
        display: block;
        width: 30px;
        height: 8px;
        background: var(--color-fondo-buttom);
        /* Cambia el color aquí si quieres */
        animation: pespunte 1s linear infinite;
    }

    .pespunte-loader span:nth-child(1) {
        animation-delay: 0s;
    }

    .pespunte-loader span:nth-child(2) {
        animation-delay: 0.2s;
    }

    .pespunte-loader span:nth-child(3) {
        animation-delay: 0.4s;
    }

    .pespunte-loader span:nth-child(4) {
        animation-delay: 0.6s;
    }

    .pespunte-loader span:nth-child(5) {
        animation-delay: 0.8s;
    }

    @keyframes pespunte {
        0% {
            opacity: 0.2;
            transform: scaleX(0.5);
        }

        50% {
            opacity: 1;
            transform: scaleX(1);
        }

        100% {
            opacity: 0.2;
            transform: scaleX(0.5);
        }
    }


    /* calendario */

    #calendario {
        padding: 2rem;
        color: var(--nav-texto);
        text-align: center;
        margin-top: 3em;
    }

    #calendario h2 {
        margin-bottom: 1rem;
        font-size: 2rem;
    }

    .calendario-container {
        background: var(--color-fondo2);
        position: relative;
        padding: 1rem;
        border-radius: 12px;
        box-shadow: var(--sombra-suave);
        overflow: hidden;
        max-width: 850px;
        margin: 0 auto;
    }

    .calendario-container iframe {
        width: 100%;
        height: 600px;
        border: none;
        border-radius: 8px;
        z-index: 2;
    }

    /* mapa */

    .mapa {
        display: flex;
        justify-content: center;
        color: var(--nav-texto);
        align-items: center;

    }

    .mapa h2 {
        margin-bottom: 1rem;
        font-size: 2rem;
    }

    .mapa-contenedor-flex {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .escuelas-lista {
        background: var(--color-fondo2);
        padding: 1rem;
        border-radius: 12px;
        box-shadow: var(--sombra-suave);
        color: var(--nav-texto);
        flex: 0 0 220px;
        overflow-y: auto;
    }

    .escuelas-lista ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .escuelas-lista li {
        padding: 0.75rem 1rem;
        margin-bottom: 0.5rem;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        transition: background 0.2s ease, box-shadow 0.2s ease;
        position: relative;
    }

    .escuelas-lista li::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 1rem;
        right: 1rem;
        height: 1px;
        background: rgba(255, 255, 255, 0.1);
    }

    .escuelas-lista li:last-child::after {
        display: none;
    }

    .escuelas-lista li:hover {
        background: var(--color-fondo2-hover);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }


    .mapa-wrapper {
        background: var(--color-fondo2);
        padding: 1rem;
        border-radius: 12px;
        box-shadow: var(--sombra-suave);
        max-width: 800px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mapa-container {
        position: relative;
        width: 100%;
    }

    .mapa-container img {
        width: 100%;
        height: auto;
        display: block;
    }

    .pin-wrapper {
        position: absolute;
        transform: translate(-50%, -50%);
        width: 16px;
        height: 16px;
    }

    .pin {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 24px;
        transform: translate(-50%, -50%);
        cursor: pointer;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    }

    .globo {
        position: absolute;
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.2);
        transition: all 0.5s ease;
        padding: 4px;
        z-index: 1;
    }

    .globo img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Hover o activo */
    .pin-wrapper:hover .globo,
    .pin-wrapper.activo .globo {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    /* Posiciones */
    .madrid {
        top: 38%;
        left: 42%;
    }

    .madrid .globo {
        top: 50%;
        left: 50%;
    }

    .madrid:hover .globo,
    .madrid.activo .globo {
        top: calc(50% - 70px);
    }

    .zaragoza {
        top: 25%;
        left: 62%;
    }

    .zaragoza .globo {
        top: 50%;
        left: 50%;
    }

    .zaragoza:hover .globo,
    .zaragoza.activo .globo {
        top: calc(50% - 60px);
    }

    .getafe {
        top: 41%;
        left: 39%;
    }

    .getafe .globo {
        top: 50%;
        left: 50%;
    }

    .getafe:hover .globo,
    .getafe.activo .globo {
        top: calc(50% - 70px);
    }

    .gijon {
        top: 2%;
        left: 26%;
    }

    .gijon .globo {
        top: 50%;
        left: 50%;
    }

    .gijon:hover .globo,
    .gijon.activo .globo {
        top: 5em;
    }

    .merida {
        top: 64%;
        left: 23%;
    }

    .merida .globo {
        top: 50%;
        left: 50%;
    }

    .merida:hover .globo,
    .merida.activo .globo {
        top: calc(50% - 70px);
    }

    .huelva {
        top: 73%;
        left: 17%;
    }

    .huelva .globo {
        top: 50%;
        left: 50%;
    }

    .huelva:hover .globo,
    .huelva.activo .globo {
        top: calc(50% - 70px);
    }

    .sevilla {
        top: 73%;
        left: 24%;
    }

    .sevilla .globo {
        top: 50%;
        left: 50%;
    }

    .sevilla:hover .globo,
    .sevilla.activo .globo {
        top: calc(50% - 70px);
    }

    .tarragona {
        top: 31%;
        left: 75%;
    }

    .tarragona .globo {
        top: 50%;
        left: 50%;
    }

    .tarragona:hover .globo,
    .tarragona.activo .globo {
        top: calc(50% - 60px);
    }

    .barcelona {
        top: 27%;
        left: 80%;
    }

    .barcelona .globo {
        top: 50%;
        left: 50%;
    }

    .barcelona:hover .globo,
    .barcelona.activo .globo {
        top: calc(50% - 60px);
    }

    .valencia {
        top: 52%;
        left: 65%;
    }

    .valencia .globo {
        top: 50%;
        left: 50%;
    }

    .valencia:hover .globo,
    .valencia.activo .globo {
        top: calc(50% - 60px);
    }

    .gandia {
        top: 58%;
        left: 68%;
    }

    .gandia .globo {
        top: 50%;
        left: 50%;
    }

    .gandia:hover .globo,
    .gandia.activo .globo {
        top: calc(50% - 60px);
    }

    .vitoria {
        top: 10%;
        left: 48%;
    }

    .vitoria .globo {
        top: 50%;
        left: 50%;
    }

    .vitoria:hover .globo,
    .vitoria.activo .globo {
        top: 5em;
    }

     @media (max-width: 480px) {
        @media (max-width: 480px) {
        .escuelas-lista {
            flex: 0 0 90%;
        }

        .mapa-wrapper{
            margin: 1em;
        }
    }
     }
</style>

<!-- calendario -->
<section id="calendario">
    <h2>Próximas Fechas</h2>
    <div class="calendario-container">

        <!-- loader -->
        <div class="pespunte-loader">
            <span></span><span></span><span></span><span></span><span></span>
        </div>

        <iframe class="iframe-cal"
            src="https://calendar.google.com/calendar/embed?src=mclasscostura%40gmail.com&amp;ctz=Europe%2FMadrid"
            frameborder="0" scrolling="no">
        </iframe>
    </div>
</section>

<!-- Mapa -->
<section class="mapa">
    <h2>Escuelas Participantes</h2>
</section>

<div class="mapa-contenedor-flex">
    <div class="escuelas-lista">
        <ul>
            <?php
            $escuelas = [
                "barcelona" => "Barcelona - Mil Esquinas",
                "gandia" => "Gandía - Mila García",
                "getafe" => "Getafe - Lolamy Atelier",
                "gijon" => "Gijón - Efecto Seda",
                "huelva" => "Huelva - Diseminado Juradillo, 4",
                "madrid" => "Madrid - COSE Madrid",
                "merida" => "Mérida - Mar Segovia",
                "sevilla" => "Sevilla - Fashion Workshop",
                "tarragona" => "Tarragona - Marta Casanova",
                "valencia" => "Valencia - Victoria Burek",
                "vitoria" => "Vitoria Gasteiz - M.Class",
                "zaragoza" => "Zaragoza - Victoria López"
            ];

            foreach ($escuelas as $key => $value) {
                echo "<li data-escuela=\"$key\">$value</li>";
            }
            ?>
        </ul>
    </div>

    <div class="mapa-wrapper">
        <div class="mapa-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agenda/mapa.png" alt="Mapa de España">
            <?php
            $mapPins = [
                "madrid" => ["https://cosemadrid.com/", "cosemadrid.webp"],
                "zaragoza" => ["https://victorialopez.eu/", "lopez.jpg"],
                "getafe" => ["https://www.lolamyatelier.com/", "lolamy-atelier_0.jpg"],
                "gijon" => ["https://efectoseda.com/", "efecto-seda.jpg"],
                "merida" => ["https://marsegovia.com/", "mar-segovia.jpg"],
                "huelva" => ["https://maps.app.goo.gl/LVLVWykKv4dahcd38", "maps.png"],
                "sevilla" => ["https://fashionworkshop.org/", "fashion.jpg"],
                "tarragona" => ["https://www.instagram.com/martacasanova_academia/?hl=es", "marta.jpg"],
                "valencia" => ["https://victoriaburek.com/", "victoria.jpg"],
                "gandia" => ["https://corteyconfeccionmila.com/", "mila.png"],
                "vitoria" => ["https://mclassmoda.com/", "mclass.jpeg"],
                "barcelona" => ["https://milesquinas.org/", "milesquinas.jpg"],
            ];

            $theme_url = get_template_directory_uri();

            foreach ($mapPins as $city => [$url, $image]) {
                echo "
    <div class=\"pin-wrapper $city\">
        <div class=\"pin\" title=\"$city\">📍</div>
        <a href=\"$url\" target=\"_blank\" class=\"globo\">
            <img src=\"$theme_url/assets/img/agenda/$image\" alt=\"$city\">
        </a>
    </div>";
            }
            ?>
        </div>
    </div>
    <?php get_footer(); ?>