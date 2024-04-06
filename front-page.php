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
    <div class="col-md-6 imagen-fondo"
      style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>);">
    </div>
  </div>
  <div class="row imagen-inferior imagen">
    <div class="col-md-6 imagen-fondo"
      style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>);">
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

<div class="container">
  <section class="nosotros mt-5">
    <h2 class="separador text-center mb-5">¿Porqué estudiar con nosotros?</h2>
    <div class="row">
      <div class="col-md-4 text-center informacion">
        <img src="img/icono_chef.png" alt="Icon-Chef" class="img-fluid mb-3" />
        <h3>Chef’s Especialistas</h3>
        <p>Los mejores chef’s que han trabajado en los mejores restaurants de Europa</p>
      </div>
      <div class="col-md-4 text-center informacion">
        <img src="img/icono_vino.png" alt="Icon-Vino" class="img-fluid mb-3" />
        <h3>Incluye todo sobre Bebidas</h3>
        <p>Además de la cocina, incluimos en el programa todo lo relacionado a bebidas.</p>
      </div>
      <div class="col-md-4 text-center informacion">
        <img src="img/icono_menu.png" alt="Icon-Menu" class="img-fluid mb-3" />
        <h3>Siempre Actualizado</h3>
        <p>El Programa se actualiza constamemente con nuevos platillos y técnicas.</p>
      </div>
    </div>
  </section>
</div>
<!--.container-->

<section class="clases mt-5 py-5">
  <h2 class="separador text-center mb-3">Próximas Clases</h2>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase1.jpg" alt="Clase 1" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Comida Italiana para principiantes</h3>
            <p class="card-subtitle mb-2">Aprende las bases de la comida italiana con este curso</p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase2.jpg" alt="Clase 2" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Planeación de Menús para bodas</h3>
            <p class="card-subtitle mb-2">Añade la planeación de menús para bodas a tus habilidades.</p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase3.jpg" alt="Clase 3" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Preparación de Pasteles</h3>
            <p class="card-subtitle mb-2">Aprende a preparar deliciosos postres con este curso.</p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase4.jpg" alt="Clase 4" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Comida Mexicana</h3>
            <p class="card-subtitle mb-2">Prepara la mejor comida mexicana con este curso </p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase5.jpg" alt="Clase 5" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Comida de Marruecos </h3>
            <p class="card-subtitle mb-2">
              Aprende deliciosas recetas de la comida marroquí.
            </p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <img src="img/clase6.jpg" alt="Clase 6" class="card-img-top" />
          <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
            <p class="text-center m-0">20 / Mayo / 2018 18:00 Hrs</p>
            <span class="badge badge-secondary px-2 py-2">$300</span>
          </div>
          <div class="card-body">
            <h3 class="card-title">Prepara 10 tipos de ensaladas</h3>
            <p class="card-subtitle mb-2">
              En este curso aprenderás hasta 10 tipos de ensaladas.
            </p>
            <p class="card-text">Nulla facilisi. Vestibulum commodo mattis orci, a dignissim nunc. In feugiat volutpat
              mattis. Quisque
              egestas.</p>
            <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
          </div>
        </div>
      </div>
      <!--.col-md-4-->
    </div>

    <div class="row justify-content-end">
      <div class="col-sm-4 text-right">
        <a href="clases.html" class="btn btn-primary">Ver Todas las Clases</a>
      </div>
    </div>
  </div>
</section>

<div class="licenciatura"
  style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_licenciatura', true); ?>);">
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