<?php
/*
Template Name: Cursos
*/
?>

<?php get_header(); ?>
<style>
            :root {
            /* Colores base */
            --color-fondo: #f0eee9;
            --color-fondo-buttom: #d4a628d5;
            --color-fondo2: #2B2B28;
            --color-fondo2-hover: #3b3b38;
            --nav-texto: #d4a528;
            --nav-hover: var(--color-primario);

            /* Sombra y blur */
            --blur: blur(10px);
            --sombra-suave: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .video-section {
  margin-top: 60px;
  padding: 20px;
  background-color: #000;
  text-align: center;
  width: 100%;
}

.video-wrapper {
  position: relative;
  display: inline-block;
  width: 100%;
  max-width: 100%;
}

.responsive-video {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  display: block;
}

.boton-sonido {
  position: absolute;
  bottom: 10px;
  right: 20px;
  background: var(--color-fondo-buttom);
  border: none;
  color: white;
  font-size: 24px;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
  z-index: 100;
  transition: background 0.3s ease;
}

@media (max-width: 768px) {
  .boton-sonido {
    font-size: 20px;
    padding: 8px;
    bottom: 15px;
    right: 15px;
  }
}

@media (max-width: 480px) {
  .boton-sonido {
    font-size: 18px;
    padding: 6px;
    bottom: 10px;
    right: 10px;
  }
}

.boton-sonido:hover {
  background: rgba(0, 0, 0, 0.7);
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
   position: relative;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   cursor: pointer;
   transition: all 0.3s ease;
   opacity: 0;
   transform: translateY(30px);
   animation: fadeInUp 0.6s ease forwards;
   animation-play-state: paused;
   pointer-events: none;
   cursor: default;
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

/* Staggered animation delays for each card */

.card:nth-child(1) { animation-delay: 0.1s; }
.card:nth-child(2) { animation-delay: 0.2s; }
.card:nth-child(3) { animation-delay: 0.3s; }
.card:nth-child(4) { animation-delay: 0.4s; }
.card:nth-child(5) { animation-delay: 0.5s; }


@media screen and (max-width: 1024px) {
  .content {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .cursos-apuntarse {
    margin-bottom: 35em;
  }

  .card {
    flex: 1 1 calc(45% - 20px);
    max-width: calc(45% - 20px);
  }
}

@media screen and (max-width: 767px) {
  .content {
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 100%;
    max-width: 90%;
  }
    .cursos-apuntarse {
    margin-bottom: 40em;
  }

}

/* The animation keyframes */

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.cursos-apuntarse {
    height: 30em;
}

/* Contact Section */

.contact-section {
  background-color:rgb(220, 219, 219);
  padding: 60px 20px;
}

.container-contacto {
    width: 900px;
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
    margin-top: 1em;
}

.contacto-titulo {
    font-size: 1.6em;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
    font-weight: bold;
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

.iletisim_form select {
    padding: 12px 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 1em;
    transition: border-color 0.3s ease;
}

.iletisim_form select:focus,
 {
    border-color: #d4a528;
    outline: none;
}

.iletisim_form input:focus,
.iletisim_form textarea:focus,
.iletisim_form select:focus {
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

@media screen and (max-width: 767px) {
    .cursos-apuntarse-p,
    .contacto-titulo {
        font-size: 2em;
    }

    .iletisim_form {
        flex-direction: column;
    }

    .sol50,
    .sag50,
    .full100 {
        flex: 1 1 100%;
    }

    .iletisim_form input,
    .iletisim_form textarea,
    .iletisim_form select {
        font-size: 1em;
    }

    .iletisim_form button {
        width: 100%;
        font-size: 1em;
    }
}

/* Add responsiveness for tablets */
@media screen and (max-width: 1024px) {
    .container-contacto {
        width: 100%;
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
    height: 110em;
}

.acordeon {
    position: relative;
    z-index: 2;
    width: 900px;
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

/* Foto Galeria */

 .gallery-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        .gallery-title {
            text-align: center;
            font-size: 2.5rem;
            margin-top: 2em;
            margin-bottom: 3rem;
            background: linear-gradient(135deg, var(--nav-texto) 0%, var(--color-fondo-buttom) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gallery-container {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: var(--sombra-suave);
            background: var(--color-fondo2);
        }

        .gallery-wrapper {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            flex: 0 0 300px;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .gallery-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--sombra-suave);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, var(--color-fondo2));
            color: var(--nav-texto);
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .overlay-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .overlay-description {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .gallery-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--color-fondo-buttom);
            backdrop-filter: var(--blur);
            border: none;
            color: var(--color-fondo2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .gallery-nav:hover {
            background: var(--color-fondo2-hover);
            color: var(--nav-texto);
            transform: translateY(-50%) scale(1.1);
        }

        .gallery-nav.prev {
            left: 10px;
        }

        .gallery-nav.next {
            right: 10px;
        }

        .gallery-nav:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .gallery-nav:disabled:hover {
            transform: translateY(-50%) scale(1);
            background: var(--color-fondo-buttom);
            color: var(--color-fondo2);
        }

        @media (max-width: 768px) {
            .gallery-item {
                flex: 0 0 250px;
                height: 350px;
            }
            
            .gallery-title {
                font-size: 2rem;
            }
        }
</style>
<section class="video-section">
  <div class="video-wrapper">
    <video
      muted
      autoplay
      class="responsive-video"
      preload="auto"
    >
      <source src="/wp-content/themes/academiaDeJoseCarlos/assets/videos/myvideo.mp4" type="video/mp4">
      Tu navegador no soporta el video HTML5.
    </video>
    <button id="toggleSound" class="boton-sonido">🔇</button>
  </div>
</section>

    <section class="gallery-section">
        <h2 class="gallery-title">Photo Gallery</h2>
        
        <div class="gallery-container">
            <div class="gallery-wrapper" id="galleryWrapper">
                <div class="gallery-item">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/1.jpeg" alt="Curso de Diseño de Moda Básico"/>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/2.jpeg" alt="Curso de Diseño de Moda Básico"/>
                </div>
                
                <div class="gallery-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/3.jpeg" alt="Curso de Diseño de Moda Básico"/>
                </div>
                
                <div class="gallery-item">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/4.jpeg" alt="Curso de Diseño de Moda Básico"/>
                </div>
                
                <div class="gallery-item">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/5.jpeg" alt="Curso de Diseño de Moda Básico"/>
                </div>
                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/6.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/7.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/8.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/9.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/10.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/11.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/12.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/13.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/14.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/15.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/16.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/17.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/18.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/19.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/20.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/21.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/22.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/23.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/13.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/24.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/25.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/26.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/27.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/28.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/29.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/30.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/31.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/32.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/33.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/34.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/35.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/36.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/37.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/38.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/39.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/40.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/41.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/42.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/43.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/44.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/45.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/46.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/47.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/48.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/49.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/50.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>
                                                                <div class="gallery-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fotogaleria/51.jpeg" alt="Curso de Diseño de Moda Básico"/>   
                </div>

            </div>
            <button class="gallery-nav prev" id="prevBtn">‹</button>
            <button class="gallery-nav next" id="nextBtn">›</button>
        </div>
        <div class="gallery-indicators" id="indicators"></div>
         </section>
<section class="cursos-apuntarse">
    <p class="cursos-apuntarse-p">¿Por qué apuntarte?</p>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <div class="content">
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">💡</i></div>
            <p class="title">Domina técnicas que pocos conocen</p>
      </div>
      <div class="card">
          <div class="icon"><i class="material-icons md-36">✂️</i></div>
            <p class="title">Experiencia práctica inmediata en cada clase</p>
      </div>
      <div class="card">
         
            <div class="icon"><i class="material-icons md-36">⭐</i></div>
            <p class="title">Mejora tu técnica, seas principiante o profesional</p>
         
      </div>
            <div class="card">
         
            <div class="icon"><i class="material-icons md-36">✨</i></div>
            <p class="title">Amplía tus posibilidades creativas</p>
         
      </div>
            <div class="card">
         
          <div class="icon"><i class="material-icons md-36">🎨</i></div>
            <p class="title">Lleva tu diseño al siguiente nivel</p>
         
      </div>
   </div>
</div>
</section>
<section class="contact-section">
    <div class="container-contacto">
        <p class="contacto-titulo">Déjanos tus datos y nos comunicaremos contigo</p>
        <form class="iletisim_form" action="" method="post">
            <div class="sol50">
                <span>
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" required placeholder="Nombre">
                </span>
            </div>
            <div class="sag50">
                <span>
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="Correo electrónico">
                </span>
            </div>
            <div class="sol50">
                <span>
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone" placeholder="Teléfono">
                </span>
            </div>
            <div class="sag50">
                <span>
                    <label for="course">Curso</label>
                    <select type="text" id="course" name="course" required placeholder="Elige el Curso">
        <option value="" disabled selected>Elige el Curso</option>
        <option value="math">Corset a Medida</option>
        <option value="science">Moulage Técnico</option>
                       </select>

                </span>
            </div>
            <div class="full100">
                <span>
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" placeholder="Tus Mensaje"></textarea>
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
        <h1>Preguntas frecuentes</h1>
            <h1>Patrón Técnico de Corset a Medida</h1>
        
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
            <div class="etiqueta">Soy estudiante, ¿este curso me sirve?</div>
            <div class="contenido">
      ¡Claro que sí! Es un complemento excelente para tu formación. Aprenderás una técnica que te va a abrir muchas puertas.
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">¿Seré capaz de repetir el proceso después?</div>
            <div class="contenido">
        No. Aunque tener conocimientos de patronaje te será útil, el taller está pensado para todos los niveles.       
        </div>
        </div>
        
        <div class="contenedor">
            <div class="etiqueta">Trabajo en moda industrial, no a medida. ¿También me sirve?</div>
            <div class="contenido">
       Sí. Saber adaptar copas a cualquier cuerpo es una habilidad valiosa incluso en el desarrollo de patrones para producción en serie.      
        </div>
        
        </div>
                <div class="contenedor">
            <div class="etiqueta">¿Qué necesito llevar al taller?</div>
            <div class="contenido">
       Tu kit básico de costura (tijeras de papel y tela, alfileres, agujas, hilo de hilvanar, dedal...), un cuaderno para apuntes. Todo lo demás te lo proporciono yo.      
        </div>
        
        </div>
                <div class="contenedor">
            <div class="etiqueta">¿Y si tengo otra duda?</div>
            <div class="contenido">
       Puedes escribirme sin problema. Estoy aquí para ayudarte.     
        </div>
        
        </div>
   <h1>Moulage Técnico</h1>
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
            <div class="etiqueta">¿Tengo que saber coser?</div>
            <div class="contenido">
      Solo un poco. Lo único que coseremos es el brazo del maniquí, y para eso basta con que sepas usar una máquina de coser.
        </div>
        
        </div>
                        <div class="contenedor">
            <div class="etiqueta">Soy estudiante, ¿puedo apuntarme?</div>
            <div class="contenido">
        Por supuesto. Este taller te aportará una visión muy práctica y complementaria a lo que ya estás aprendiendo.      
        </div>
        
        </div>
                                <div class="contenedor">
            <div class="etiqueta">¿Necesito llevar un maniquí?</div>
            <div class="contenido">
        Si tienes uno (de costura, no de los ajustables por tallas), puedes traerlo y así te lo llevas listo para seguir trabajando en casa. Si no, no te preocupes: en el centro dispondrás de uno para trabajar durante el curso.      
        </div>
        
        </div>
                                <div class="contenedor">
            <div class="etiqueta">¿Sabré colocar las cintas yo solo después?</div>
            <div class="contenido">
      Sí. Te entregaré una carpeta con el proceso completo para que puedas repetirlo sin dificultad.    
        </div>
        </div>
                                        <div class="contenedor">
            <div class="etiqueta">Estoy pensando en comprar un maniquí, ¿me orientas?</div>
            <div class="contenido">
    Claro. En el taller hablaremos sobre los distintos tipos de maniquíes que hay en el mercado, con sus pros y contras, para que tomes una buena decisión.   
        </div>
        
        </div>
                                        <div class="contenedor">
            <div class="etiqueta">Trabajo en moda industrial, ¿este taller me puede aportar algo?</div>
            <div class="contenido">
    Muchísimo. El moulage te permite descubrir nuevas formas y volúmenes que, sobre plano, serían muy difíciles de construir.   
        </div>
        
        </div>
                                                <div class="contenedor">
            <div class="etiqueta">¿Qué tengo que llevar al taller?</div>
            <div class="contenido">
   Solo unas buenas tijeras y muchas ganas de aprender. Lo demás, corre de mi cuenta.  
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

// Galeria

  class HorizontalGallery {
            constructor() {
                this.wrapper = document.getElementById('galleryWrapper');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.indicators = document.getElementById('indicators');
                this.items = this.wrapper.querySelectorAll('.gallery-item');
                this.currentIndex = 0;
                this.itemWidth = 320; // 300px + 20px gap
                this.visibleItems = this.getVisibleItems();
                this.maxIndex = Math.max(0, this.items.length - this.visibleItems);
                
                this.init();
            }
            
            getVisibleItems() {
                const containerWidth = this.wrapper.parentElement.offsetWidth;
                return Math.floor(containerWidth / this.itemWidth);
            }
            
            init() {
                this.updateGallery();
                this.bindEvents();
                
                // Handle resize
                window.addEventListener('resize', () => {
                    this.visibleItems = this.getVisibleItems();
                    this.maxIndex = Math.max(0, this.items.length - this.visibleItems);
                    this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                    this.updateGallery();
                });
            }
            
            updateGallery() {
                const translateX = -this.currentIndex * this.itemWidth;
                this.wrapper.style.transform = `translateX(${translateX}px)`;
                
                // Update navigation buttons
                this.prevBtn.disabled = this.currentIndex === 0;
                this.nextBtn.disabled = this.currentIndex === this.maxIndex;
            }
            
            goToSlide(index) {
                this.currentIndex = Math.max(0, Math.min(index, this.maxIndex));
                this.updateGallery();
            }
            
            next() {
                if (this.currentIndex < this.maxIndex) {
                    this.currentIndex++;
                    this.updateGallery();
                }
            }
            
            prev() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                    this.updateGallery();
                }
            }
            
            bindEvents() {
                this.nextBtn.addEventListener('click', () => this.next());
                this.prevBtn.addEventListener('click', () => this.prev());
                
                // Touch/swipe support
                let startX = 0;
                let isDragging = false;
                
                this.wrapper.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                });
                
                this.wrapper.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    e.preventDefault();
                });
                
                this.wrapper.addEventListener('touchend', (e) => {
                    if (!isDragging) return;
                    
                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;
                    
                    if (Math.abs(diff) > 50) {
                        if (diff > 0) {
                            this.next();
                        } else {
                            this.prev();
                        }
                    }
                    
                    isDragging = false;
                });
                
                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.prev();
                    if (e.key === 'ArrowRight') this.next();
                });
            }
        }
        
        // Initialize gallery when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new HorizontalGallery();
        });

document.addEventListener('DOMContentLoaded', function() {
    const video = document.querySelector(".responsive-video");
    const button = document.getElementById("toggleSound");

    if (video && button) {
        // Sound toggle
        button.addEventListener("click", () => {
            video.muted = !video.muted;
            button.textContent = video.muted ? "🔇" : "🔊";
        });

        // Restart video and keep size optimized
        video.addEventListener("ended", () => {
            video.currentTime = 0;
            video.play();

            // Optional: Reapply size in case it changes
            video.style.maxWidth = "100%";
            video.style.height = "auto";
        });
    } else {
        console.error("Video or button not found");
    }
});


        const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const cards = entry.target.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${(index + 1) * 0.1}s`;
                card.style.animationPlayState = 'running';
            });
            observer.unobserve(entry.target); // Animation only happens once
        }
    });
}, {
    threshold: 0.3 // Animation starts when 30% of section is visible
});

// Start observing when page loads
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.cursos-apuntarse');
    if (section) {
        // Pause animation initially
        const cards = section.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.animationPlayState = 'paused';
        });
        
        observer.observe(section);
    }
});

</script>

<?php get_footer(); ?>
