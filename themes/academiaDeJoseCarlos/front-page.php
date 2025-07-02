<?php get_header(); ?>
<main>
    <section class="inicio">
        <div class="fondo-video">
            <!--<video autoplay loop muted playsinline src="videos/9511251-uhd_4096_2160_25fps.mp4"></video>   -->
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/navegacion.png" alt="My Image">
        </div>
        <div class="inicio_contenido">
            <h1>"nada es imposible hay que encontrarle la manera"</h1>
            <p>jose carlos herrera</p>
            <div class="botones">
                <!-- From Uiverse.io by andrew-demchenk0 -->
                <button class="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"
                        class="svg-icon">
                        <g stroke-width="2" stroke-linecap="round" stroke="#fff">
                            <rect y="5" x="4" width="16" rx="2" height="16"></rect>
                            <path d="m8 3v4"></path>
                            <path d="m16 3v4"></path>
                            <path d="m4 11h16"></path>
                        </g>
                    </svg>
                    <span class="lable">calendarios</span>
                </button>
                <a href="" class="boton1">mas informacion</a>
            </div>
        </div>

    </section>
    <section class="foto_galeria">

    </section>
    <section class="cursos">
        <h2>Nuestros Cursos Destacados</h2>

        <!-- Curso 1 -->
        <div class="curso" data-aos="fade-right">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/curso clase SAM3665.png" alt="Curso de Diseño de Moda Básico"/>
            <div>
                <h3>taller de patrón técnico de corset a medida (20h)</h3>
                <strong>resuelve el volumen del seno con presición y adapta cualquier copa a la morfología de la persona.</strong>
                <strong>lo que aprenderas:</strong>
                <p>Este taller te enseña a crear en plano un corset técnico a medida, resolviendo el volumen del busto y adaptándolo a cualquier cuerpo.
                    Ya seas principiante o profesional, dominarás una técnica que muchos aún no conocen.
                    Este curso no trata de lencería, sino de <strong>corsetería como soporte de vestidos</strong> o como pieza exterior con el que dominarás la creación de vestido de alta costura</p>
                <a href="/curso1" class="btn-acento">Más información</a>
            </div>
        </div>

        <!-- Curso 2 -->
        <div class="curso" data-aos="fade-left">
            <div class="ml-md-5">
                <h3>Taller de Moulage Técnico (20h)</h3>
                <strong>Aprende a hacer el patrón perfecto a la primera</strong>
                <p>El moulage es la técnica de crear patrones directamente sobre el maniquí para luego llevarlos a plano y poder industrializarlos.</p>
                <strong>lo que aprenderas:</strong>
                <p>Técnicas prácticas de moulage: desde el brazo, americana, corset y drapeados
                    Con este taller se te hará muy fácil drapear o ajustar volúmenes sin ninguna limitación técnica, serás capaz crear prendas directamente sobre maniquí para luego poder trasladarlos al plano
                </p>
                <a href="/curso2" class="btn-acento">Más información</a>
            </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/curso claseSAM3631.png" alt="Curso de Diseño de Moda Básico"/>
        </div>
    </section>
    <section class="testimonios">
        <div class="testimonios_container" id="carrusel">
            <div class="carta">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Usuario">
                <div class="usuario">@lucia_moda</div>
                <div class="mensaje">Me encantó el evento de moda. ¡Increíble organización y modelos espectaculares!
                </div>
            </div>

            <div class="carta">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario">
                <div class="usuario">@carlos_style</div>
                <div class="mensaje">Una experiencia única. Las pasarelas estuvieron de otro nivel.</div>
            </div>

            <div class="carta">
                <img src="https://randomuser.me/api/portraits/women/18.jpg" alt="Usuario">
                <div class="usuario">@anafashion</div>
                <div class="mensaje">Los diseños fueron espectaculares. ¡Esperando la próxima edición!</div>
            </div>
            <div class="carta">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Usuario">
                <div class="usuario">@lucia_moda</div>
                <div class="mensaje">Me encantó el evento de moda. ¡Increíble organización y modelos espectaculares!
                </div>
            </div>

            <div class="carta">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario">
                <div class="usuario">@carlos_style</div>
                <div class="mensaje">Una experiencia única. Las pasarelas estuvieron de otro nivel.</div>
            </div>

            <div class="carta">
                <img src="https://randomuser.me/api/portraits/women/18.jpg" alt="Usuario">
                <div class="usuario">@anafashion</div>
                <div class="mensaje">Los diseños fueron espectaculares. ¡Esperando la próxima edición!</div>
            </div>
              <div class="carta">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario">
                <div class="usuario">@carlos_style</div>
                <div class="mensaje">Una experiencia única. Las pasarelas estuvieron de otro nivel.</div>
            </div>
            <!-- Agrega más cartas si lo necesitas -->
        </div>

        <div class="indicadores" id="indicadores">
            <div class="indicador activo"></div>
            <div class="indicador"></div>
            <div class="indicador"></div>
            <!-- Asegúrate de tener un indicador por cada carta -->
        </div>
    </section>
    <section class="galeria2">
      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/1.png" alt="My Image"></div>
      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/2.webp" alt="My Image"></div>
      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/3.png" alt="My Image"></div>
      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/4.webp" alt="My Image"></div>
      <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/portada/5.png" alt="My Image"></div>
    </section>
</main>

<?php get_footer(); ?>