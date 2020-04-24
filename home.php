<?php get_header()?>

<!-- INTRO -->
<section class="bg-gray-100">
  <section class="wow fadeInUp items-center px-6 py-8 lg:flex text-gray-800 bg-gray-100 container mx-auto">
    <div class="w-3/4 pt-4 lg:order-2 mx-auto md:w-5/12">
      <img class=" object-cover mx-auto lg:w-9/12 xl:w-8/12 sm:w-3/4 md:w-full w-10/12"
        src="<?php echo get_template_directory_uri()?>/img/hero2.png" alt="" />
    </div>
    <div class="xl:order-1 pt-8 w-full lg:w-7/12">
      <h1
        class="md:text-left sm:text-center lg:text-4xl xl:text-5xl text-3xl tracking-tight font-light leading-tight text-gray-800">
        We are the design agency for those
        <span class=" font-normal text-red-600">who dare to be better</span>
      </h1>
      <p class="mt-4 leading-relaxed font-normal text-base md:text-lg text-gray-800">
        We never do regular, regular is mediocre and boring. We know you
        want something different, something better and something worthwhile.
        That is exactly where we fit, we do the daring and the bold. We are
        coders, strategists and designers who are obessessed with making
        your brand grow.
      </p>
      <a class="hover:bg-red-800 text-white text-base shadow rounded inline-block px-6 py-3 mt-4 uppercase font-bold bg-red-600"
        href="#">Learn
        more</a>
    </div>
  </section>

  <!--ABT US - STRATEGY -->
  <section class="py-10 text-gray-800 bg-white wow fadeInUp">
    <div class="container mx-auto">
      <div class="mx-auto lg:w-10/12">
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2">
            <img class=" mx-auto md:m-0 md:float-right w-full sm:rounded-lg"
              src="<?php echo get_template_directory_uri()?>/img/strategyvd.png" alt="" />
          </div>
          <div class="py-6 px-6 self-center w-full md:w-1/2">
            <h3 class=" pb-4 text-2xl md:text-3xl leading-tight font-medium">
              We never throw shots at the air, we work with the bullseye in
              sight.
            </h3>
            <p class="leading-snug">
              We will work diligently with you to fully understand your goals,
              your audience and market as a company or brand before we get to
              work. Yes that is where creativity meets brand strategy. Every pixel and line of code should have only one
              purpose, that is to achieve your goals. We aim at the bullseye everytime.
            </p>
            <a class="text-white text-sm shadow rounded inline-block px-6 py-2 mt-4 uppercase font-bold bg-red-600"
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
 wp_reset_postdata();
 ?>

      <a class="hover:bg-red-800 text-white text-base shadow rounded inline-block mx-auto px-8 py-3 my-6 uppercase font-bold bg-red-600"
        href="<?php echo esc_url( home_url( '/work' ) ); ?>">see recent work</a>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <div class="wow fadeInUp bg-blue-900 px-2 pb-6 md:px-4">
    <section class=" container mx-auto">
      <p class="text-blue-100 font-semibold text-center pt-10 pb-4 uppercase text-xl md:text-2xl">What Clients Are Saying</p>
      <div class=" flex flex-wrap overflow-hidden">
        <div class="w-full w-1/2 md:w-1/2">
          <div class="text-gray-700 p-2 md:p-4 rounded-lg bg-white shadow mb-10 mt-8 mx-2 md:mx-6">
          <p class="pt-3 text-sm md:text-base text-center font-bold uppercase tracking-wider">
              Yaw Safo Marfo
            </p>
            <span class="text-xs md:text-sm font-semibold px-2 block text-center tracking-wide uppercase">MD, Psyche Evolutions</span>
            <p class=" text-gray-800 text-center p-2 md:p-3 italic font-medium text-base md:text-lg ">
             I had the pleasure of working with Brandcowry. Not only does Brandcowry have a great eye for design, they are very accommodating, patient and gives helpful feedback. The logo is exactly what I envisioned! I would not hesitate to work with or recommend Brandcowry to anyone in need of great service!”.
            </p>
            
          </div>
        </div>
        <div class="w-full w-1/2 md:w-1/2">
          <div class="text-gray-700 p-2 md:p-4 rounded-lg bg-white shadow mb-10 mt-8 mx-2 md:mx-6">
           <p class="pt-3 text-sm md:text-base text-center font-bold uppercase tracking-wider">
              Chief Obosu Mohammed
            </p>
            <span class="text-xs md:text-sm font-semibold px-2 block text-center tracking-wide uppercase">CEO Comlife
              Ghana Ltd</span>
            <p class=" text-gray-800 text-center p-2 md:p-3 italic font-medium text-base md:text-lg ">
              The team at Brandcowry were very professional and are really good at what they do. I was really impressed with the sense of professionalism and prompt feedback from the team. I will definitely recommend Brandcowry to anyone out there in search of a great branding and customer service.
           
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
</section>
</div>

<?php get_footer()?>