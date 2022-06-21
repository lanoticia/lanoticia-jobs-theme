<?php
/* Template Name: Blog */
get_header();
?>
<section class="titulo-blog card-blue padding-5">
  <div class="container text-center">
    <div class="card-body">
      <h1 class="card-title">Blog de ayuda laboral</h1>
    </div>
  </div>
</section>

<section class="page-blog-primer-nota padding-5">
  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'posts_per_page' => 1
        );
        $entradas = new WP_query($args);while($entradas->have_posts() ): $entradas->the_post();
      ?>
      <div class="col entrada text-center">
        <?php the_post_thumbnail('entradas', array('class' =>  'img-fluid')); ?>
        <div class="contenido-entrada">
          <?php the_title('<h5 class="loop_título text-center">','</h5>'); ?>
        </div>
        <div class="excerpt-entrada">
          <?php the_excerpt(); ?>
        </div>
      </div>
      <?php
      endwhile; wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<section class="page-blog-contenido padding-5">
  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'posts_per_page' => 4,
          'offset' => 1
        );
        $entradas = new WP_query($args);while($entradas->have_posts() ): $entradas->the_post();
      ?>
      <div class="col-xs-12 col-md-6 entrada text-center">
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