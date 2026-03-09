<section class="stp-30 flex justify-center items-center max-md:px-4 relative">
  <div
    class="size-[100vw] lg:size-[400px] rounded-full absolute top-0 left-0 blur-[400px]"
    style="background: rgba(249, 233, 52, 0.08)"
  ></div>
  <div
    class="max-sm:px-6 sm:max-xl:px-10 xl:w-[1296px] relative flex justify-center items-center flex-col z-10"
  >
    <div class="absolute inset-0 h-full w-full">
      <img src="{{ get_template_directory_uri() }}/public/images/contact-bg.svg" alt="" class="h-full w-full" />
    </div>
    <div
      class="flex justify-center items-center flex-col w-full relative z-20 stp-30"
    >
      <div
        class="flex justify-start items-center gap-3"
        data-aos="fade-up"
        data-aos-duration="700"
      >
        <p class="text-lg font-medium text-g300 uppercase">CONTACT / COLLABORATE</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2
        data-aos="fade-down"
        data-aos-duration="700"
        class="display-3 uppercase pt-4"
      >
        Let's Connect
      </h2>
    </div>
    <div class="stp-15 sbp-15 relative z-20 max-w-[856px] max-xl:px-3 text-base w-full contact-form-wrapper">
      {!! do_shortcode('[contact-form-7 id="12" title="Contact form 1"]') !!}
    </div>
  </div>
</section>
