<footer class="stp-30 relative overflow-hidden">
  <div
    class="size-[240px] rounded-full absolute blur-[300px] max-sm:hidden bottom-10 left-0 xl:-left-10"
    style="background: rgba(249, 233, 52, 0.08)"
  ></div>
  <div
    class="size-[240px] rounded-full absolute blur-[300px] max-sm:hidden bottom-10 right-0 xl:-right-10"
    style="background: rgba(249, 233, 52, 0.08)"
  ></div>
  <div class="lg:large-container">
    <img src="{{ get_template_directory_uri() }}/public/images/icon/footer-top-illus.png" alt="" class="" />
  </div>
  <div class="large-container relative max-lg:px-6 z-10">
    <div
      class="flex justify-between items-center relative z-20 lg:px-20 pt-6 lg:pt-8 gap-6 max-lg:text-center"
    >
      <p class="font-semibold max-lg:text-sm">{{ get_option('ub_footer_tagline_left') ?: 'Esports Tournament Platform' }}</p>
      <h4 class="heading-4 uppercase">{{ get_option('ub_footer_brand') ?: 'Ultimate Battle' }}</h4>
      <p class="font-semibold max-lg:text-sm">{{ get_option('ub_footer_tagline_right') ?: 'PlayProvince Esports' }}</p>
    </div>
  </div>

  <div
    class="flex justify-center items-center flex-col stp-30 md:px-20 relative z-10"
  >
    <div class="flex justify-center items-center flex-col">
      <div class="flex justify-start items-center gap-3">
        <p class="sm:text-lg font-medium text-g300 uppercase">
          {{ get_option('ub_footer_cta_label') ?: 'READY TO LEVEL UP?' }}
        </p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2
        class="uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-center lg:!leading-[100%] pb-6"
        data-aos="zoom-in"
        data-aos-duration="1000"
      >
        {!! get_option('ub_footer_cta_heading') ? nl2br(e(get_option('ub_footer_cta_heading'))) : 'GET <br />STARTED' !!}
      </h2>
      <div
        class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center"
      >
        <img
          src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-1.svg"
          alt=""
          class="absolute top-0 left-0 bottom-0 object-cover rotate-180 h-10 sm:h-[50px] lg:h-[62px]"
        />
        <a
          href="#"
          class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"
          ><span>{{ get_option('ub_footer_cta_button_text') ?: 'PARTNER WITH US' }}</span>
        </a>

        <img
          src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-1.svg"
          alt=""
          class="-ml-px absolute top-0 right-0 bottom-0 h-10 sm:h-[50px] lg:h-[62px]"
        />
        <div
          class="absolute top-1 sm:top-2 left-[3px] sm:left-2 h-full flex justify-between w-full items-center group-hover:top-0 group-hover:left-0 duration-300"
        >
          <img
            src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-2.svg"
            alt=""
            class="rotate-180 h-10 sm:h-[50px] lg:h-[62px]"
          />
          <div
            class="w-full border-y sm:border-g300 border-g300/60 h-full"
          ></div>
          <img
            src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-2.svg"
            alt=""
            class="-mr-px h-10 sm:h-[50px] lg:h-[62px]"
          />
        </div>
      </div>
    </div>
  </div>

  <div
    class="flex justify-between items-center lg:px-20 stp-30 sbp-15 gap-6 sm:gap-6 text-center max-md:flex-col relative z-10"
  >
    <p class="font-semibold max-lg:text-sm uppercase">&copy; {{ get_option('ub_footer_copyright') ?: 'PlayProvince Esports' }}</p>
    <ul
      class="flex justify-center items-center uppercase font-semibold gap-2 sm:gap-4 lg:gap-8 max-[350px]:text-xs max-lg:text-sm"
    >
      <li class="hover:text-g300 duration-300">
        <a href="{{ get_option('ub_twitter_url') ?: '#' }}">Twitter/X</a>
      </li>
      <li><a href="{{ get_option('ub_instagram_url') ?: '#' }}" class="hover:text-g300 duration-300">Instagram</a></li>
      <li><a href="{{ get_option('ub_discord_url') ?: '#' }}" class="hover:text-g300 duration-300">Discord</a></li>
      <li><a href="{{ get_option('ub_tiktok_url') ?: '#' }}" class="hover:text-g300 duration-300">TikTok</a></li>
      <li><a href="{{ get_option('ub_youtube_url') ?: '#' }}" class="hover:text-g300 duration-300">YouTube</a></li>
    </ul>
    <p class="font-semibold max-lg:text-sm">
      <a href="{{ home_url('/terms') }}" class="hover:text-g300 duration-300">Terms</a> |
      <a href="{{ home_url('/faq') }}" class="hover:text-g300 duration-300">FAQ</a>
    </p>
  </div>
</footer>
