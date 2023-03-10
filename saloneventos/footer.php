    <section class="popUp">
        <div class="container">
          <div class="top">
            <div class="close-x">
              <span>x</span>
            </div>
          </div>
          <div class="contenidoPopUp">
            <div class="sliderPopUp">
              <div class="swiper swiperPop">
                <div class="swiper-wrapper"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="info">
              <div class="newPaginacion">
                <span class="current">1</span>
                /
                <span class="total">3</span>
              </div>
              <div class="flechas">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <span class="category"></span>
              <p class="name">Salon M&C</p>
            </div>
          </div>
        </div>
      </section>
</main>

<footer>
      <div class="container" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
        <div class="logo">
          <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" />
        </div>
        <div class="datos">
          <div class="info">
            <ul>
            <?php wp_nav_menu(array('menu'=>'MenuPrincipal')); ?>
            </ul>
          </div>
          <div class="infoContact">
            <span>Dirección:</span>
            <p>Lorem ipsum dolor sit amet, consectetur dolor amet</p>
            <span>Teléfono de oficina:</span>
            <p>00000000000</p>
            <div class="redes">
              <p>Siguenos en:</p>
              <div class="redesIcons">
                <a href="#">
                  <svg
                    width="13"
                    height="24"
                    viewBox="0 0 13 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.44527 24V13.0703H12.2954L12.8677 8.79094H8.44527V6.06518C8.44527 4.83032 8.80452 3.98485 10.6551 3.98485H13V0.169586C11.8591 0.0524886 10.7123 -0.00405133 9.5648 0.00022559C6.16163 0.00022559 3.82509 1.98987 3.82509 5.64245V8.78294H0V13.0623H3.83344V24H8.44527Z"
                      fill="#C2902F"
                    />
                  </svg>
                </a>
                <a href="">
                  <svg
                    width="30"
                    height="25"
                    viewBox="0 0 30 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M30 2.96546C28.8968 3.46658 27.7116 3.80518 26.4657 3.95822C27.7513 3.16969 28.713 1.92863 29.1716 0.466612C27.9638 1.20203 26.6419 1.71968 25.2634 1.99707C24.3364 0.98245 23.1085 0.309944 21.7704 0.0839617C20.4324 -0.142021 19.059 0.0911637 17.8634 0.747312C16.6679 1.40346 15.7171 2.44586 15.1588 3.71268C14.6004 4.97949 14.4656 6.39985 14.7754 7.75322C12.328 7.62725 9.93389 6.97519 7.74829 5.83934C5.5627 4.70349 3.63451 3.10924 2.08888 1.16006C1.56038 2.09459 1.2565 3.1781 1.2565 4.33203C1.25591 5.37084 1.50546 6.39374 1.98302 7.30997C2.46057 8.2262 3.15136 9.00743 3.9941 9.58435C3.01675 9.55247 2.06096 9.28176 1.20629 8.79474V8.876C1.20619 10.333 1.69783 11.7451 2.59779 12.8728C3.49775 14.0005 4.7506 14.7743 6.14375 15.0628C5.2371 15.3144 4.28654 15.3514 3.36387 15.1712C3.75693 16.4248 4.52259 17.5211 5.55364 18.3065C6.5847 19.0919 7.82954 19.5272 9.11389 19.5513C6.93363 21.3058 4.24102 22.2575 1.46922 22.2533C0.978219 22.2534 0.487637 22.224 0 22.1653C2.81354 24.0196 6.08871 25.0038 9.43363 25C20.7566 25 26.9466 15.3865 26.9466 7.04894C26.9466 6.77806 26.94 6.50447 26.9281 6.23359C28.1322 5.34102 29.1715 4.23573 29.9974 2.96952L30 2.96546Z"
                      fill="#C2902F"
                    />
                  </svg>
                </a>
                <a href="">
                  <svg
                    width="26"
                    height="21"
                    viewBox="0 0 26 21"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M25.4574 3.28041C25.3094 2.64519 25.0192 2.06591 24.6158 1.60053C24.2125 1.13516 23.7102 0.800024 23.1592 0.628663C21.1308 1.27562e-07 13 0 13 0C13 0 4.8692 -1.27562e-07 2.84085 0.625318C2.28957 0.796124 1.78699 1.13108 1.38359 1.59653C0.980185 2.06199 0.690158 2.64157 0.542634 3.27707C-1.10694e-07 5.61783 0 10.5 0 10.5C0 10.5 -1.10694e-07 15.3822 0.542634 17.7196C0.841518 19.0104 1.72366 20.0269 2.84085 20.3713C4.8692 21 13 21 13 21C13 21 21.1308 21 23.1592 20.3713C24.2792 20.0269 25.1585 19.0104 25.4574 17.7196C26 15.3822 26 10.5 26 10.5C26 10.5 26 5.61783 25.4574 3.28041ZM10.4174 14.9809V6.01911L17.1496 10.4666L10.4174 14.9809Z"
                      fill="#C2902F"
                    />
                  </svg>
                </a>
                <a href="">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.9148 8.3628H13.3716V10.5828C14.0136 9.306 15.66 8.1588 18.1332 8.1588C22.8744 8.1588 24 10.7004 24 15.3636V24H19.2V16.4256C19.2 13.77 18.558 12.2724 16.9236 12.2724C14.6568 12.2724 13.7148 13.8864 13.7148 16.4244V24H8.9148V8.3628ZM0.684 23.796H5.484V8.1588H0.684V23.796ZM6.1716 3.06C6.17178 3.46233 6.09199 3.86068 5.93686 4.2319C5.78174 4.60313 5.55438 4.93982 5.268 5.2224C4.68768 5.79915 3.90217 6.12198 3.084 6.12C2.26727 6.11945 1.48357 5.79744 0.9024 5.2236C0.617054 4.94006 0.390463 4.60299 0.235612 4.23172C0.0807618 3.86045 0.000694958 3.46227 0 3.06C0 2.2476 0.324 1.47 0.9036 0.8964C1.48426 0.32179 2.26829 -0.000359053 3.0852 3.00317e-07C3.9036 3.00317e-07 4.6884 0.3228 5.268 0.8964C5.8464 1.47 6.1716 2.2476 6.1716 3.06Z"
                      fill="#C2902F"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="pie">
          <p>©2022 Todos los derechos reservados</p>
          <div>
            <p>Hecho con</p>
            <img class="corazon" src="<?php bloginfo('template_url'); ?>/img/corazon.svg" alt="" />
            <img class="nerd" src="<?php bloginfo('template_url'); ?>/img/logo-nerd.svg" alt="" />
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>