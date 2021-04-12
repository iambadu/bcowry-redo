<?php get_header()?>

<?php
while ( have_posts() ) :
    the_post();
?>
<?php the_post_thumbnail('port-main', 'class=w-full')?>
    <div class="mx-auto container py-10">
        <div class="px-3 mx-auto xl:w-10/12 article">
            <h1 class="text-center md:pt-10 font-medium text-2xl mb-2 md:text-4xl"><?php the_title() ?></h1>
            <div class="text-center uppercase font-medium text-gray-600 text-base md:text-lg"><?php the_field('work_type') ?></div>
            <div class="my-4  text-gray-700 port-desc mx-auto w-full lg:w-10/12 text-base md:text-xl"><?php the_field('work_description')?></div>
            <div class="mt-8 mb-4">
                <?php the_content()?>
            </div>
            
        </div>
    </div>
    
    <?php
endwhile; // End of the loop.
?>

<?php get_footer()?>