<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcowry
 */

?>


	 <footer class="bg-gray-800 ">
    <div class="mx-auto footwrap container">
      <div class="items-center md:flex flex-wrap">
        <div class="logo flex justify-center">
          <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="" /></a>
        </div>
        <nav class="footnav mx-auto">
        <?php 
		wp_nav_menu(
			array(
				'theme_location'  => 'footernav',
				'container' => 'ul',
				'menu_class'      => 'sm:flex mx-auto justify-center',
				
			)
		);
	?>
        </nav>
        <div class="flex justify-center">
          <ul class="social">
            <li>
              <a href="#"><img src="<?php echo get_template_directory_uri()?>//img/facebook.svg" alt="" /></a>
            </li>
            <li>
              <a href="#"><img src="<?php echo get_template_directory_uri()?>//img/twitter.svg" alt="" /></a>
            </li>
            <li>
              <a href="#"><img src="<?php echo get_template_directory_uri()?>//img/instagram.svg" alt="" /></a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-sm text-white text-center">&copy; 2020 Brandcowry. All rights reserved</p>
    </div>
    
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
