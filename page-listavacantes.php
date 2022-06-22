<?php
/* Template Name: Listado Vacantes */
get_header();
?>
<section class="titulo-vacantes padding-5">
  <div class="container text-center">
    <div class="card-body">
      <h1 class="card-title">Lista de empleos</h1>
    </div>
  </div>
</section>

<section class="imagen-vacantes padding-5">
  <div class="container text-center">
    <div class="card-body">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/LNjobs-listadodeempleos.jpg" class="img-fluid">
    </div>
  </div>
</section>

<section class="page-blog-primer-nota card-blue padding-5">
  <div class="container">
    <div class="row">
        <?php echo do_shortcode( '[jobpost]' ); ?>
    </div>
  </div>
</section>

<?php
get_footer();