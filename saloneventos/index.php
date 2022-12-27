<?php 

/*Template Name: Inicio */

get_header(); ?>
    

      <section class="home">
        <div class="homeBg">
          <div class="filtro-video"></div>
          <span><?php echo get_field('video_fondo'); ?>
        </div>
        <div class="container">
          <a href="http://localhost:8008/saloneventos/salon" class="btnFloat" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><span><?php echo get_field('texto_boton'); ?></span></a>
          <div class="progress-bar" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-duration="1500">
            <span class="completed"></span>
          </div>
        </div>
      </section>
      
      <section class="bajada">
        <div class="filtro"></div>
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><?php echo get_field('titulo_principal_nosotros_home'); ?></h2>
          <p data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><?php echo get_field('descripcion'); ?></p>
          <img
            src="<?php echo get_field('imagen_1'); ?>"
            alt=""
            class="uno"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="450"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php echo get_field('imagen_2'); ?>"
            alt=""
            class="dos"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="300"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php echo get_field('imagen_3'); ?>"
            alt=""
            class="tres"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="150"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php echo get_field('imagen_4'); ?>"
            alt=""
            class="cuatro"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="150"
            data-aos-duration="1500"
            data-aos-once="true"
          />
        </div>
      </section>
      

      <section class="serviciosHome">
        <div class="container">
          <h2><?php echo get_field('titulo_principal_eventos_home'); ?></h2>
        </div>
        <div class="content">
          <div class="contentimgWrapper" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            <div class="Contentimg">
              <img
                src="<?php bloginfo('template_url'); ?>/img/services-boda.jpg"
                alt=""
                data-category="Bodas"
                class="select"
              />
              <img
                src="<?php bloginfo('template_url'); ?>/img/services-boda2.jpg"
                alt=""
                data-category="Quinceañeros"
              />
              <img
                src="<?php bloginfo('template_url'); ?>/img/services-boda3.jpg"
                alt=""
                data-category="Cumpleaños"
              />
              <img
                src="<?php bloginfo('template_url'); ?>/img/services-boda4.jpg"
                alt=""
                data-category="Corporativos"
              />
            </div>
          </div>
          <div class="containerText">
            <div data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <ul>
                <li class="select">Bodas</li>
                <li>Quinceañeros</li>
                <li>Cumpleaños</li>
                <li>Corporativos</li>
              </ul>
            </div>          
            <div class="textoInfo" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <p class="select">
                Bodas Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse nullam enim, aliquam bibendum elementum at.
              </p>
            </div>
            <div class="textoP">
              <span data-category="Bodas"
                >Bodas Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse nullam enim, aliquam bibendum elementum at.
              </span>
              <span data-category="Quinceañeros"
                >Quinceañeros Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Suspendisse nullam enim, aliquam bibendum elementum at.
              </span>
              <span data-category="Cumpleaños"
                >Cumpleaños Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Suspendisse nullam enim, aliquam bibendum elementum at.
              </span>
              <span data-category="Corporativos"
                >Corporativos Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Suspendisse nullam enim, aliquam bibendum elementum at.
              </span>
            </div>
            <a class="buttonFlecha" href="pages/eventos.html" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"
              ><?php echo get_field('texto_boton_eventos'); ?><span>bodas</span>
              <div class="img">
                <img src="<?php bloginfo('template_url'); ?>/img/flecha-btn.svg" alt="" />
              </div>
            </a>
          </div>
        </div>
        
      </section>

      <section class="servicios">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Nuestros servicios</h2>
          <div class="contentServicios">
            <div class="itemServicios" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <div class="textoInfo">
                <h3>Servicios incluidos</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse nullam enim, aliquam bibendum elementum at. Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="http://localhost:8008/saloneventos/servicios-incluidos" class="buttonFlecha"
                  >Ver más
                  <div class="img">
                    <img src="<?php bloginfo('template_url'); ?>/img/flecha-btn.svg" alt="" />
                  </div>
                </a>
              </div>
              <div class="contentImg">
                <img src="<?php bloginfo('template_url'); ?>/img/servicio1.jpg" alt="" />
              </div>
            </div>
            <div class="itemServicios" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <div class="textoInfo">
                <h3>Servicios adicionales</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Suspendisse nullam enim, aliquam bibendum elementum at. Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="http://localhost:8008/saloneventos/servicios-adicionales" class="buttonFlecha"
                  >Ver más
                  <div class="img">
                    <img src="<?php bloginfo('template_url'); ?>/img/flecha-btn.svg" alt="" />
                  </div>
                </a>
              </div>
              <div class="contentImg">
                <img src="<?php bloginfo('template_url'); ?>/img/servicio2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ultimosEventos">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Últimos eventos</h2>
          <div class="swiper slider3item" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            <div class="swiper-wrapper">
              <div class="swiper-slide itemEvento">
                <div class="filtro"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                <div class="info">
                  <span>Boda</span>
                  <p>Juan & María</p>
                </div>
                <div class="infoPop">
                  <div class="imgs">
                    <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide itemEvento">
                <div class="filtro"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="" />
                <div class="info">
                  <span>Quinceañera</span>
                  <p>Maria Castillo</p>
                </div>
                <div class="infoPop">
                  <div class="imgs">
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide itemEvento">
                <div class="filtro"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="" />
                <div class="info">
                  <span>Cumpleaños</span>
                  <p>Juan & María</p>
                </div>
                <div class="infoPop">
                  <div class="imgs">
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-3.jpg" alt="" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide itemEvento">
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
              <div class="swiper-slide itemEvento">
                <div class="filtro"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="" />
                <div class="info">
                  <span>Boda</span>
                  <p>Juan & María</p>
                </div>
                <div class="infoPop">
                  <div class="imgs">
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                    <img src="<?php bloginfo('template_url'); ?>/img/eventos-2.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <section class="call">
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">¿Tienes algún evento?</h2>
          <a href="http://localhost:8008/saloneventos/cotizaciones" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"
            >Solicita tu cotización <img src="<?php bloginfo('template_url'); ?>/img/flecha-black.svg" alt=""
          /></a>
        </div>
      </section>

      

    <?php get_footer(); ?>


