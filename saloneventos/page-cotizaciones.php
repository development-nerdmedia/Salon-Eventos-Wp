<?php 



/*Template Name: Cotizaciones */



get_header(); ?>


<section class="banner">
            <div class="fondo">
                <div class="filtro"></div>
                <img src="<?php bloginfo('template_url'); ?>/img/bannerCotizaciones.jpg" alt="">
            </div>
            <div class="title" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                <h2>Cotizaciones</h2>
            </div>
        </section>

        <section class="contacForm">
            <div class="container">
                <h2>Cotiza tu evento</h2>
                <form action="gracias.html" method="">
                    <fieldset>
                        <div class="form-colum">
                            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" validate="0" type="text" required="true" name="name" id="name" >
                                </span>
                                <label for="name">Nombre u Organización:</label>
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" validate="0" type="number" required="true" name="dni" id="dni" >
                                </span>
                                <label for="dni">DNI O RUC:</label>
                            </div>
                        </div> 
                        <div class="form-colum">
                            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" validate="0" type="number" required="true" name="telefono" id="telefono" >
                                </span>
                                <label for="telefono">Teléfono:</label>
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" validate="0" type="text" required="true" name="email" id="email" >
                                </span>
                                <label for="email">Correo electrónico:</label>
                            </div>
                        </div>  
                        <div class="form-colum">
                            <div class="form-group date" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" type="date" name="fecha" id="fecha" />
                                </span>
                                <label for="fecha">Fecha de evento:</label>
                            </div>
                            <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                                <span>
                                    <input class="form-input" validate="0" type="number" required="true" name="numeroPersonas" id="numeroPersonas" >
                                </span>
                                <label for="numeroPersonas">N° de personas:</label>
                            </div>
                        </div>  
                        <div class="form-group" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                            <div>
                                <span>
                                    <select name="listProyecto" id="listProyecto" required="true">
                                        <option value="">Tipo de evento</option>
                                        <option value="Matrimonio">Matrimonio</option>
                                        <option value="Cumpleaños">Cumpleaños</option>
                                        <option value="Quinceañeros">Quinceañeros</option>
                                        <option value="Corporativos">Corporativos</option>
                                    </select>
                                </span>                                
                            </div>
                        </div>        
                        <div class="form-group formmensaje" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                            <span>
                                <textarea required="true" class="form-input" maxlength="250" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                            </span>
                            <label for="mensaje">Cuéntanos más:</label>
                        </div>         
                        <div class="btn-enviar" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                            <button type="submit">Enviar <img src="<?php bloginfo('template_url'); ?>/img/flecha-amarilla.svg" alt=""></button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>

        <section class="bannerContacto">
            <div class="container">
                <div class="item" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <img src="<?php bloginfo('template_url'); ?>/img/icon-tel.svg" alt="">
                    <p>0000000 / 000000</p>
                </div>
                <div class="item" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <img src="<?php bloginfo('template_url'); ?>/img/icon-whatsapp.svg" alt="">
                    <p>00000000</p>
                </div>
                <div class="item" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                    <img src="<?php bloginfo('template_url'); ?>/img/icon-correo.svg" alt="">
                    <p>Lorem ipsum dolor sit@gmail.com</p>
                </div>
            </div>
        </section>

        <section class="ubicacion">
            <div class="container">
                <h2 data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Ubica nuestro local</h2>
                <p data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nullam enim, aliquam bibendum elementum at. Dui magna nunc scelerisque tincidunt vestibulum </p>
            </div>
            <div class="map" data-aos="fade-up" data-aos-once="true" data-aos-duration="1500">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7961250119174!2d-77.0381930845753!3d-12.057544045385493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c72b9be265%3A0x312e8541a16bf8e6!2sPaseo%20de%20los%20H%C3%A9roes%20Navales!5e0!3m2!1ses-419!2spe!4v1669843702107!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>



<?php 
get_footer();