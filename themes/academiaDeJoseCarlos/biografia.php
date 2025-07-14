<?php
/* Template Name: Perfil José Carlos Herrera */
?>
<?php get_header(); ?>
<style>

.profile-container {
  max-width: 1300px;
  margin: 3em auto;
  padding: 0 1rem;
}

/* Hero Section */
.hero-section {
  background: linear-gradient(135deg, var(--color-fondo) 0%, #e8e6e2 100%);
  padding: 4rem 0;
  text-align: center;
  margin-bottom: 2rem;
}

.hero-section h1 {
  font-size: 3rem;
  color: var(--nav-texto);
  margin-bottom: 1rem;
  font-weight: 300;
}

.hero-section .subtitle {
  font-size: 1.2rem;
  color: var(--color-fondo2);
  max-width: 600px;
  margin: 0 auto;
  font-style: italic;
}

/* Profile Sections */
.profile-section {
  display: flex;
  justify-content: space-between;
  align-items: stretch;
  padding: 2rem;
  background-color: var(--color-fondo);
  box-shadow: var(--sombra-suave);
  margin-bottom: 2rem;
  gap: 3rem;
  border-radius: 12px;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}

.profile-section:hover {
  box-shadow: var(--sombra-hover);
  transform: translateY(-5px);
}

.profile-section:nth-child(even) {
  background-color: #e8e6e2;
  flex-direction: row-reverse;
}

.profile-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--nav-texto) 0%, var(--color-fondo-buttom) 100%);
}

.profile-section .text {
  flex: 3;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.profile-section .image {
  flex: 1;
  max-width: 300px;
  min-width: 250px;
}

.profile-section .image img {
  width: 100%;
  height: 450px;
  object-fit: cover;
  border-radius: 12px;
  transition: var(--transition);
  filter: grayscale(20%);
}

.profile-section .image img:hover {
  filter: grayscale(0%);
  transform: scale(1.02);
}

/* Typography */
h2 {
  color: var(--nav-texto);
  font-size: 2.2rem;
  margin-bottom: 1.5rem;
  font-weight: 400;
  position: relative;
}

p {
  font-size: 1.1rem;
  margin-bottom: 1.5rem;
  color: var(--color-fondo2);
  opacity: 0.9;
}

/* Lists */
ul {
  padding-left: 0;
  list-style: none;
}

ul li {
  position: relative;
  padding-left: 30px;
  margin-bottom: 0.8rem;
  font-size: 1.1rem;
  color: var(--color-fondo2);
}

ul li:before {
  position: absolute;
  left: 0;
  color: var(--nav-texto);
  font-weight: bold;
  font-size: 1.2rem;
}

/* Subsections within profile sections */
.subsection {
  margin-top: 2.5rem;
  padding: 1.5rem 0;
  border-top: 1px solid rgba(151, 151, 151, 0.2);
}

.subsection:first-of-type {
  border-top: none;
  margin-top: 2rem;
}

.subsection h3 {
  color: var(--nav-texto);
  font-size: 1.4rem;
  margin-bottom: 1rem;
  font-weight: 500;
  position: relative;
}

.subsection h3:before {
  content: '◆';
  color: var(--color-fondo-buttom);
  margin-right: 0.5rem;
  font-size: 1rem;
}

/* Section 4 Special Styling */
.section-4-special {
  gap: 4rem;
}

.section-4-special .text-content {
  flex: 2;
}

.section-4-special .image-large {
  flex: 1.5;
  max-width: 450px;
  min-width: 400px;
}

.section-4-special .image-large img {
  width: 100%;
  height: 550px;
  object-fit: cover;
  border-radius: 12px;
  transition: var(--transition);
  filter: grayscale(10%);
}

.section-4-special .image-large img:hover {
  filter: grayscale(0%);
  transform: scale(1.02);
}

.content-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  margin: 2rem 0;
}

.content-column h3 {
  color: var(--nav-texto);
  font-size: 1.2rem;
  margin-bottom: 1rem;
  font-weight: 600;
  position: relative;
  padding-bottom: 0.5rem;
  border-bottom: 2px solid var(--color-fondo-buttom);
}

.content-column ul {
  margin-bottom: 1.5rem;
}

.content-column ul li {
  font-size: 1rem;
  margin-bottom: 0.5rem;
  line-height: 1.4;
}

.success-highlight {
  padding: 0.8rem;
  border-radius: 6px;
  margin: 0.5rem 0;
  text-align: center;
}

.success-highlight p {
  margin: 0;
  font-weight: 600;
  font-size: 1rem;
  color: var(--nav-texto);
}

.bottom-section {
  margin-top: 2rem;
  padding-top: 2rem;
  border-top: 1px solid rgba(151, 151, 151, 0.3);
}

.bottom-section h3 {
  color: var(--nav-texto);
  font-size: 1.3rem;
  margin-bottom: 1rem;
  font-weight: 600;
  text-align: center;
}

.courses-highlight {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  flex-wrap: wrap;
}

.course-item {
  background: linear-gradient(135deg, var(--color-fondo-buttom) 0%, #f4d03f 100%);
  color: white;
  padding: 0.8rem 1.5rem;
  border-radius: 25px;
  font-weight: 600;
  font-size: 1rem;
  box-shadow: 0 4px 15px rgba(212, 166, 40, 0.3);
  transition: var(--transition);
}

.course-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(212, 166, 40, 0.4);
}

/* Call to Action */
.cta-section {
  background: linear-gradient(135deg, var(--color-fondo2) 0%, var(--color-fondo2-hover) 100%);
  color: white;
  padding: 4rem 3rem;
  text-align: center;
  margin-top: 3rem;
  border-radius: 12px;
  box-shadow: var(--sombra-suave);
}

.cta-section h2 {
  color: var(--nav-texto);
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.cta-section p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  color: rgba(255, 255, 255, 0.9);
}

.cta-button {
  display: inline-block;
  background: var(--nav-texto);
  color: var(--color-fondo2);
  padding: 1rem 2rem;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  transition: var(--transition);
  text-transform: uppercase;
  letter-spacing: 1px;
}

.cta-button:hover {
  background: var(--color-fondo-buttom);
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(212, 166, 40, 0.4);
}

/* Responsive Design */
@media (max-width: 768px) {
  .profile-section {
    flex-direction: column;
    padding: 2rem;
    gap: 2rem;
  }

  .profile-section:nth-child(even) {
    flex-direction: column;
  }

  .profile-section .image {
    max-width: 100%;
    align-self: center;
  }

  .profile-section .image img {
    height: 300px;
    max-width: 400px;
  }

  .hero-section h1 {
    font-size: 2.2rem;
  }

  .hero-section {
    padding: 2rem 0;
  }

  h2 {
    font-size: 1.8rem;
  }

  .contact-grid {
    grid-template-columns: 1fr;
  }

  .contact-section {
    padding: 2rem 1.5rem;
  }
}

@media (max-width: 480px) {
  .profile-section {
    padding: 1.5rem;
  }

  .hero-section h1 {
    font-size: 1.8rem;
  }

  .cta-section {
    padding: 2rem 1.5rem;
  }
}

/* Loading animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.profile-section {
  animation: fadeInUp 0.6s ease-out;
}

.profile-section:nth-child(2) { animation-delay: 0.1s; }
.profile-section:nth-child(3) { animation-delay: 0.2s; }
.profile-section:nth-child(4) { animation-delay: 0.3s; }
.profile-section:nth-child(5) { animation-delay: 0.4s; }

@media (max-width: 768px) {
  .profile-section .image,
  .section-4-special .image-large {
    max-width: 100%;
    min-width: auto;
    width: 100%;
  }

  .profile-section .image img,
  .section-4-special .image-large img {
    height: auto;
    max-height: 400px;
    object-fit: cover;
  }

  .section-4-special {
    flex-direction: column;
    align-items: center;
    gap: 2rem;
  }

  .section-4-special .text-content {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .profile-section .image img,
  .section-4-special .image-large img {
    height: auto;
    max-height: 300px;
  }

  .profile-section {
    padding: 1rem;
    gap: 1.5rem;
  }

  .hero-section h1 {
    font-size: 1.5rem;
  }

  .hero-section .subtitle {
    font-size: 1rem;
  }
}

</style>

<div class="profile-container">
  <!-- Hero Section -->
  <section class="hero-section">
    <h1>José Carlos Herrera</h1>
    <p class="subtitle">"Hola, soy José Carlos Herrera, y vivo mi pasión: la profesión de la moda."</p>
  </section>

  <!-- Section 1 - About -->
  <section class="profile-section">
    <div class="text">
      <h2>¿Qué significa para mí la moda?</h2>
      <p>Olvida la idea de consumo superficial o las tendencias mediáticas. La moda que enseño es diferente: una profesión viva y profunda. No tiene sentido guardar todo lo que he aprendido en estos años. Para mí, el aprendizaje está para compartirse.</p>
      <p>En mis clases, el alumno aprende sin límites técnicos. Ya sea profesional o principiante, le ayudo a comprender lo que necesita para alcanzar sus metas.</p>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/biografia/1.jpeg" alt="José Carlos Herrera - Profesional de la Moda">
    </div>
  </section>

  <!-- Section 2 - Education -->
  <section class="profile-section">
    <div class="text">
      <h2>Formación y experiencia</h2>
      <ul>
        <li>Más de 30 años de trayectoria profesional y docente</li>
        <li>Diplomado con mención de honor en Patronaje, en Txairoki (Vitoria)</li>
        <li>Profesor de patronaje técnico en el mismo centro</li>
        <li>Especialista en patronaje asistido por ordenador (CAD, CorelDraw...)</li>
        <li>Experiencia en sastrería artesanal y confección a medida</li>
        <li>Formado con referentes internacionales como Shingo Sato, Miguel Elola, Javier Martín Galán, Estanislao Solsona...</li>
      </ul>
      <div class="subsection">
        <h3>Investigación y perfeccionamiento</h3>
        <p>Desde 1995, estudio sistemas históricos de patronaje como Ruiz y Alá, Martí de Gili, Darroux, Jimeno, así como autores contemporáneos: Goymar, Duce, Adrada.</p>
        <p>He viajado a París y Nueva York para analizar las variaciones sociales y morfológicas del patrón. Aprender es una constante.</p>
      </div>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/biografia/2.jpeg" alt="José Carlos Herrera - Formación y Experiencia">
    </div>
  </section>

  <!-- Section 3 - Business -->
  <section class="profile-section">
    <div class="text">
      <h2>m.CLASS Moda Centro</h2>
      <p>En 2005 cofundé el Centro de Moda m.CLASS en Vitoria-Gasteiz. Un espacio vivo y creativo que ofrece formación en:</p>
      <ul>
        <li>Diseño y patronaje técnico</li>
        <li>Patronaje por ordenador y moulage</li>
        <li>Corte, confección y agencia de modelos</li>
        <li>Estilismo, dirección artística y escenografía</li>
        <li>Organización de eventos y formación para modelos</li>
      </ul>
      <div class="subsection">
        <h3>Herrera Novias</h3>
        <p>En 2006 fundé Herrera Novias, firma especializada en alta costura para novias y ceremonia. Diseño y confecciono vestidos a medida, aplicando técnicas artesanales y drapeado directo sobre maniquí.</p>
      </div>
    </div>
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/biografia/3.jpeg" alt="m.CLASS Centro de Moda">
    </div>
  </section>

  <!-- Section 4 - Teaching & Collaborations - IMPROVED -->
  <section class="profile-section section-4-special">
    <div class="text-content">
      <h2>Docencia y colaboraciones</h2>
      
      <div>
        <p>Más de 30 años formando profesionales de la moda</p>
      </div>
      
      <div class="content-grid">
        <div class="content-column">
          <h3>Experiencia docente</h3>
          <ul>
            <li>Docente en M.CLASS desde 1992</li>
            <li>Cursos itinerantes por toda España</li>
            <li>Formador oficial del Profesorado</li>
            <li>Ponente Cátedra Elio Berhanyer</li>
          </ul>
          
          <h3>Colaboraciones institucionales</h3>
          <ul>
            <li>EASD Burgos</li>
            <li>Universidad de Navarra</li>
            <li>Facultad de Bellas Artes (Vigo)</li>
            <li>FITUR y pasarela Cibeles</li>
          </ul>
        </div>
        
        <div class="content-column">
          <h3>Colaboraciones profesionales</h3>
          <ul>
            <li>María Clé Leal, Biga Wear</li>
            <li>Alicia Rueda, La Gaviota</li>
            <li>Serie "Cristóbal Balenciaga"</li>
          </ul>
          
          <h3>Éxito de mis alumnos</h3>
          <div class="success-highlight">
            <p>Contratados por:</p>
          </div>
          <ul>
            <li>Devota & Lomba</li>
            <li>Pedro del Hierro</li>
            <li>Pronovias</li>
            <li>Converse</li>
          </ul>
        </div>
      </div>
      
      <div class="bottom-section">
        <h3>Cursos de creación propia</h3>
        <div class="success-highlight">
          <span class="success-highlight"><strong>Moulage Técnico</strong></span>
          <span class="success-highlight"><strong>Patrón de Corset a Medida</strong></span>
        </div>
      </div>
    </div>
    
    <div class="image-large">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/biografia/4.jpeg" alt="José Carlos Herrera - Docencia">
    </div>
  </section>

  <!-- Section 5 - Why Trust Me -->
  <section class="profile-section">
    <div class="text">
      <h2>¿Por qué confiar en mí?</h2>
      <ul>
        <li>Formación con mención de honor y experiencia en moda industrial, sastrería y alta costura</li>
        <li>Actualización continua en técnicas de vanguardia</li>
        <li>Más de 30 años como creador, diseñador y educador</li>
        <li>Red profesional sólida con alumnos en marcas internacionales</li>
        <li>Clases personalizadas, adaptadas a cada nivel y objetivo</li>
      </ul>
    </div>
  </section>

  <!-- Section 6: Contact - ORIGINAL -->
  <section class="biografia-contact">
    <h2 class="biografia-subtitle">📍 Contacto y localización</h2>
    <p class="biografia-p"><strong>Dirección:</strong> C/ Juan II, 5 Bajo · 01003 Vitoria-Gasteiz · Álava · País Vasco</p>
    <p class="biografia-p"><strong>Teléfono:</strong> +34 636 974 576</p>
    <p class="biografia-p"><strong>Email:</strong> mclasscostura@gmail.com</p>
  </section>
</div>

<?php get_footer(); ?>