<?php
/* Template Name: Contacto */
get_header();
?>

<style>
  *, *::before, *::after {
  box-sizing: border-box;
}

  .contacto-container {
    max-width: 1000px;
    margin: 5em auto;
    padding: 2rem 1rem;
    font-family: 'Segoe UI', sans-serif;
    color: #082C38;
  }

  .contacto-hero {
    text-align: center;
    margin-bottom: 2rem;
  }

  .contacto-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
  }

  .contacto-info, .contacto-formulario {
    background-color: #fff;
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
  }

  .contacto-info p {
    font-size: 1.1rem;
    margin: 0.5rem 0;
    line-height: 1.6;
  }

  .contacto-mapa iframe {
    width: 100%;
    height: 300px;
    border: 0;
    border-radius: 16px;
    margin-bottom: 2rem;
  }

  .contact-section {
  background-color:rgb(220, 219, 219);
  padding: 60px 20px;
  border-radius: 16px;
}

.container-contacto {
    width: 80%;
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

  @media screen and (max-width: 768px) {
    .contacto-hero h1 {
      font-size: 2rem;
    }

    .contacto-info, .contacto-formulario {
      padding: 1.5rem 1rem;
    }
  }

  /* Target both folded and unfolded Galaxy Z Fold 5 states */
@media screen and (max-width: 920px) {
  .iletisim_form {
    flex-direction: column;
    gap: 1.5rem;
    padding: 1rem 0;
  }

  .sol50, .sag50, .full100 {
    flex: 1 1 100%;
    max-width: 100%;
  }

  .iletisim_form input,
  .iletisim_form textarea,
  .iletisim_form select {
    width: 100%;
    font-size: 1.2rem;
    padding: 1rem;
    box-sizing: border-box;
  }

  .iletisim_form label {
    font-size: 1rem;
    margin-bottom: 0.5rem;
    display: block;
  }

  .iletisim_form button {
    width: 100%;
    padding: 1rem;
    font-size: 1.2rem;
  }

  .container-contacto {
    padding: 1.5rem;
  }

  .contacto-titulo,
  .cursos-apuntarse-p {
    text-align: center;
    font-size: 1.6rem;
  }

  .contacto-mapa iframe {
    width: 100%;
    height: 250px;
  }
}

@media screen and (max-width: 350px) {
    .iletisim_form input,
  .iletisim_form textarea,
  .iletisim_form select {
    max-width: 9em;
  }

}

</style>

<div class="contacto-container">

  <section class="contacto-hero">
    <h1>Contacto</h1>
    <p>¿Tienes dudas, quieres pedir cita o solicitar información? Estoy aquí para ayudarte.</p>
  </section>

  <section class="contacto-mapa">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11701.005326427723!2d-2.665113!3d42.846426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4fc2643f0c1a33%3A0x63210da58de9ac98!2sM.class%20Moda%20Centro!5e0!3m2!1ses!2ses!4v1752143811688!5m2!1ses!2ses" 
    width="100%" 
    height="450" 
    style="border:0; border-radius: 16px;" 
    allowfullscreen 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>


  <section class="contacto-info">
    <h2>Información de contacto</h2>
    <p><strong>Centro de Moda m.CLASS</strong></p>
    <p>C/ Juan II, 5 Bajo</p>
    <p>01003 Vitoria-Gasteiz · Álava · País Vasco</p>
    <p><strong>Teléfono:</strong> +34 636 974 576</p>
    <p><strong>Email:</strong> mclasscostura@gmail.com</p>
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

</div>

<?php get_footer(); ?>