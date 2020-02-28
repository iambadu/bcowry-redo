<?php get_header() ?>
<div class="bg-gray-400">
<div class="container mx-auto">
    <div class="p-4">
        <div class=" flex flex-wrap overflow-hidden">
<?php

// Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '9',
    'paged' => $paged,
);

$the_query = new WP_Query($args);

?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="text-gray-800 p-3 md:px-6 rounded-lg bg-white shadow mb-6 mt-24 mx-2">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('port-thumb', 'class=shadow-lg rounded-lg -mt-20 block mx-auto w-full')?>
                <h2 class="leading-tight py-3 text-gray-800 font-bold text-xl md:text-2xl ">
              <?php the_title()?>
            </h2>
              </a>
          
            <div class="my-2 flex items-center">
            <?php echo get_avatar( get_the_author_email(), '40', '', '', array( 'class' => array( 'rounded-full', 'mr-4' ))); ?>
              <div class="text-sm">
                <p class="font-semibold text-gray-900 leading-none">
                  <?php echo get_the_author(); ?>
                </p>
                <p class="text-gray-600"><?php the_date() ?></p>
              </div>
            </div>
          </div>
        </div>
    <?php endwhile; ?>
        </div>
    </div>
</div>
<div class="pagination">
        <?php
        echo paginate_links( array(
            'format'  => 'page/%#%',
            'current' => $paged,
            'total'   => $the_query->max_num_pages,
            'mid_size'        => 2,
            'prev_text'       => __('&laquo; Prev Page'),
            'next_text'       => __('Next Page &raquo;')
        ) );
        ?>
    </div>
<?php endif; ?>
</div>
<?php get_footer() ?>