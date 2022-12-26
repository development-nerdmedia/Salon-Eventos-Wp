<?php 



/*Template Name: Gracias */



get_header(); ?>

<section class="thanks">
            <div class="container">
                <div class="top">
                    <a href="http://localhost:8008/saloneventos/cotizaciones">
                        <div class="close-x">
                            <span>x</span>
                        </div>
                    </a>
                </div>
                <div class="content">
                    <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">¡Gracias!</h2>
                    <p data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nullam enim.</p>
                    <a href="<?php bloginfo('url'); ?>" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Inicio <img src="<?php bloginfo('template_url'); ?>/img/flecha-amarilla.svg" alt=""></a>
                </div>
            </div>
        </section>



<?php 
get_footer();