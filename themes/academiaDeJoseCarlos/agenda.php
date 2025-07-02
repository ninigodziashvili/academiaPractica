<?php
/*
Template Name: Agenda
*/
?>

<?php get_header(); ?>

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
            "vitoria" => ["https://mclassmoda.com/", "mclass.jpeg"]
        ];

        $theme_url = get_template_directory_uri();

        foreach ($mapPins as $city => [$url, $image]) {
            echo "
            <div class=\"pin-wrapper $city\">
                <div class=\"pin\">📍</div>
                <a href=\"$url\" target=\"_blank\" class=\"globo\">
                    <img src=\"$theme_url/assets/img/agenda/$image\" alt=\"\">
                </a>
            </div>";
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>