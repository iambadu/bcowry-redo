<?php get_header()?>

<!-- INTRO -->
    <section class="bg-gray-100">
        <section class=" items-center px-6 py-8 lg:flex text-gray-800 bg-gray-100 container mx-auto">
        <div class="w-3/4 pt-4 lg:order-2 mx-auto md:w-5/12">
            <img class=" object-cover mx-auto lg:w-9/12 xl:w-8/12 sm:w-3/4 md:w-full w-10/12" src="<?php echo get_template_directory_uri()?>/img/hero2.png" alt="" />
        </div>
        <div class="xl:order-1 pt-8 w-full lg:w-7/12">
            <h1
            class="md:text-left sm:text-center xl:text-5xl text-4xl tracking-tight font-light leading-tight text-gray-800">
            We are the design agency for those
            <span class=" font-normal text-red-600">who dare to be better</span>
            </h1>
            <p class="mt-4 leading-relaxed font-normal text-lg xl:text-lg text-gray-800">
            We never do regular, regular is mediocre and boring. We know you
            want something different, something better and something worthwhile.
            That is exactly where we fit, we do the daring and the bold. We are
            coders, strategists and designers who are obessessed with making
            your brand grow.
            </p>
            <a class="  text-base shadow rounded inline-block px-6 py-3 mt-4 uppercase font-bold bg-red-600" href="#">Learn
            more</a>
        </div>
    </section>

<!--ABT US - STRATEGY -->
  <section class="py-6 bg-gray-800 text-white">
    <div class="container mx-auto">
      <div class="mx-auto lg:w-10/12">
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2">
            <img class=" mx-auto md:m-0 md:float-right w-full sm:rounded-lg shadow-lg" src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="" />
          </div>
          <div class="py-6 px-6 self-center w-full md:w-1/2">
            <h3 class=" pb-4 text-2xl md:text-3xl leading-tight font-medium">
              We never throw shots at the air, we work with the bullseye in
              sight.
            </h3>
            <p class="leading-snug">
              We will work diligently with you to fully understand your goals,
              your audience and market as a company or brand before we get to
              work. Yes that is where creativity meets brand strategy. Every pixel and line of code should have only one purpose, that is to achieve your goals. We aim at the bullseye everytime.
            </p>
            <a class="  text-sm shadow rounded inline-block px-6 py-2 mt-4 uppercase font-bold bg-red-600"
              href="#">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- PORTFOLIO SECTION -->
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
          <span class="absolute bg-black opacity-50 inset-0"></span>
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
      <a class="hover:bg-gray-800 hover:text-white text-gray-800 my-6 mx-auto text-center sm:w-1/2 lg:w-1/4 rounded-md font-semibold text-lg  px-6 py-2 border-solid block border-gray-800 border-4 bg-transparent uppercase"
        href="">see recent work</a>
    </div>
  </section>

<!-- TESTIMONIALS -->
    <div class="bg-blue-900 px-2 md:px-4">
      <section class=" container mx-auto">
        <div class=" flex flex-wrap overflow-hidden">
          <div class="w-full w-1/2 md:w-1/2">
            <div class="text-gray-700 p-2 md:p-4 rounded-lg bg-white shadow mb-10 mt-16 mx-2 md:mx-6">
              <img class="-mt-12 block mx-auto h-24 w-24 rounded-full" src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="" />
              <p class=" text-gray-800 text-center p-2 md:p-4 italic font-medium text-base md:text-lg ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Accusantium nesciunt aliquam corporis nobis voluptatibus, facere
                voluptatum animi, a quod, ipsum laudantium? Id necessitatibus
                explicabo placeat sed maiores ipsa accusamus laborum!
              </p>
              <p class="pt-3 text-sm md:text-base text-center font-bold uppercase tracking-wider">
                Chief Joseph Olugbemiga
              </p>
              <span class="text-xs md:text-sm font-semibold px-2 block text-center tracking-wide uppercase">CEO Comlife
                Ghana Ltd</span>
            </div>
          </div>
          <div class="w-full w-1/2 md:w-1/2">
            <div class="text-gray-700 p-2 md:p-4 rounded-lg bg-white shadow mb-10 mt-16 mx-2 md:mx-6">
              <img class="-mt-12 block mx-auto h-24 w-24 rounded-full" src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="" />
              <p class=" text-gray-800 text-center p-2 md:p-4 italic font-medium text-base md:text-lg ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Accusantium nesciunt aliquam corporis nobis voluptatibus, facere
                voluptatum animi, a quod, ipsum laudantium? Id necessitatibus
                explicabo placeat sed maiores ipsa accusamus laborum!
              </p>
              <p class="pt-3 text-sm md:text-base text-center font-bold uppercase tracking-wider">
                Chief Joseph Olugbemiga
              </p>
              <span class="text-xs md:text-sm font-semibold px-2 block text-center tracking-wide uppercase">CEO Comlife
                Ghana Ltd</span>
            </div>
          </div>
        </div>
      </section>
    </div>

 <!-- BLOG SECTION -->
  <div class="bg-gray-400 px-2 py-10 md:px-4">
    <section class="mx-auto container">
      <div class=" flex flex-wrap overflow-hidden">
         <?php
 // The Query
 $posts = new WP_Query(array(
     'post_type' => 'post',
     'posts_per_page' => '3',
 ));

 // The Loop
 while ( $posts->have_posts() ) :
     $posts->the_post();
?>
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="text-gray-800 p-3 md:px-6 rounded-lg bg-white shadow mb-6 mt-24 mx-2">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('port-thumb', 'class=shadow-lg rounded-lg -mt-20 block mx-auto w-full')?>
                <h2 class="leading-tight py-3 text-gray-800 font-bold text-xl md:text-2xl ">
              <?php the_title()?>
            </h2>
              </a>
          
            <div class="my-2 flex items-center">
            <?php echo get_avatar( get_the_author_email(), '40', $default, $alt, array( 'class' => array( 'rounded-full', 'mr-4' ))); ?>
              <div class="text-sm">
                <p class="font-semibold text-gray-900 leading-none">
                  <?php echo get_the_author(); ?>
                </p>
                <p class="text-gray-600"><?php the_date() ?></p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="text-gray-800 p-3 md:px-6 rounded-lg bg-white shadow mb-6 mt-24 mx-2">
            <img class="shadow-lg rounded-lg -mt-20 block mx-auto w-11/12 " src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="" />
            <h2 class="leading-tight py-3 text-gray-800 font-bold text-xl md:text-2xl ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
            <div class="my-2 flex items-center">
              <img class="w-10 h-10 rounded-full mr-4" src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="Avatar of Kwabena Badu" />
              <div class="text-sm">
                <p class="font-semibold text-gray-900 leading-none">
                  Kwabena Badu
                </p>
                <p class="text-gray-600">Aug 18</p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3">
          <div class="text-gray-800 p-3 md:px-6 rounded-lg bg-white shadow mb-6 mt-24 mx-2">
            <img class="shadow-lg rounded-lg -mt-20 block mx-auto w-11/12 " src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="" />
            <h2 class="leading-tight py-3 text-gray-800 font-bold text-xl md:text-2xl ">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
            <div class="my-2 flex items-center">
              <img class="w-10 h-10 rounded-full mr-4" src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="Avatar of Kwabena Badu" />
              <div class="text-sm">
                <p class="font-semibold text-gray-900 leading-none">
                  Kwabena Badu
                </p>
                <p class="text-gray-600">Aug 18</p>
              </div>
            </div>
          </div>
        </div> -->

            <?php
endwhile;
 wp_reset_postdata();
 ?>

      </div>
    </section>
  </div>

<?php get_footer()?>

