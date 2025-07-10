<?php
/* Template Name: Contacto */
get_header();
?>

<style>
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

  .contacto-formulario form input,
  .contacto-formulario form textarea {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
  }

  .contacto-formulario form button {
    background-color: #d4a628d5;
    color: #fff;
    padding: 0.8rem 2rem;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
  }

  .contacto-formulario form button:hover {
    background-color: #3b3b38;
  }

  @media screen and (max-width: 768px) {
    .contacto-hero h1 {
      font-size: 2rem;
    }

    .contacto-info, .contacto-formulario {
      padding: 1.5rem 1rem;
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

  <section class="contacto-formulario">
    <h2>Formulario de contacto</h2>
    <form action="#" method="post">
      <input type="text" name="nombre" placeholder="Tu nombre" required>
      <input type="email" name="email" placeholder="Tu correo electrónico" required>
      <textarea name="mensaje" rows="5" placeholder="Tu mensaje" required></textarea>
      <button type="submit">Enviar mensaje</button>
    </form>
  </section>

</div>

<?php get_footer(); ?>