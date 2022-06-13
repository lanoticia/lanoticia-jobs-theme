<?php
get_header();
?>
<h2 class="text-center">Blog de ayuda laboral</h2>
<section class="container contenido">
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
</section>
<?php
get_footer();