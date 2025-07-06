<?php
/*
Template Name: Cursos
*/
?>

<?php get_header(); ?>
<?php $image_url = get_stylesheet_directory_uri() . '/assets/img/portada/3.png'; ?>

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
    opacity: 0.4;
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
      }
   }

.wrapper {
   width: 100vw;
   margin: 0 auto;
   height: 400px;
   background-color: #3b3b38;
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
      flex-direction: column;
   }
}

.card {
   width: 100%;
   max-width: 300px;
   min-width: 200px;
   height: 250px;
   background-color: #3b3b38;
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

.cursos-apuntarse {
    height: 30em;
}

.cursos-apuntarse-p {
    margin-top: 1em;
    text-align:center;
    font-size: 40px;
    font-weight: bold;
}

.contact-section {
  background-color:rgb(220, 219, 219);
  padding: 60px 20px;
  font-family: 'Segoe UI', sans-serif;
}

.container {
  max-width: 900px;
  margin: 0 auto;
  background-color: #fff;
  padding: 40px;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
}

.cursos-apuntarse-p {
  font-size: 1.6em;
  margin-bottom: 30px;
  text-align: center;
  color: #333;
}

.iletisim_form {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.sol50,
.sag50 {
  flex: 1 1 45%;
  min-width: 250px;
}

.full100 {
  flex: 1 1 100%;
}

.iletisim_form span {
  display: flex;
  flex-direction: column;
}

.iletisim_form label {
  font-size: 0.95em;
  margin-bottom: 6px;
  color: #555;
}

.iletisim_form input,
.iletisim_form textarea {
  padding: 12px 15px;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 1em;
  transition: border-color 0.3s ease;
}

.iletisim_form input:focus,
.iletisim_form textarea:focus {
  border-color: #d4a528;
  outline: none;
}

.iletisim_form textarea {
  resize: vertical;
  min-height: 120px;
}

.iletisim_form button {
  background-color: #d4a528;
  color: #fff;
  padding: 14px 24px;
  font-size: 1em;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  align-self: flex-start;
}

.iletisim_form button:hover {
  background-color: #3b3b38;
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
            <p class="text">Mis talleres</p>
         
      </div>
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">favorite_border</i></div>
            <p class="title">Aprende haciendo</p>
            <p class="text">Tanto en el taller</p>
         
      </div>
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Mejora tu técnica, seas principiante o profesional</p>
            <p class="text">No importa si estás</p>
         
      </div>
            <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Amplía tus posibilidades creativas</p>
            <p class="text">Con el corset técnico podrás</p>
         
      </div>
            <div class="card">
         
            <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
            <p class="title">Lleva tu diseño al siguiente nivel</p>
            <p class="text">Estos cursos te darán herramientas</p>
         
      </div>
   </div>
</div>
</section>
<section class="contact-section">
    <div class="container">
  <h1 class="cursos-apuntarse-p">Déjanos tus datos y nos pondremos en contacto contigo para ampliarte información.</h1>
  <form class="iletisim_form" action="">
    <div class="style"></div>
  <div class="sol50">
    <span>
      <label for="namesurmane">Name Surname</label>
      <input type="text" name="namesurmane" id="namesurmane">
    </span>
  </div>
  <div class="sag50">
    <span>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </span>
  </div>
  <div class="sol50">
    <span>
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject">
    </span>
  </div>
  <div class="sag50">
    <span>
      <label for="denetleme">text</label>
      <input type="text" name="denetleme" id="denetleme">
    </span>
  </div>
  <div class="full100">
    <span>
      <label for="messenger">Messenger</label>
      <textarea name="messenger" id="messenger"></textarea>
    </span>
  </div>
  <div class="full100">
    <span>
      <button>Send</button>
    </span>
  </div>
  </form>
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


$(".iletisim_form input,.iletisim_form textarea").focus(function() {
		$(".iletisim_form label[for='" + this.id + "']").attr("style","padding-left:0px;top:0px;font-size: 11px;");
		$(this).parent().parent().addClass(this.id);
		$(".style").html("<style>div."+this.id+" span:before{width:100%;}</style>");
	}).blur(function() {
		$(".style").html("<style>div."+this.id+" span:before{width:0%;}</style>");
		if($(this).val() == ""){
			$(".iletisim_form label[for='" + this.id + "']").attr("style","padding-left:15px;top:38px;font-size: 14px;");
			$(".style").html("<style>div."+this.id+" span:before{width:100%;border-bottom: 2px solid rgba(249, 52, 52, 1);}</style>");
		}else{
			$(".style").html("<style>div."+this.id+" span:before{width:100%;border-bottom: 2px solid rgba(40, 226, 19, 1);}</style>");
		}
	});

</script>

<?php get_footer(); ?>
