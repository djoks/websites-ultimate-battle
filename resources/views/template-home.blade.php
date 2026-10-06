{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  {{-- Glow blur div --}}
  <div
    class="size-[100vw] lg:size-[786px] aspect-square rounded-[786px] blur-[700px] absolute top-0 left-0"
    style="background: rgba(249, 233, 52, 0.08)"
  ></div>

  <!-- Header Top Start -->
  <div
    class="flex justify-center items-center py-2 md:py-4 gap-2 md:gap-4 bg-g900 relative z-30 px-2 text-center"
  >
    <p class="uppercase text-xs sm:text-sm md:text-base">
      {{ \App\cf_get('home_topbar_text') ?: 'COMPETITIVE ESPORTS TOURNAMENT & STREAMING PLATFORM' }}
    </p>
    <div class="h-3 sm:h-4 w-px bg-bg3"></div>
    <a
      href="{{ \App\cf_get('home_topbar_cta_url') ?: '#' }}"
      class="uppercase text-sm sm:text-base md:text-lg font-medium underline text-g300 block text-nowrap"
      >{{ \App\cf_get('home_topbar_cta_text') ?: 'Register for Tournaments' }}</a
    >
  </div>
  <!-- Header Top End -->

  <!-- Header Start -->
  <div class="relative">
    @include('sections.header')
  </div>
  <!-- Mobile Menu Start -->
  @include('sections.mobile-menu')
  <!-- Mobile Menu End -->

  <!-- Banner Section Start -->
  <section
    class="stp-15 relative z-10 pb-14 sm:pb-20 lg:pb-30 xl:pb-40 max-lg:pt-20 pt-[122px]"
  >
    <div class="absolute bottom-0 left-0">
      <img
        src="{{ \App\cf_image_url(\App\cf_get('home_banner_image')) ?: get_template_directory_uri() . '/public/images/home_3_banner_img.webp' }}"
        alt=""
        class="w-[30vw] 3xl:h-[674px]"
      />
    </div>
    <div class="absolute bottom-0 left-0 right-0">
      <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" />
    </div>
    <div
      class="flex justify-start items-center gap-1 sm:gap-4 lg:gap-8 text-2xl text-g300 flex-col absolute bottom-[10%] right-[6%] max-lg:flex-row z-20"
    >
      <a href="{{ get_option('ub_twitter_url') ?: '#' }}" aria-label="Twitter/X">
        <i class="ph ph-x-logo text-[20px] lg:text-[28px]"></i>
      </a>
      <a href="{{ get_option('ub_instagram_url') ?: '#' }}" aria-label="Instagram">
        <i class="ph ph-instagram-logo text-[20px] lg:text-[28px]"></i>
      </a>
      <a href="{{ get_option('ub_discord_url') ?: '#' }}" aria-label="Discord">
        <i class="ph ph-discord-logo text-[20px] lg:text-[28px]"></i>
      </a>
      <a href="{{ get_option('ub_tiktok_url') ?: '#' }}" aria-label="TikTok">
        <i class="ph ph-tiktok-logo text-[20px] lg:text-[28px]"></i>
      </a>
    </div>
    <div class="flex justify-between items-center">
      <p
        class="text-[14vw] md:text-[11vw] font-bold uppercase pl-6 sm:pl-8 xl:pl-24 !leading-none text-nowrap"
        data-aos="fade-down"
      >
        {{ \App\cf_get('home_banner_line1') ?: 'where' }}
      </p>
      @php
        $categories = \App\cf_get('home_banner_categories');
        if (!$categories) {
            $categories = [['text' => 'Tournaments'], ['text' => 'Live Broadcasts'], ['text' => 'Brand Activations'], ['text' => 'Community Events']];
        }
      @endphp
      <div
        class="flex justify-start items-center max-lg:flex-col max-lg:items-start gap-2 lg:gap-[60px] text-base lg:text-xl pr-6 3xl:pr-[20%] max-sm:hidden"
      >
        <div class="flex flex-col gap-2 lg:gap-4">
          @foreach(array_slice($categories, 0, 2) as $cat)
            <p>{{ $cat['text'] }}</p>
          @endforeach
        </div>
        <div class="flex flex-col gap-2 lg:gap-4">
          @foreach(array_slice($categories, 2, 2) as $cat)
            <p>{{ $cat['text'] }}</p>
          @endforeach
        </div>
      </div>
    </div>
    <p
      class="text-[14vw] md:text-[11vw] font-bold uppercase pl-[15%] sm:pl-[20%] !leading-none"
      data-aos="fade-up"
    >
      {{ \App\cf_get('home_banner_line2') ?: 'competition' }}
    </p>
    <p
      class="text-[14vw] md:text-[11vw] font-bold uppercase !leading-none pl-[10%] relative z-10"
      data-aos="fade-down"
    >
      {{ \App\cf_get('home_banner_line3') ?: 'meets' }}
      <span class="text-shadow-1 font-normal text-g300 italic">{{ \App\cf_get('home_banner_accent') ?: 'community' }}</span>
    </p>
  </section>
  <!-- Banner Section End -->

  <!-- About Us Section Start -->
  <section class="py-12 sm:py-20 xl:py-28 3xl:py-40 relative">
    <img
      src="{{ \App\cf_image_url(\App\cf_get('home_about_image_left')) ?: get_template_directory_uri() . '/public/images/home_3_about_us_left.webp' }}"
      alt=""
      class="absolute bottom-0 left-0 w-[37vw]"
      data-aos="fade-down"
    />
    <img
      src="{{ \App\cf_image_url(\App\cf_get('home_about_image_right')) ?: get_template_directory_uri() . '/public/images/home_3_about_us_right.webp' }}"
      alt=""
      class="absolute bottom-0 right-0 w-[28vw]"
      data-aos="fade-up"
    />
    <div class="flex justify-center items-center flex-col text-center">
      <div class="flex justify-start items-center gap-3 pb-4">
        <p class="text-lg font-medium text-g300">{{ \App\cf_get('home_about_label') ?: 'About Ultimate Battle' }}</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <p
        class="max-w-[80%] md:max-w-[60%] lg:max-w-[80%] 2xl:max-w-[1200px] max-sm:text-2xl max-sm:font-semibold sm:display-3"
        data-aos="zoom-in"
      >
        {{ \App\cf_get('home_about_text') ?: 'A competitive esports tournament and broadcast platform designed to connect gamers, fans, and brands through high-impact gaming experiences.' }}
      </p>
    </div>
  </section>
  <!-- About Us Section End -->

  <!-- Our Expertise Section Start -->
  <section class="flex justify-center items-center relative z-20">
    <div
      class="max-3xl:mx-6 3xl:max-w-[1800px] grid grid-cols-12 w-full bg-bg1 border border-bg2 rounded-2xl"
    >
      <div
        class="col-span-1 flex flex-col justify-between items-center bg-bg1 border-r border-bg2 text-3xl text-g300 overflow-hidden rounded-l-2xl"
      >
        <div
          class="flex justify-center items-center flex-1 border-b border-bg2 w-full hover:bg-g300 duration-300 hover:text-white cursor-pointer ara-next"
        >
          <i class="ph ph-caret-right"></i>
        </div>
        <div
          class="flex justify-center items-center flex-1 w-full hover:bg-g300 duration-300 hover:text-white cursor-pointer ara-prev"
        >
          <i class="ph ph-caret-left"></i>
        </div>
      </div>
      @php
        $slides = \App\cf_get('home_expertise_slides');
        if (!$slides) {
            $slides = [
                ['label' => 'TOURNAMENTS', 'title' => 'Tournament Organization', 'subtitle' => 'Competitive esports tournaments that bring players together', 'description' => 'We design and manage competitive esports tournaments across popular gaming titles. From community competitions to multi-week championship formats, Ultimate Battle delivers engaging events that showcase talent.', 'button_text' => 'Learn More', 'button_url' => home_url('/tournaments'), 'image' => get_template_directory_uri() . '/public/images/our-expertise-slider-img-1.webp'],
                ['label' => 'BROADCASTS', 'title' => 'Live Broadcast Production', 'subtitle' => 'High-quality livestream broadcasts and esports content', 'description' => 'Ultimate Battle produces high-quality livestream broadcasts covering matches, highlights, commentary, and esports shows. Our production capabilities allow tournaments to reach audiences across multiple digital platforms.', 'button_text' => 'Learn More', 'button_url' => home_url('/broadcasts'), 'image' => get_template_directory_uri() . '/public/images/our-expertise-slider-img-2.webp'],
                ['label' => 'PARTNERSHIPS', 'title' => 'Brand Gaming Activations', 'subtitle' => 'Connect brands with engaged digital audiences through esports', 'description' => 'Ultimate Battle enables brands to engage digital-native audiences through gaming experiences, tournaments, and esports content. Create authentic connections with gaming communities through custom activations.', 'button_text' => 'Learn More', 'button_url' => home_url('/partnerships'), 'image' => get_template_directory_uri() . '/public/images/our-expertise-slider-img-3.webp'],
            ];
        }
      @endphp
      <div class="col-span-11">
        <div class="swiper our-expertise overflow-hidden">
          <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide">
              <div class="flex justify-between items-center gap-6 py-8 xl:py-20 px-6 3xl:px-12 max-lg:flex-col max-lg:items-start">
                <div class="lg:w-1/2">
                  <div class="flex justify-start items-center gap-3">
                    <p class="text-lg font-medium text-g300">{{ $slide['label'] }}</p>
                    <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
                  </div>
                  <h2 class="max-[400px]:text-2xl max-[400px]:font-bold min-[400px]:display-3 uppercase pt-4">{!! nl2br(e($slide['title'])) !!}</h2>
                  <h4 class="heading-4 pt-6 lg:pt-10 max-w-[500px]">{{ $slide['subtitle'] }}</h4>
                  <p class="pt-4 max-w-[500px] max-lg:text-sm">{{ $slide['description'] }}</p>
                  <div class="flex justify-start items-start pt-6">
                    <a href="{{ $slide['button_url'] ?: '#' }}" class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center">
                      <span class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm uppercase"><span>{{ $slide['button_text'] ?: 'Learn More' }}</span></span>
                      @include('partials.custom-btn-illus')
                    </a>
                  </div>
                </div>
                <div class="flex w-full justify-end items-end max-lg:justify-center max-lg:items-center">
                  <div class="rounded-2xl overflow-hidden">
                    <img src="{{ \App\cf_image_url($slide['image'] ?? '') }}" alt="" />
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Expertise Section End -->

  <!-- Platform Showcase Section Start -->
  <section class="stp-30">
    <div
      class="flex justify-center items-center relative flex-col max-lg:mx-6"
    >
      <div
        class="lg:h-[387px] w-[70vw] lg:w-[636px] rounded-xl sm:rounded-2xl lg:rounded-3xl border border-white overflow-hidden relative"
      >
        <div class="bg-black/60 absolute inset-0"></div>
        <img
          src="{{ \App\cf_image_url(\App\cf_get('home_showcase_image')) ?: get_template_directory_uri() . '/public/images/game-bg.webp' }}"
          alt=""
          class="h-full w-full"
        />
      </div>
      <div class="absolute top-[25%]">
        <p
          class="text-[11vw] sm:text-[12vw] lg:text-[100px] xl:text-[140px] font-bold uppercase"
        >
          {{ \App\cf_get('home_showcase_text') ?: 'Ultimate Battle' }}
        </p>
      </div>
    </div>
  </section>
  <!-- Platform Showcase Section End -->

  <!-- What We Do Section Start -->
  @php
    $wwd_items = \App\cf_get('home_whatwedo_items');
    if (!$wwd_items) {
        $wwd_items = [
            ['title' => 'Tournament Organization', 'description' => 'Community competitions to championship formats', 'tag' => 'Competitions', 'image' => get_template_directory_uri() . '/public/images/portfolio-hover-img-1.webp'],
            ['title' => 'Live Broadcast Production', 'description' => 'High-quality livestreams, highlights & commentary', 'tag' => 'Broadcasts', 'image' => get_template_directory_uri() . '/public/images/portfolio-hover-img-2.webp'],
            ['title' => 'Community Engagement', 'description' => 'Growing a strong esports community through competition', 'tag' => 'Community', 'image' => get_template_directory_uri() . '/public/images/portfolio-hover-img-3.webp'],
            ['title' => 'Brand Activations', 'description' => 'Gaming experiences & digital audience engagement', 'tag' => 'Partnerships', 'image' => get_template_directory_uri() . '/public/images/portfolio-hover-img-4.webp'],
            ['title' => 'Content Production', 'description' => 'Highlights, talk shows & influencer collaborations', 'tag' => 'Content', 'image' => get_template_directory_uri() . '/public/images/portfolio-hover-img-5.webp'],
        ];
    }
  @endphp
  <section class="stp-30">
    <div class="container">
      <div class="flex justify-center items-center flex-col">
        <div class="flex justify-start items-center gap-3">
          <p class="text-lg font-medium text-g300 uppercase">{{ \App\cf_get('home_whatwedo_label') ?: 'Features' }}</p>
          <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
        </div>
        <h2 class="display-4 uppercase pt-4">{{ \App\cf_get('home_whatwedo_title') ?: 'What We Do' }}</h2>
      </div>
      <div class="flex flex-col stp-15">
        @foreach($wwd_items as $i => $item)
        <div class="max-lg:flex max-lg:flex-col group relative portfolio-item">
          <div class="flex justify-between items-center gap-6 border-y border-g600 p-6 lg:p-10 relative after:absolute after:inset-0 duration-500 after:bg-g300 after:opacity-0 after:invisible after:translate-y-4 group-hover:after:opacity-100 group-hover:after:visible group-hover:after:translate-y-0 after:duration-500 max-sm:flex-col">
            <div class="flex justify-start items-start gap-6 relative z-20">
              <h2 class="heading-2 stroke-text-px group-hover:text-white hover-white">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</h2>
              <div class="flex flex-col gap-3">
                <h2 class="heading-2 group-hover:text-g900">{{ $item['title'] }}</h2>
                <p class="text-g40 group-hover:text-g700">{{ $item['description'] }}</p>
              </div>
            </div>
            <p class="text-g40 group-hover:text-g700 relative z-10">{{ $item['tag'] }}</p>
          </div>
          <img src="{{ \App\cf_image_url($item['image'] ?? '') }}" alt="" class="lg:absolute lg:top-28 lg:left-1/3 max-lg:w-full lg:max-w-[300px] xl:max-w-[400px] z-10 lg:-rotate-12 invisible group-hover:visible opacity-0 group-hover:opacity-100 duration-500 lg:group-hover:top-10 xl:group-hover:top-20 max-lg:h-0 max-lg:group-hover:h-[250px] object-cover" />
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- What We Do Section End -->

  <!-- How It Works Start -->
  @include('partials.how-it-work')
  <!-- How It Works End -->

  <!-- Join the Movement section start -->
  <section class="stp-30 relative">
    <img
      src="{{ get_template_directory_uri() }}/public/images/icon/lets-work-bottom-illus.png"
      alt=""
      class="absolute bottom-0 left-0 z-10 max-md:w-[80px] max-lg:w-[120px]"
    />
    <img
      src="{{ get_template_directory_uri() }}/public/images/icon/lets-work-bottom-illus-2.png"
      alt=""
      class="absolute bottom-0 right-0 z-10 max-md:w-[80px] max-lg:w-[120px]"
    />
    <div class="absolute bottom-0 left-0 right-0">
      <div class="container flex justify-center items-center relative">
        <div class="absolute -left-40 sm:-left-48 bottom-0">
          <img
            src="{{ \App\cf_image_url(\App\cf_get('home_movement_image_left')) ?: get_template_directory_uri() . '/public/images/lets_work_img_1.webp' }}"
            alt=""
            class="max-xl:w-[400px] max-lg:w-[300px] max-[450px]:hidden"
          />
        </div>
        <div class="absolute right-0 xxl:-right-16 bottom-0">
          <img
            src="{{ \App\cf_image_url(\App\cf_get('home_movement_image_right')) ?: get_template_directory_uri() . '/public/images/lets_work_img_2.webp' }}"
            alt=""
            class="max-lg:w-[200px] max-xl:w-[300px] max-md:hidden"
          />
        </div>
        <p
          class="uppercase text-[40px] min-[450px]:text-[60px] sm:text-[80px] lg:text-[100px] xl:text-[140px] font-bold leading-[100%] text-g300 text-center pb-[320px] sm:pb-[280px] xl:pb-30"
        >
          {{ \App\cf_get('home_movement_text') ?: 'JOIN THE MOVEMENT' }}
        </p>
      </div>
    </div>

    <div class="overflow-hidden relative z-30">
      <div class="tags-container relative h-[400px]"></div>
    </div>
  </section>
  <!-- Join the Movement section end -->

  <!-- Text Slider Start -->
  <section class="relative z-20 smooth overflow-hidden max-sm:pt-10 bg-g300">
    <div class="relative">
      <div class="swiper text-slider large-container second">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="swiper text-slider2 second large-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold stroke-text text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold stroke-text text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold stroke-text text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="relative">
      <div class="swiper text-slider large-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
          <div class="swiper-slide">
            <p
              class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none text-g900"
            >
              {{ \App\cf_get('home_textslider_text') ?: 'Ultimate Battle' }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Text Slider End -->

  <!-- FAQ Section Start -->
  @include('partials.faq')
  <!-- FAQ Section End -->

  <!-- contact section start -->
  @include('partials.contact')
  <!-- contact section end -->

  <!-- We Work With Start -->
  @include('partials.we-work-with')
  <!-- We Work With End -->
@endsection
