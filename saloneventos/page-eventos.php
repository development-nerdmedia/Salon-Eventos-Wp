<?php 



/*Template Name: Eventos */



get_header(); ?>


<section class="banner">
        <div class="fondo">
          <div class="filtro"></div>
          <img src="<?php bloginfo('template_url'); ?>/img/bannerEventos.jpg" alt="" />
        </div>
        <div class="title" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
          <h2>Eventos</h2>
        </div>
      </section>

      <section class="ContentEvent">
        <div class="container">
          <div class="contentCategorias">
            <ul id="categorias" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <li class="hvr-radial-out select">Todos</li>
              <li class="hvr-radial-out">Cumpleaños</li>
              <li class="hvr-radial-out">Quinceañeros</li>
              <li class="hvr-radial-out">Bodas</li>
              <li class="hvr-radial-out">Corporativos</li>
            </ul>

            <form data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <select name="" id="opcionesEventos">
                <option value="Todos">Todos</option>
                <option value="Cumpleaños">Cumpleaños</option>
                <option value="Quinceañeros">Quinceañeros</option>
                <option value="Bodas">Bodas</option>
                <option value="Corporativos">Corporativos</option>
              </select>
            </form>
          </div>
          <div class="contentEventos" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            <div class="itemEvento" data-category="Bodas">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
              <div class="info">
                <span>Boda</span>
                <p>Juan & María</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="itemEvento" data-category="Quinceañeros">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
              <div class="info">
                <span>Quinceañero</span>
                <p>María</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="itemEvento" data-category="Cumpleaños">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
              <div class="info">
                <span>Cumpleaños</span>
                <p>Joaquin</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="itemEvento" data-category="Bodas">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
              <div class="info">
                <span>Boda</span>
                <p>Pepe & Iris</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="itemEvento" data-category="Quinceañeros">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
              <div class="info">
                <span>Quinceañero</span>
                <p>Julia</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="itemEvento" data-category="Cumpleaños">
              <div class="filtro"></div>
              <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
              <div class="info">
                <span>Cumpleaños</span>
                <p>Jorge</p>
              </div>
              <div class="infoPop">
                <div class="imgs">
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                  <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="call">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">¿Tienes algún evento?</h2>
          <a href="cotizaciones.html" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"
            >Solicita tu cotización <img src="<?php bloginfo('template_url'); ?>/img/flecha-black.svg" alt=""
          /></a>
        </div>
      </section>


<?php 
get_footer();