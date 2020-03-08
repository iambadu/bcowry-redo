<?php get_header()?>

<?php
while ( have_posts() ) :
    the_post();
?>
<?php the_post_thumbnail('port-main', 'class=w-full')?>
    <div class="mx-auto container py-10">
        <div class="mx-auto xl:w-10/12 article">
            <h1 class="text-center py-4 md:pt-10 font-medium text-2xl md:text-4xl"><?php the_title() ?></h1>
            <?php the_content()?>
        </div>
    </div>
    
    <?php
endwhile; // End of the loop.
?>

<?php get_footer()?>