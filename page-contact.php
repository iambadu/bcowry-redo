<?php get_header()?>
<div class="text-gray-900 bg-gray-200">
  <div class="p-4 container mx-auto">
      <h2 class="pt-6 font-medium text-3xl lg:text-4xl text-center">Let's Work Together</h2>
      <p class="my-4 text-center text-lg font-normal">Let us hear from you, whether you want start a project or say hello</p>
      <div class="wow fadeInUp container w-full md:w-10/12 lg:w-7/12 mx-auto">
      <?php $ninja = '[ninja_form id=3]' ?> 
        <?php echo do_shortcode($ninja)  ?>
        
      </div>
  </div>
</div>
<div class="bg-white">
 <div class="p-8 text-center container mx-auto">
    <h2 class="font-bold text-xl lg:text-3xl">New Business</h2>
    <p class="underline font-medium pt-4 text-lg text-red-700"><a href="mailto:work@brandcowry.com">work@brandcowry.com</a></p>
 </div>
</div>
<?php get_footer()?>