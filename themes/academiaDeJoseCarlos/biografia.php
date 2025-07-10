<?php
/*
Template Name: Perfil José Carlos Herrera
*/
get_header();
?>

<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f4f4f4;
    color: #222;
  }

  .container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 1rem;
  }

  .section {
    background-color: #fff;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 2.5rem;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
  }

  .section img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    max-height: 520px;
  }

  .content {
    padding: 2rem;
  }

  h1 {
    font-size: 2.2rem;
    margin-bottom: 1rem;
    color: #082C38;
  }

  h2 {
    font-size: 1.5rem;
    color: #082C38;
    margin-bottom: 1rem;
    border-bottom: 2px solid #C19976;
    padding-bottom: 0.3rem;
  }

  p, li {
    line-height: 1.6;
    font-size: 1rem;
  }

  ul {
    padding-left: 1.2rem;
    margin: 0;
  }

  .quote {
    font-style: italic;
    color: #555;
    margin-top: 0;
  }

  .contact {
    text-align: center;
    background-color: #fff;
    padding: 2.5rem 1.5rem;
    border-radius: 16px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
  }

  .contact p {
    margin: 0.5rem 0;
  }

  @media screen and (max-width: 768px) {
    .content {
      padding: 1.5rem 1rem;
    }

    h1 {
      font-size: 1.8rem;
    }

    h2 {
      font-size: 1.3rem;
    }

    p, li {
      font-size: 0.95rem;
    }
  }
</style>

<div class="container">
  <!-- Sección 1 -->
  <section class="section">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/6.png" alt="Curso de Diseño de Moda Básico"/>
    <div class="content">
      <h1>José Carlos Herrera</h1>
      <p class="quote">“Hola, soy José Carlos Herrera, y vivo mi pasión: la profesión de la moda.”</p>
      <h2>¿Qué significa para mí la moda?</h2>
      <p>Olvida la idea de consumo superficial o las tendencias mediáticas. La moda que enseño es diferente: una profesión viva y profunda. No tiene sentido guardar todo lo que he aprendido en estos años. Para mí, el aprendizaje está para compartirse.</p>
      <p>En mis clases, el alumno aprende sin límites técnicos. Ya sea profesional o principiante, le ayudo a comprender lo que necesita para alcanzar sus metas.</p>
    </div>
  </section>

  <!-- Sección 2 -->
  <section class="section">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/6.png" alt="Curso de Diseño de Moda Básico"/>   
    <div class="content">
      <h2>Formación y experiencia</h2>
      <ul>
        <li>Más de 30 años de trayectoria profesional y docente.</li>
        <li>Diplomado con mención de honor en Patronaje, en Txairoki (Vitoria).</li>
        <li>Profesor de patronaje técnico en el mismo centro.</li>
        <li>Especialista en patronaje asistido por ordenador (CAD, CorelDraw...)</li>
        <li>Experiencia en sastrería artesanal y confección a medida.</li>
        <li>Formado con referentes internacionales como Shingo Sato, Miguel Elola, Javier Martín Galán, Estanislao Solsona…</li>
      </ul>
      <h2>Investigación y perfeccionamiento</h2>
      <p>Desde 1995, estudio sistemas históricos de patronaje como Ruiz y Alá, Martí de Gili, Darroux, Jimeno, así como autores contemporáneos: Goymar, Duce, Adrada.</p>
      <p>He viajado a París y Nueva York para analizar las variaciones sociales y morfológicas del patrón. Aprender es una constante.</p>
    </div>
  </section>

  <!-- Sección 3 -->
  <section class="section">
 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/6.png" alt="Curso de Diseño de Moda Básico"/>
    <div class="content">
      <h2>m.CLASS Moda Centro</h2>
      <p>En 2005 cofundé el Centro de Moda m.CLASS en Vitoria-Gasteiz. Un espacio vivo y creativo que ofrece formación en:</p>
      <ul>
        <li>Diseño y patronaje técnico</li>
        <li>Patronaje por ordenador y moulage</li>
        <li>Corte, confección y agencia de modelos</li>
        <li>Estilismo, dirección artística y escenografía</li>
        <li>Organización de eventos y formación para modelos</li>
      </ul>
      <h2>Herrera Novias</h2>
      <p>En 2006 fundé Herrera Novias, firma especializada en alta costura para novias y ceremonia. Diseño y confecciono vestidos a medida, aplicando técnicas artesanales y drapeado directo sobre maniquí.</p>
    </div>
  </section>

  <!-- Sección 4 -->
  <section class="section">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/6.png" alt="Curso de Diseño de Moda Básico"/>   
    <div class="content">
      <h2>Docencia y colaboraciones</h2>
      <ul>
        <li>Docente en M.CLASS desde 1992.</li>
        <li>Cursos itinerantes de Corset a Medida y Moulage Técnico por toda España.</li>
        <li>Formador en programas oficiales de Formación para el Profesorado.</li>
        <li>Talleres y ponencias en EASD Burgos, Universidad de Navarra y Facultad de Bellas Artes (Vigo).</li>
        <li>Estilismo y dirección artística en FITUR y pasarela Cibeles.</li>
        <li>Modelado para María Clé Leal, Biga Wear, Alicia Rueda, La Gaviota…</li>
        <li>Colaboración con la serie “Cristóbal Balenciaga”.</li>
        <li>Alumnos contratados por Devota & Lomba, Pedro del Hierro, Pronovias, Converse, entre otros.</li>
        <li>Ponente en la Cátedra Elio Berhanyer.</li>
      </ul>
      <h2>Formación académica</h2>
      <ul>
        <li>Diploma en Diseño, Patronaje, Confección y Escalado Industrial – Txairoki (Vitoria).</li>
        <li>Especialización en patronaje por ordenador (Patroneo Key), diseño vectorial (Corel Draw).</li>
        <li>Formaciones avanzadas en técnicas de moulage y corsetería.</li>
        <li>Formación internacional en TR Cutting, moulage estructural y plisado textil.</li>
      </ul>
      <h2>Cursos creados</h2>
      <ul>
        <li>Moulage Técnico</li>
        <li>Patrón de Corset a Medida</li>
      </ul>
      <h2>¿Por qué confiar en mí?</h2>
      <ul>
        <li>Formación con mención de honor y experiencia en moda industrial, sastrería y alta costura.</li>
        <li>Actualización continua en técnicas de vanguardia.</li>
        <li>Más de 30 años como creador, diseñador y educador.</li>
        <li>Red profesional sólida con alumnos en marcas internacionales.</li>
        <li>Clases personalizadas, adaptadas a cada nivel y objetivo.</li>
      </ul>
    </div>
  </section>

  <!-- Sección 5: Contacto -->
  <section class="contact">
    <h2>📍 Contacto y localización</h2>
    <p><strong>Dirección:</strong> C/ Juan II, 5 Bajo · 01003 Vitoria-Gasteiz · Álava · País Vasco</p>
    <p><strong>Teléfono:</strong> +34 636 974 576</p>
    <p><strong>Email:</strong> mclasscostura@gmail.com</p>
  </section>
</div>

<?php get_footer(); ?>