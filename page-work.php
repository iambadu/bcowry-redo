<?php get_header() ?>
<div class="div">

</div>
<section>
    <div class="flex flex-wrap overflow-hidden pb-4">

      <?php
      // The Query
      $posts_port = new WP_Query(array(
          'post_type' => 'portfolio'
      ));

      // The Loop
      while ( $posts_port->have_posts() ) :
          $posts_port->the_post();
      ?>

      <div class="wow fadeInUp port-grid relative w-full md:w-1/2">
        <a href="<?php the_permalink() ?>">
          <div class="port-overlay">
            <span class="port-caption text-lg md:text-2xl"><strong class="text-2xl"><?php the_title() ?></strong></span>
          </div>
        </a>
        <?php the_post_thumbnail('port-thumb', 'class=w-auto')?>
      </div>

      <?php
endwhile;
wp_reset_query(); 
 ?>

    </div>
  </section>

<?php get_footer() ?>