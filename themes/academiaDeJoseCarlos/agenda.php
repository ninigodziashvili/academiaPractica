<?php
/*
Template Name: Agenda
*/
?>

<?php get_header(); ?>
<style>
/* === MOVING TEXT SECTION === */

/* === MOVING TEXT SECTION === */
.moving-texts {
    background-color: #3b3b38;
    width: 100%;
    height: 25em;
    margin-top: 2em;
}

.text-expertos {
    color: #d4a628d5;
    text-align: center;
    font-size: 35px;
    font-weight: 700;
    margin-bottom: 2em;
    padding-top: 2em;
}

.ticker-container {
    width: 100%;
    overflow: hidden;
    position: relative;
    height: 60px;
    background-color: transparent;
    display: flex;
    align-items: center;
}

.ticker-track {
    display: inline-block;
    white-space: nowrap;
    animation: scrollLeft 35s linear infinite;
    will-change: transform;
}

@keyframes scrollLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.ticker-item {
    display: inline-block;
    padding: 0 2em;
    font-size: 2em;
    font-weight: bold;
    color: #f0eee9;
    transition: color 0.3s ease, transform 0.3s ease;
    will-change: transform, color;
}

#highlight-zone {
    position: absolute;
    top: 0;
    left: 50%;
    width: 1px;
    height: 100vh;
    pointer-events: none;
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
        <div class=\"pin\" title=\"$city\">📍</div>
        <a href=\"$url\" target=\"_blank\" class=\"globo\">
            <img src=\"$theme_url/assets/img/agenda/$image\" alt=\"$city\">
        </a>
    </div>";
            }
            ?>
        </div>
    </div>
</div>
</div>
<section class="moving-texts">
    <div class="text-expertos">
        <h1>Escuelas en</h1>
        <div id="highlight-zone"></div>
    </div>
    <div class="ticker-container">
        <div class="ticker-track">
            <span class="ticker-item">Gandia</span>
            <span class="ticker-item">Getafe</span>
            <span class="ticker-item">Gijon</span>
            <span class="ticker-item">Huelva</span>
            <span class="ticker-item">Madrid</span>
            <span class="ticker-item">Merida</span>
            <span class="ticker-item">Sevilla</span>
            <span class="ticker-item">Tarragona</span>
            <span class="ticker-item">Valencia</span>
            <span class="ticker-item">Vitoria</span>
            <span class="ticker-item">Zaragoza</span>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".ticker-item");

  function animateHighlight() {
    const centerX = window.innerWidth / 2;
    const maxDistance = 160;

    items.forEach(item => {
      const rect = item.getBoundingClientRect();
      const itemCenter = rect.left + rect.width / 2;
      const distance = Math.abs(centerX - itemCenter);

      if (distance < maxDistance) {
        const intensity = 1 - (distance / maxDistance);
        const scale = 1 + intensity * 0.2;
        item.style.color = "#d4a528";
        item.style.transform = `scale(${scale})`;
      } else {
        item.style.color = "#f0eee9";
        item.style.transform = "scale(1)";
      }
    });

    requestAnimationFrame(animateHighlight);
  }

  requestAnimationFrame(animateHighlight);
});
</script>
<?php get_footer(); ?>
