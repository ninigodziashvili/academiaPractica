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
    background-color: #d4a528;
    color: white;
    text-decoration: none;
    font-size: 1.1em;
    border-radius: 15px;
    transition: background-color 0.3s ease;
}

.cursos-primera-section a:hover {
    background-color: #3b3b38;
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
   padding-top: 50px;
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

.contact-section {
  background-color:rgb(220, 219, 219);
  padding: 60px 20px;
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
    font-size: 3em;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
    font-weight: bold;
    margin-top: 1.5em;
}

.contacto-titulo {
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
    width: 100%;
    box-sizing: border-box;
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

.iletisim_form button:hover {
    background-color: #3b3b38;
}

/* Responsive for smaller screens */
@media screen and (max-width: 767px) {
    .iletisim_form {
        flex-direction: column;
    }
    .sol50,
    .sag50,
    .full100 {
        flex: 1 1 100%;
    }
}

.iletisim_form button {
    display: inline-block;
    padding: 17px 20px;
    background-color: #d4a528;
    color: white;
    font-size: 1.1em;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
    align-items: center; 
}

/* Preguntas სექციისთვის ფონის ფოტო */
.acordeon-cuerpo {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
}

.acordeon-cuerpo::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/portada/6.png');
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.7; /* შეცვალე opacity აქ */
    z-index: 1;
    height: 60em;
}

.acordeon {
    position: relative;
    z-index: 2;
    width: 80%;
    margin: 90px auto;
    color: black;
    padding: 45px;
    background: rgba(255, 255, 255, 0.9); /* ღია თეთრი ფონი */
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.acordeon h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-size: 2.5em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

.acordeon .contenedor {
    position: relative;
    margin: 15px 0;
    border-radius: 10px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.acordeon .etiqueta {
    position: relative;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    color: #333;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.9);
    transition: all 0.3s ease;
    user-select: none;
}

.acordeon .etiqueta:hover {
    background-color: rgba(212, 165, 40, 0.1);
    color: #d4a528;
}

.acordeon .etiqueta::before {
    content: '+';
    color: #d4a528;
    position: absolute;
    top: 50%;
    right: 20px;
    font-size: 24px;
    font-weight: bold;
    transform: translateY(-50%);
    transition: transform 0.3s ease;
}

.acordeon .contenido {
    position: relative;
    max-height: 0;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
    overflow: hidden;
    transition: max-height 0.5s ease, padding 0.5s ease;
    background-color: rgba(255, 255, 255, 0.95);
    padding: 0 20px;
}

.acordeon .contenedor.activa .contenido {
    max-height: 300px;
    padding: 20px;
}

.acordeon .contenedor.activa .etiqueta {
    background-color: #d4a528;
    color: white;
}

.acordeon .contenedor.activa .etiqueta::before {
    content: '−';
    color: white;
    transform: translateY(-50%) rotate(180deg);
}

/* Responsive */
@media (max-width: 768px) {
    .acordeon {
        width: 95%;
        padding: 20px;
        margin: 20px auto;
    }
    
    .acordeon h1 {
        font-size: 2em;
    }
    
    .acordeon .etiqueta {
        font-size: 16px;
        padding: 15px;
    }
    
    .acordeon .contenido {
        font-size: 14px;
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
        <p class="contacto-titulo">Déjanos tus datos y nos comunicaremos contigo</p>
        <form class="iletisim_form" action="" method="post">
            <div class="sol50">
                <span>
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required>
                </span>
            </div>
            <div class="sag50">
                <span>
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </span>
            </div>
            <div class="sol50">
                <span>
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone">
                </span>
            </div>
            <div class="sag50">
                <span>
                    <label for="course">Curso</label>
                    <input type="text" id="course" name="course" required>
                </span>
            </div>
            <div class="full100">
                <span>
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message"></textarea>
                </span>
            </div>
            <div class="full100">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>
<section class="acordeon-cuerpo">
 <div class="acordeon">
        <h1>Preguntas Frecuentes</h1>
        
        <div class="contenedor">
            <div class="etiqueta">¿Necesito experiencia previa para apuntarme?</div>
            <div class="contenido">
        No hace falta que seas experto, pero sí que tengas unas nociones básicas de patronaje y costura. Si sabes manejar una máquina de coser y entiendes los fundamentos del patrón, vas a poder seguir el taller sin problema.    
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">¿Tengo que ser patronista profesional?</div>
            <div class="contenido">
        Para nada. No es un taller exclusivo para profesionales. Eso sí, si ya sabes hacer patrones, lo vas a disfrutar todavía más.     
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">¿Y si no sé coser muy bien?</div>
            <div class="contenido">
        Con que sepas utilizar una máquina de coser, es suficiente. El enfoque es técnico, pero práctico.      
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">¿Hace falta experiencia para hacer el taller?</div>
            <div class="contenido">
        No necesitas ser experto, pero sí tener una base mínima de costura. Es importante que reconozcas las líneas principales de construcción (pecho, cintura, cadera, sisa...) y vengas con ganas de experimentar.     
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">¿Tengo que ser patronista profesional?</div>
            <div class="contenido">
        No. Aunque tener conocimientos de patronaje te será útil, el taller está pensado para todos los niveles.       
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">Soy estudiante, ¿puedo apuntarme?</div>
            <div class="contenido">
        Por supuesto. Este taller te aportará una visión muy práctica y complementaria a lo que ya estás aprendiendo.      
        </div>
        </div>
</div>
</section>
<?php get_footer(); ?>
