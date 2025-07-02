<?php get_header() ?>
    <!-- calendario -->

    <section id="calendario">
        <h2>Próximas Fechas</h2>
        <div class="calendario-container">

            <!-- loader -->

            <div class="pespunte-loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <iframe class="iframe-cal"
                src="https://calendar.google.com/calendar/embed?src=mclasscostura%40gmail.com&amp;ctz=Europe%2FMadrid"
                frameborder="0" scrolling="no">
            </iframe>
        </div>
    </section>


    <!-- Mapa -->
    <section class="mapa">
        <h2>Escuelas Participantes</h2>
    </section>
    <div class="mapa-contenedor-flex">
        <div class="escuelas-lista">
            <ul>
                <li data-escuela="gandia">Gandía - Mila García</li>
                <li data-escuela="getafe">Getafe - Lolamy Atelier</li>
                <li data-escuela="gijon">Gijón - Efecto Seda</li>
                <li data-escuela="huelva">Huelva - Diseminado Juradillo, 4</li>
                <li data-escuela="madrid">Madrid - COSE Madrid</li>
                <li data-escuela="merida">Mérida - Mar Segovia</li>
                <li data-escuela="sevilla">Sevilla - Fashion Workshop</li>
                <li data-escuela="tarragona">Tarragona - Marta Casanova</li>
                <li data-escuela="valencia">Valencia - Victoria Burek</li>
                <li data-escuela="vitoria">Vitoria Gasteiz - M.Class</li>
                <li data-escuela="zaragoza">Zaragoza - Victoria López</li>
            </ul>
        </div>


        <div class="mapa-wrapper">
            <div class="mapa-container">
                <img src="assets/img/mapa.png" alt="Mapa de España">

                <div class="pin-wrapper madrid">
                    <div class="pin">📍</div>
                    <a href="https://cosemadrid.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/cosemadrid.webp" alt=""></a>
                </div>
                <div class="pin-wrapper zaragoza">
                    <div class="pin">📍</div>
                    <a href="https://victorialopez.eu/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/lopez.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper getafe">
                    <div class="pin">📍</div>
                    <a href="https://www.lolamyatelier.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/lolamy-atelier_0.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper gijon">
                    <div class="pin">📍</div>
                    <a href="https://efectoseda.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/efecto-seda.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper merida">
                    <div class="pin">📍</div>
                    <a href="https://marsegovia.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/mar-segovia.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper huelva">
                    <div class="pin">📍</div>
                    <a href="https://maps.app.goo.gl/LVLVWykKv4dahcd38" target="_blank" class="globo"><img
                            src="assets/img/escuelas/maps.png" alt=""></a>
                </div>
                <div class="pin-wrapper sevilla">
                    <div class="pin">📍</div>
                    <a href="https://fashionworkshop.org/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/fashion.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper tarragona">
                    <div class="pin">📍</div>
                    <a href="https://www.instagram.com/martacasanova_academia/?hl=es" target="_blank" class="globo"><img
                            src="assets/img/escuelas/marta.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper valencia">
                    <div class="pin">📍</div>
                    <a href="https://victoriaburek.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/victoria.jpg" alt=""></a>
                </div>
                <div class="pin-wrapper gandia">
                    <div class="pin">📍</div>
                    <a href="https://corteyconfeccionmila.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/mila.png" alt=""></a>
                </div>
                <div class="pin-wrapper vitoria">
                    <div class="pin">📍</div>
                    <a href="https://mclassmoda.com/" target="_blank" class="globo"><img
                            src="assets/img/escuelas/mclass.jpeg" alt=""></a>
                </div>

            </div>
        </div>
    </div>



    <script src="script.js"></script>
</body>

</html>