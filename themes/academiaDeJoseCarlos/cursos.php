<?php
/*
Template Name: Cursos
*/
?>

<?php get_header(); ?>

<?php $image_url = get_stylesheet_directory_uri() . '/assets/img/1.png'; ?>

<style>
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

/* Typography and button */
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

.text-expertos {
    text-align: center;
    font-size: 35px;
}

.moving-texts {
    margin-top: 5em;
}

/* ✅ MEDIA QUERIES */

/* Tablet */
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
}

/* Mobile */
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

/* MacBook Pro (13", M1, 2020) and similar */
@media (min-width: 1280px) and (max-width: 1440px) {
    .cursos-primera-section {
        min-height: 110vh;
    }
}

/* Larger screens (iMac, 16" MBP) */
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

/* Moving text styles */
.moving-texts {
    margin-top: 5em;
}

.text-expertos {
    text-align: center;
    font-size: 35px;
    font-weight: 700;
    margin-bottom: 1em;
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
    animation: scrollLeft 25s linear infinite;
}

.ticker-item {
    display: inline-block;
    padding: 0 2em;
    font-size: 2em;
    font-weight: bold;
    color: #222;
    transition: color 0.4s ease, font-size 0.4s ease;
}

@keyframes scrollLeft {
    0% { transform: translateX(0%); }     /* Start visible instead of translateX(100%) */
    100% { transform: translateX(-100%); }
}

/* Responsive */
@media (max-width: 768px) {
    .ticker-item {
        font-size: 1.4em;
        padding: 0 1em;
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
    <div class="text-expertos"><h1>Soy experto en</h1></div>
    <div class="ticker-container">
        <div class="ticker-track">
            <span class="ticker-item">Patronaje técnico</span>
            <span class="ticker-item">Desarrollo creativo</span>
            <span class="ticker-item">Técnicas de confección</span>
            <span class="ticker-item">Formación de profesionales</span>
            <span class="ticker-item">Soluciones técnicas al volumen especifico del seno</span>
            <span class="ticker-item">Análisis de la morfología corporal</span>
            <span class="ticker-item">Drapeados y volúmenes</span>
            <span class="ticker-item">Estructuras interiores</span>
            <span class="ticker-item">Sastrería y solución a las mangas</span>
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".ticker-item");
  const container = document.querySelector(".ticker-container");

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.color = "#e91e63";
          entry.target.style.fontSize = "2.3em";
          setTimeout(() => {
            entry.target.style.color = "#222";
            entry.target.style.fontSize = "2em";
          }, 15);
        }
      });
    },
    {
      root: container,
      rootMargin: "-10% 0% -10% 0%",
      threshold: 0.5
    }
  );

  items.forEach(item => observer.observe(item));
});
</script>
<?php get_footer(); ?>
