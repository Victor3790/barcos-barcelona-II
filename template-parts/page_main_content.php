  <div class="hero hero--home"></div>
  <div class="section section--dark">
    <div class="section__picture section__picture--center section--left">
      <img  class="section__picture__img"
            src="<?php echo THEME_URI; ?>/imgs/section1.jpg" 
            alt="" 
            srcset="<?php echo THEME_URI; ?>/imgs/section1_xs.jpg 600w,
                    <?php echo THEME_URI; ?>/imgs/section1_sm.jpg 800w,
                    <?php echo THEME_URI; ?>/imgs/section1.jpg 890w"
            sizes="(max-width: 576px) 600px,
                   (max-width: 768px) 800px,
                   890px">
    </div>
    <div class="section__text section--justified section--left">
      <h2>ALQUILER DE YATES</h2>
      <p>
        En Barcos Barcelona S.L., ofrecemos servicio de alquiler de yates y alquiler 
        de barcos en los destinos más impresionantes y exclusivos del Mediterráneo, 
        Caribe y Bahamas, Maldivas. Disponemos de una amplia selección de alquiler 
        de yates, alquiler de megayates, alquiler de veleros, alquiler de goletas y 
        catamaranes únicos. Disfrute de un servicio totalmente personalizado, diseñado 
        para cubrir todas sus necesidades
      </p>
    </div>
  </div>
  <div class="section section--white">
    <div class="section__picture section__picture--center section--right">
      <img  class="section__picture__img"
            src="<?php echo THEME_URI; ?>/imgs/section2.jpg" 
            alt="" 
            srcset="<?php echo THEME_URI; ?>/imgs/section2_xs.jpg 600w,
                    <?php echo THEME_URI; ?>/imgs/section2_sm.jpg 800w,
                    <?php echo THEME_URI; ?>/imgs/section2.jpg 890w"
            sizes="(max-width: 576px) 600px,
                   (max-width: 768px) 800px,
                   890px">
    </div>
    <div class="section__text section--justified section--right">
      <h2>PRIVILEGIO</h2>
      <p>
        Viva una experiencia inolvidable navegando por los destinos más exclusivos 
        del Mediterráneo y Caribe con nuestro servicio de alquiler de yates en Ibiza, 
        alquiler de yates en Mallorca, alquiler de yates en Menorca, alquiler de yates 
        en Barcelona, yates de alquiler en Costa Brava, yates de alquiler en Caribe, 
        yates de alquiler en Bahamas, yates de alquiler en Rivera Francesa, barcos de 
        alquiler en Cerdeña, barcos de alquiler en Grecia.
      </p>
    </div>
  </div>
  <div class="section section--dark">
    <div class="section__picture section__picture--center section--left">
      <img  class="section__picture__img"
            src="<?php echo THEME_URI; ?>/imgs/section3_xs.jpg" 
            alt="" 
            srcset="<?php echo THEME_URI; ?>/imgs/section3_xs.jpg 600w,
                    <?php echo THEME_URI; ?>/imgs/section3_sm.jpg 800w,
                    <?php echo THEME_URI; ?>/imgs/section3.jpg 890w"
            sizes="(max-width: 576px) 600px,
                   (max-width: 768px) 800px,
                   890px">
    </div>
    <div class="section__text section--justified section--left">
      <h2>MÁS SOBRE NOSOTROS</h2>
      <p>
        Somos una empresa de reconocido prestigio a nivel mundial. las un formado 
        por un equipo de expertos profesionales especializados en proporcionar 
        asesoramiento y asistencia en cualquier aspecto relacionado con el alquiler 
        de yates y la gestión integral de su barco.
      </p>
    </div>
  </div>
  <div class="section section--white">
    <div class="section__picture section__picture--center section--right">
      <img  class="section__picture__img"
            src="<?php echo THEME_URI; ?>/imgs/section4_xs.jpg" 
            alt="" 
            srcset="<?php echo THEME_URI; ?>/imgs/section4_xs.jpg 600w,
                    <?php echo THEME_URI; ?>/imgs/section4_sm.jpg 800w,
                    <?php echo THEME_URI; ?>/imgs/section4.jpg 890w"
            sizes="(max-width: 576px) 600px,
                   (max-width: 768px) 800px,
                   890px">
    </div>
    <div class="section__text section--justified section--right">
      <h2>ACTIVIDADES</h2>
      <p>
        En Barcos Barcelona S.L, podemos organizar un evento corporativo, 
        presentaciones de producto, reuniones de negocio o programas de incentivos 
        a bordo de uno de nuestros yates. Una manera diferente y original de sorprender 
        a sus empleados, colaboradores o clientes. Consulte disponibilidad y precios de 
        toda la flota barcos de alquiler. 
      </p>
    </div>
  </div>
  <div class="section section--justified section--dark">
    <div class="section__form">
      <h2 style="text-transform:uppercase;">Envíenos su mensaje</h2>
      <?php echo do_shortcode( '[contact-form-7 id="243" title="Main"]' ); ?>
    </div>
    <div class="section__contact">
      <h2 style="text-transform:uppercase;">Contacto</h2>
      <ul class="section__contact__info-group">
        <li>Teléfono:</li>
        <li>(0034) 620 26 90 20</li>
      </ul>
      <ul class="section__contact__info-group">
        <li>Mail:</li>
        <li>info@barcosbarcelona.com</li>
      </ul>
      <ul class="section__contact__info-group">
        <li>Dirección:</li>
        <li>Carrer Ses Figueres, 31,</li>
        <li>07800 Ibiza, Islas Baleares,</li>
        <li>España</li>
      </ul>
    </div>
  </div>
  <div class="section section--justified section--white">
    <div class="section__ships">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h2>NOVEDADES</h2>
          </div>
        </div>
        <div class="row">
          <?php

          $posts = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>4));

          if ( $posts->have_posts() ) :
            
            while ( $posts->have_posts() ) :

              $posts->the_post();

              get_template_part( 'template-parts/cbt_result_posts_main' );

            endwhile;


          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;

          wp_reset_postdata();

          ?>
        </div>
      </div>
    </div>
  </div>
