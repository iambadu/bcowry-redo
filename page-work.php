<?php get_header() ?>
<div class="div">

</div>
  <section>
    <div class="flex flex-wrap overflow-hidden pb-4">

            <?php
      // The Query
      $posts = new WP_Query(array(
          'post_type' => 'portfolio',
          'posts_per_page' => '4',
      ));

      // The Loop
      while ( $posts->have_posts() ) :
          $posts->the_post();
      ?>

      <div class="relative w-full md:w-1/2">
        <a href="<?php the_permalink() ?>">
          <span class="duration-200 transition-opacity hover:opacity-25 absolute bg-black opacity-50 inset-0"></span>
          <?php the_post_thumbnail('port-thumb', 'class=w-auto')?>
          <p class="text-lg  font-semibold z-20 absolute bottom-0 right-0 uppercase bg-white text-gray-800 px-4 py-2">
            <?php the_title() ?>
          </p>
        </a>
      </div>
    
              <?php
endwhile;
 wp_reset_postdata();
 ?>
    </div>
  </section>

<?php get_footer() ?>