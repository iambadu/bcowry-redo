<?php get_header()?>

<?php
while ( have_posts() ) :
    the_post();
?>

    <div class="mx-auto container">
        <div class="mx-auto xl:w-10/12 article">
            <h1 class="font-semibold text-2xl md:text-4xl"><?php the_title() ?></h1>
            <?php the_content()?>
        </div>
    </div>
    
    <?php
endwhile; // End of the loop.
?>

<?php get_footer()?>