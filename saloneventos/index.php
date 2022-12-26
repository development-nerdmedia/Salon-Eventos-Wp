<?php 

/*Template Name: Inicio */

get_header(); ?>
    

      <section class="home">
        <div class="homeBg">
          <div class="filtro-video"></div>
          <!-- <video src="https://www.youtube.com/watch?v=bUXPB6T8gpw" autoplay="" muted="" playsinline="" loop="" preload="none" poster="img/video-home.jpg"></video> -->
          <!-- <iframe
            width="1920"
            height="1080"
            src="https://www.youtube.com/embed/bUXPB6T8gpw?start=0&autoplay=1&mute=1&controls=0&loop=1&playsinline=1"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; playsinline; muted; loop; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe> -->

          <iframe 
          src="https://player.vimeo.com/video/736490091?h=d13a77b71d&loop=1&background=1&quality=auto&app_id=122963" 
          width="1920" height="1080" frameborder="0" 
          allow="autoplay; fullscreen; picture-in-picture" 
          allowfullscreen="" title="30 SEC HOR .mp4" 
          data-ready="true"></iframe>

          <!-- <iframe src="https://player.vimeo.com/video/409924928?h=0c3a18336e&autoplay=1&title=0&byline=0&portrait=0" width="2408" height="1080" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe> -->
        </div>
        <div class="container">
          <a href="pages/salon.html" class="btnFloat" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"><span>Salón <br />M&C</span></a>
          <div class="progress-bar" data-aos="fade-up" data-aos-offset="0" data-aos-once="true" data-aos-duration="1500">
            <span class="completed"></span>
          </div>
        </div>
      </section>

      <section class="bajada">
        <div class="filtro"></div>
        <div class="container">
          <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Lorem ipsum dolor sit amet, adipiscing elit dolor sit amet.</h2>
          <p data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            nullam enim, aliquam bibendum elementum at. Dui magna nunc
            scelerisque tincidunt vestibulum ornare eget diam. Eget vulputate
            tempor velit odio nunc arcu morbi. Tortor, mauris leo commodo sed
            cum. Tortor elit lorem ultricies cras integer ac arcu nec auctor. Ut
            semper netus ac ut mauris, varius eu tincidunt.
          </p>
          <img
            src="<?php bloginfo('template_url'); ?>/img/foto-uno.jpg"
            alt=""
            class="uno"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="450"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php bloginfo('template_url'); ?>/img/foto-dos.jpg"
            alt=""
            class="dos"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="300"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php bloginfo('template_url'); ?>/img/foto-tres.jpg"
            alt=""
            class="tres"
            data-aos="fade-up"
            data-aos-easing="ease-in-back"
            data-aos-offset="150"
            data-aos-duration="1500"
            data-aos-once="true"
          />
          <img
            src="<?php bloginfo('template_url'); ?>/img/foto-cuatro.jpg"
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
          <h2>Nuestros eventos</h2>
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
              >Ver eventos de<span>bodas</span>
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
                <a href="pages/serviciosadicionales.html" class="buttonFlecha"
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
                <a href="pages/serviciosadicionales.html" class="buttonFlecha"
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
          <a href="pages/cotizaciones.html" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500"
            >Solicita tu cotización <img src="<?php bloginfo('template_url'); ?>/img/flecha-black.svg" alt=""
          /></a>
        </div>
      </section>

      

    <?php get_footer(); ?>


