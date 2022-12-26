<?php 



/*Template Name: Salon */



get_header(); ?>

<section class="banner">
        <div class="fondo">
          <div class="filtro"></div>
          <img src="<?php bloginfo('template_url'); ?>/img/bannerSalon.jpg" alt="" />
        </div>
        <div class="title" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
          <h2>Salón</h2>
        </div>
      </section>

      <section class="bajadaSalon">
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
        </div>
      </section>

      <section class="galery">
        <div class="container">
          <div class="title" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            <h2>Galería</h2>
            <button class="buttonFlecha">
              Ver todas las imágenes
              <div class="img">
                <img src="<?php bloginfo('template_url'); ?>/img/flecha-btn.svg" alt="" />
              </div>
            </button>
          </div>
          <div class="containerGalery">
            <div class="swiper slider3item" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-3.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-1.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-2.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-3.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                  <img src="<?php bloginfo('template_url'); ?>/img/salon-1.jpg" alt="" />
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="btn-responsive" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
            <button class="buttonFlecha">
              Ver todas las imágenes
              <div class="img">
                <img src="<?php bloginfo('template_url'); ?>/img/flecha-btn.svg" alt="" />
              </div>
            </button>
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