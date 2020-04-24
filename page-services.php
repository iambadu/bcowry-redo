<?php get_header() ?>
<section class="py-6 mb-8">
      <div class="text-center container">
        <h1 class="text-3xl text-red-600 lg:text-4xl text-black font-medium">
          Services
        </h1>
        <p class="tracking-wider text-gray-700 uppercase font-bold text-lg">What We Do</p>
      </div>
</section>
<section>
    <div class="mx-auto container">
        <div class="py-10 mx-auto px-6 w-full md:w-3/4 ">
            <h2 class="  leading-snug text-lg sm:text-xl md:mb-2 text-2xl lg:text-3xl">
                We create effective and efficient brand identities, powerful strategies and memorable experiences to connect brands and organizations with their customers and audience.
            </h2>
        </div>
    </div>
</section>
<section class="mt-6">
    <div class="mx-auto container">
        <div class="mx-auto lg:w-10/12 w-full">
            <div class="wow fadeInUp mb-8 flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <img class="mx-auto md:m-0 md:float-right w-full sm:rounded-lg shadow-lg" src="<?php echo get_template_directory_uri()?>/img/positioning.jpg"
                        alt="" />
                </div>
                <div class="py-6 px-6 self-center w-full md:w-1/2">
                    <h3 class=" mb-2 text-2xl lg:text-3xl font-semibold">Strategy</h3>
                    <p class="text-base md:text-lg leading-snug">
                        We work with companies and organisations of all sizes to help clarify their purpose, identify their voice and also define their target market and customers. This helps their  brand to effectively achieve their goals whether is make more sales or generate more leads.
                    </p>
                    <a class="  text-sm shadow rounded inline-block px-6 py-2 mt-4 uppercase text-white font-bold bg-red-600"
                        href="<?php echo esc_url( home_url( '/services/strategy' ) ); ?>">Learn more</a>
                </div>
            </div>
            <div class="wow fadeInUp mb-8 flex flex-wrap">
                <div class="order-2 md:order-1 py-6 px-6 self-center w-full md:w-1/2">
                    <h3 class=" mb-2 text-2xl lg:text-3xl font-semibold">Branding</h3>
                    <p class="text-base md:text-lg leading-snug">
                        We build brands that inspire and resonates with your target audience. We help provide battle tested brand identities that will stand the test of time. We build your brand with effective brand strategies that creates a comprehensive and consistent experience that your customers will love. 
                    <a class="  text-sm shadow rounded inline-block px-6 py-2 mt-4 uppercase text-white font-bold bg-red-600"
                        href="<?php echo esc_url( home_url( '/services/branding' ) ); ?>">Learn more</a>
                </div>
                <div class="order-1 md:order-2 w-full md:w-1/2">
                    <img class="mx-auto md:m-0 md:float-right w-full sm:rounded-lg shadow-lg" src="<?php echo get_template_directory_uri()?>/img/branding.jpg"
                        alt="" />
                </div>
            </div>
            <div class="wow fadeInUp mb-8 flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <img class="mx-auto md:m-0 md:float-right w-full sm:rounded-lg shadow-lg" src="<?php echo get_template_directory_uri()?>/img/digital.jpg"
                        alt="" />
                </div>
                <div class=" py-6 px-6 self-center w-full md:w-1/2">
                    <h3 class=" mb-2 text-2xl lg:text-3xl font-semibold">Digital</h3>
                    <p class="text-base md:text-lg leading-snug">
                        It can be a big nightmare for a brand to stand out amidst the noise and confusion in the connected world. We serve as the middlemen between your audience and the information they need. We do this by building intuitive and user focused web interfaces that engage, delight and communicate clearly on all devices.
                    </p>
                    <a class="text-sm shadow rounded inline-block px-6 py-2 mt-4 uppercase text-white font-bold bg-red-600"
                        href="<?php echo esc_url( home_url( '/services/digital' ) ); ?>">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>