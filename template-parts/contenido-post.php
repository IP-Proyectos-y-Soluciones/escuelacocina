  <?php $html = edc_imagen_destacada(get_the_ID());
  // $html[0] retorna el HTML
  // $html[1] retorna si la imagen existe

  echo $html[0];
  ?>

  <main class="container">
    <div class="row justify-content-center entrada">
      <div class="bg-white contenido-entrada py-3 px-5 <?php echo $html[1] ? 'col-md-8 destacada' : 'col-md-12 no-destacada'; ?>">
        <h1 class="separador text-center my-5"><?php the_title(); ?></h1>

        <?php get_template_part('template-parts/meta', 'post'); ?>

        <?php the_content(); ?>
      </div>
    </div>
  </main>