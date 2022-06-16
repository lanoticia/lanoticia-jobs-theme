<?php
get_header();
?>

<section class="card-blue padding-5">
  <div class="container text-center">
    <div class="card-body">
      <h2 class="card-title padding-5">Te ayudamos a encontrar un empleo ideal para ti de forma rápida</h2>
      <?php echo do_shortcode( '[jobpost]' ); ?>
    </div>
  </div>
</section>

<section>
  <div class="text-center padding-5">
    <div class="container">
      <div class="card-body">
        <h2 class="card-title padding-5">Empresas solicitando personal</h2>
        <div class="row">
          <div class="col-sm padding-5">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lanoticiajobs.png" class="img-fluid">
            </a>
          </div>
          <div class="col-sm padding-5">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lanoticiajobs.png" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm padding-5">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lanoticiajobs.png" class="img-fluid">
            </a>
          </div>
          <div class="col-sm padding-5">
            <a href="#">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/lanoticiajobs.png" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-primary btn-lg btn-block">Más empresas</a>
    </div>
  </div>
</section>

<section class="card-blue padding-5">
  <div class="container text-center">
    <div class="card-body">
      <h2 class="card-title padding-5">Te ayudamos a encontrar un empleo mejor</h2>
      <a href="#" class="btn btn-light btn-lg btn-block">Click Aquí</a>
      <h3 class="card-text padding-5">Contesta nuestro formulario</h3>
    </div>
  </div>
</section>

<section>
  <div class="container padding-5">
    <div class="row text-center">
      <h2 class="titulo-blog-home">Blog de ayuda laboral</h2>
    </div>
    <div class="row">
      <?php
        $args = array(
          'posts_per_page' => 3
        );
        $entradas = new WP_query($args);while($entradas->have_posts() ): $entradas->the_post();
      ?>
      <div class="col-sx-6 col-md-4 entrada">
        <?php the_post_thumbnail('entradas', array('class' =>  'img-fluid')); ?>
        <div class="contenido-entrada">
          <?php the_title('<h5 class="loop_título text-center">','</h5>'); ?>
        </div>
      </div>
      <?php
      endwhile; wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<?php
get_footer();