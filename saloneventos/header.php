<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
    <title>
        <?php if( is_home() ){
            echo get_bloginfo('name');
        } 
        // else if () {
        // } else if () {
        //     echo get_bloginfo('name');
        // }
        ?>
    </title>

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <div class="logo">
            <a href="<?php bloginfo('url'); ?>">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" />
            </a>
          </div>
          <div class="navigation">
            <ul>
            <?php wp_nav_menu(array('menu'=>'MenuPrincipal')); ?>
              <li class="menu-mobile">
                <img src="<?php bloginfo('template_url'); ?>/img/menu-mobil.svg" alt="">
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <section class="menuMovil">
        <div class="container">
          <div>
            <div class="top">
              <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" /></a>
              <div class="close">
                <div class="close-x">
                  <span>x</span>
                </div>
              </div>
            </div>
            <ul>
            <?php wp_nav_menu(array('menu'=>'MenuPrincipal')); ?>
            </ul>
          </div>
          <div class="redesIcon">
            <span>Síguenos en:</span>
            <div class="redes">
              <a href="" target="_blank"
                ><img src="<?php bloginfo('template_url'); ?>/img/icon-facebook.svg" alt=""
              /></a>
              <a href="" target="_blank"
                ><img src="<?php bloginfo('template_url'); ?>/img/icon-twitter.svg" alt=""
              /></a>
              <a href="" target="_blank"
                ><img src="<?php bloginfo('template_url'); ?>/img/icon-youtube.svg" alt=""
              /></a>
              <a href="" target="_blank"
                ><img src="<?php bloginfo('template_url'); ?>/img/icon-linkedin.svg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>

      <div class="ht-cursor">
        <div class="ht-cursor-text">
          Ver <br />
          Evento
        </div>
      </div>

      <div class="ht-cursor2">
        <div class="ht-cursor-text2">
          Ver <br />
          Imagen
        </div>
      </div>