<?php
/*
Template Name: Cursos
*/
?>

<?php get_header(); ?>

<?php $image_url = get_stylesheet_directory_uri() . '/assets/img/1.png'; ?>

<style>
/* === HERO SECTION === */
.cursos-primera-section {
    position: relative;
    width: 100%;
    min-height: 75vh;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    text-align: left;
    box-sizing: border-box;
    padding: 50px 10%;
    overflow: hidden;
    color: #fff;
}

.cursos-primera-section-contenido {
    position: relative;
    z-index: 2;
    max-width: 800px;
    width: 100%;
    color: black;
}

.cursos-primera-section::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-image: url('<?php echo $image_url; ?>');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.2;
    z-index: 1;
}

.cursos-primera-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.cursos-primera-section p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.cursos-primera-section a {
    display: inline-block;
    padding: 17px 20px;
    background-color: #ffffff;
    color: #333333;
    text-decoration: none;
    font-size: 1.1em;
    border-radius: 15px;
    transition: background-color 0.3s ease;
}

.cursos-primera-section a:hover {
    background-color: #eeeeee;
}

/* === MOVING TEXT SECTION === */
.moving-texts {
    background-color: #3b3b38;
    margin-top: 5em;
    width: 100%;
    height: 25em;
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
    transition: color 0.4s ease, transform 0.4s ease;
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

/* === MEDIA QUERIES === */
@media (max-width: 768px) {
    .cursos-primera-section {
        padding: 40px 20px;
    }

    .cursos-primera-section h2 {
        font-size: 1.8em;
    }

    .cursos-primera-section p {
        font-size: 1em;
    }

    .cursos-primera-section a {
        padding: 14px 18px;
        font-size: 1em;
    }

    .ticker-item {
        font-size: 1.4em;
        padding: 0 1em;
    }
}

@media (max-width: 480px) {
    .cursos-primera-section h2 {
        font-size: 1.5em;
    }

    .cursos-primera-section p {
        font-size: 0.95em;
    }

    .cursos-primera-section a {
        padding: 12px 16px;
        font-size: 0.95em;
    }
}

@media (min-width: 1280px) and (max-width: 1440px) {
    .cursos-primera-section {
        min-height: 110vh;
    }
}

@media (min-width: 1680px) {
    .cursos-primera-section {
        min-height: 85vh;
    }

    .cursos-primera-section h2 {
        font-size: 3.2em;
    }

    .cursos-primera-section p {
        font-size: 1.5em;
    }

    .cursos-primera-section a {
        font-size: 1.3em;
        padding: 20px 28px;
    }
}
</style>

<section class="cursos-primera-section">
    <div class="cursos-primera-section-contenido">
        <h2>Upgrade, tu Hub de Especialización en Talento Tech</h2>
        <p>Formación en remoto 100% en directo. Especialízate en IA, Ciberseguridad, Data&IA, Desarrollo, UX/UI y más.</p>
        <a href="#">¡Despierta tu instinto!</a>
    </div>
</section>

<section class="moving-texts">
    <div class="text-expertos">
        <h1>Especialista en</h1>
        <div id="highlight-zone"></div>
    </div>
    <div class="ticker-container">
        <div class="ticker-track">
            <span class="ticker-item">Patronaje</span>
            <span class="ticker-item">Desarrollo</span>
            <span class="ticker-item">Técnicas</span>
            <span class="ticker-item">Formación</span>
            <span class="ticker-item">Soluciones</span>
            <span class="ticker-item">Análisis</span>
            <span class="ticker-item">Drapeados</span>
            <span class="ticker-item">Estructuras</span>
            <span class="ticker-item">Sastrería</span>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".ticker-item");

  function animateHighlight() {
    const centerX = window.innerWidth / 2;
    const maxDistance = 160; // Start highlight earlier

    items.forEach(item => {
      const rect = item.getBoundingClientRect();
      const itemCenter = rect.left + rect.width / 2;
      const distance = Math.abs(centerX - itemCenter);

      if (distance < maxDistance) {
        const intensity = 1 - (distance / maxDistance);
        const scale = 1 + intensity * 0.2; // Up to 1.2x size
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
