<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <div class="container-fluid imagenes-principales">
    <div class="row imagen-superior imagen">
      <div class="col-md-6 bg-primary">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-sm-8 col-md-6">
            <div class="contenido text-center text-light py-3">
              <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_1', true); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>);">
      </div>
    </div>
    <div class="row imagen-inferior imagen">
      <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>);">
      </div>
      <div class="col-md-6 bg-secondary">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-sm-8 col-md-6">
            <div class="contenido text-center py-3">
              <?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_superior_2', true); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--.container-fluid-->

  <?php
  $nosotros = new WP_Query('pagename=nosotros');
  while ($nosotros->have_posts()) : $nosotros->the_post();
    get_template_part('template', 'parts/iconos');
  endwhile;
  wp_reset_postdata();
  ?>

  <!--.container-->

  <section class="clases mt-5 py-5">
    <h2 class="separador text-center mb-3">Próximas Clases</h2>

    <div class="container">
      <div class="row">
        <?php edc_query_cursos(3); ?>
      </div>

      <div class="row justify-content-end">
        <div class="col-sm-4 text-right">
          <a href="<?php echo get_permalink(get_page_by_title('Próximas Clases')) ?>" class="btn btn-primary d-block">Ver
            Todas
            las Clases</a>
        </div>
      </div>
    </div>
  </section>

  <div class="licenciatura" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_licenciatura', true); ?>);">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-8">
          <div class="contenido text-light text-center">
            <p><?php echo get_post_meta(get_the_ID(), 'edc_homepage_texto_licenciatura', true); ?></p>

            <?php $contacto = get_page_by_title('Contacto'); ?>
            <a href="<?php echo get_permalink($contacto->ID); ?>" class="btn-primary btn text-uppercase">Más
              información</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php get_footer(); ?>