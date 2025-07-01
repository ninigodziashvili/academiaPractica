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
.about {
   $cubic: cubic-bezier(0.64, 0.01, 0.07, 1.65);
   $transition: 0.6s $cubic;
   $size: 40px;
   position: fixed;
   z-index: 10;
   bottom: 10px;
   right: 10px;
   width: $size;
   height: $size;
   display: flex;
   justify-content: flex-end;
   align-items: flex-end;
   transition: all 0.2s ease;

   .bg_links {
      width: $size;
      height: $size;
      border-radius: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(#fff, 0.2);
      border-radius: 100%;
      backdrop-filter: blur(5px);
      position: absolute;
   }

   .logo {
      width: $size;
      height: $size;
      z-index: 9;
      background-image: url(https://rafaelalucas91.github.io/assets/codepen/logo_white.svg);
      background-size: 50%;
      background-repeat: no-repeat;
      background-position: 10px 7px;
      opacity: 0.9;
      transition: all 1s 0.2s ease;
      bottom: 0;
      right: 0;
   }

   .social {
      opacity: 0;
      right: 0;
      bottom: 0;

      .icon {
         width: 100%;
         height: 100%;
         background-size: 20px;
         background-repeat: no-repeat;
         background-position: center;
         background-color: transparent;
         display: flex;
         transition: all 0.2s ease, background-color 0.4s ease;
         opacity: 0;
         border-radius: 100%;
      }

      &.portfolio {
         transition: all 0.8s ease;

         .icon {
            background-image: url(https://rafaelalucas91.github.io/assets/codepen/link.svg);
         }
      }

      &.dribbble {
         transition: all 0.3s ease;
         .icon {
            background-image: url(https://rafaelalucas91.github.io/assets/codepen/dribbble.svg);
         }
      }

      &.linkedin {
         transition: all 0.8s ease;
         .icon {
            background-image: url(https://rafaelalucas91.github.io/assets/codepen/linkedin.svg);
         }
      }
   }

   &:hover {
      width: 105px;
      height: 105px;
      transition: all $transition;

      .logo {
         opacity: 1;
         transition: all 0.6s ease;
      }

      .social {
         opacity: 1;

         .icon {
            opacity: 0.9;
         }

         &:hover {
            background-size: 28px;
            .icon {
               background-size: 65%;
               opacity: 1;
            }
         }

         &.portfolio {
            right: 0;
            bottom: calc(100% - 40px);
            transition: all 0.3s 0s $cubic;
            .icon {
               &:hover {
                  background-color: #698fb7;
               }
            }
         }

         &.dribbble {
            bottom: 45%;
            right: 45%;
            transition: all 0.3s 0.15s $cubic;
            .icon {
               &:hover {
                  background-color: #ea4c89;
               }
            }
         }

         &.linkedin {
            bottom: 0;
            right: calc(100% - 40px);
            transition: all 0.3s 0.25s $cubic;
            .icon {
               &:hover {
                  background-color: #0077b5;
               }
            }
         }
      }
   }
}

.wrapper {
   width: 100vw;
   margin: 0 auto;
   height: 400px;
   background-color: #161616;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
   transition: all 0.3s ease;
}

@media screen and (max-width: 767px) {
   .wrapper {
      height: 700px;
   }
}

.content {
   width: 100%;
   padding: 0 4%;
   padding-top: 100px;
   margin: 0 auto;
   display: flex;
   justify-content: center;
   align-items: center;
}

@media screen and (max-width: 767px) {
   .content {
      padding-top: 300px;
      flex-direction: column;
   }
}

.card {
   width: 100%;
   max-width: 300px;
   min-width: 200px;
   height: 250px;
   background-color: #292929;
   margin: 10px;
   border-radius: 10px;
   box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.24);
   border: 2px solid rgba(7, 7, 7, 0.12);
   font-size: 16px;   
   transition: all 0.3s ease;
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   cursor: pointer;
   transition: all 0.3s ease;
}

.icon {
   margin: 0 auto;
   width: 100%;
   height: 80px;
   max-width:80px;
   background: linear-gradient(90deg, #d4a528 0%, #d4a628d5 40%, rgba(0, 0, 0, 0.28) 60%);
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   transition: all 0.8s ease;
   background-position: 0px;
   background-size: 200px;
}

.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }

.card .title {
   width: 100%;
   margin: 0;
   text-align: center;
   margin-top: 30px;
   color: white;
   font-weight: 600;
   text-transform: uppercase;
   letter-spacing: 4px;
}

.card .text {
   width: 80%;
   margin: 0 auto;
   font-size: 13px;
   text-align: center;
   margin-top: 20px;
   color: white;
   font-weight: 200;
   letter-spacing: 2px;
   opacity: 0;
   max-height:0;
   transition: all 0.3s ease;
   overflow: scroll;
}

.card:hover {
   height: 270px;
}

.card:hover .info {
   height: 90%;
}

.card:hover .text {
   transition: all 0.3s ease;
   opacity: 1;
   max-height:40px;
}

.card:hover .icon {
   background-position: -120px;
   transition: all 0.3s ease;
}

.card:hover .icon i {
   background: linear-gradient(90deg, #d4a528, #d4a628d5);
   -webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
   opacity: 1;
   transition: all 0.3s ease;
}

.cursos-apuntarse-p {
    margin-top: 2em;
    text-align:center;
    font-size: 40px;
    font-weight: bold;
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
<section class="cursos-apuntarse">
    <p class="cursos-apuntarse-p">¿Por qué apuntarte?</p>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <div class="content">
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">face</i></div>
            <p class="title">Domina técnicas que pocos conocen</p>
            <p class="text">Mis talleres están diseñados para ir más allá de lo básico. Aprenderás métodos técnicos de alta precisión que no suelen enseñarse en cursos convencionales.</p>
         
      </div>
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">favorite_border</i></div>
            <p class="title">Aprende haciendo</p>
            <p class="text">Tanto en el taller de Corset como en el de Moulage, trabajarás con tus manos desde el primer momento. Crearás piezas reales y tangibles, que podrás usar como base para futuras colecciones o producciones.</p>
         
      </div>
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Mejora tu técnica, seas principiante o profesional</p>
            <p class="text">No importa si estás empezando o ya trabajas en el sector: estas técnicas te ayudarán a afinar tus conocimientos, ahorrar tiempo en pruebas y errores, y alcanzar un nivel de acabado profesional.</p>
         
      </div>
            <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Amplía tus posibilidades creativas</p>
            <p class="text">Con el corset técnico podrás construir prendas estructuradas para vestidos de alta costura o piezas exteriores únicas. Con el moulage, liberarás tu creatividad al modelar directamente sobre el maniquí.</p>
         
      </div>
            <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Lleva tu diseño al siguiente nivel</p>
            <p class="text">Estos cursos te darán herramientas que te acompañarán en toda tu carrera. La precisión del patrón técnico y la libertad del moulage se convertirán en aliados clave de tu proceso creativo.</p>
         
      </div>
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
