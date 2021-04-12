<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcowry
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="tracking-normal font-bold leading-tight text-3xl md:text-5xl my-4">', '</h1>' );
		else :
			the_title( '<h2 class="tracking-normal font-bold leading-tight text-3xl md:text-5xl mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		
		  <div class="my-2 text-xs sm:text-sm flex items-center">
            <?php echo get_avatar( get_the_author_email(), '40', '', '', array( 'class' => array( 'rounded-full', 'mr-4' ))); ?>
              <div class="">
                <p class="font-semibold text-gray-900 leading-none">
                  <?php echo get_the_author(); ?>
                </p>
                <p class="text-gray-700"><time class="entry-date published" datetime="<?php echo get_the_date( DATE_W3C )?>"><?php echo get_the_date()?></time></p>			
			  </div>
			 <?php if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) { ?>
				<div class="ml-2">
					<p class="font-semibold text-gray-900 leading-none">
					Edited on:
					</p>
					<p class="font-normal text-gray-700"><time class="entry-date published" datetime="<?php echo  get_the_modified_date( DATE_W3C )?>"><?php echo  get_the_modified_date()?></time></p>
				</div>
			<?php } ?>	
			</div>	
			
			
	</header>

	<?php bcowry_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bcowry' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bcowry_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
