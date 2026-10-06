{{--
  Template Name: Partnerships
--}}

@extends('layouts.app')

@section('content')
  <div class="size-[100vw] lg:size-[786px] rounded-full absolute top-0 left-0 blur-[700px]" style="background: rgba(249, 233, 52, 0.08)"></div>

  <div class="relative">
    <img src="{{ get_template_directory_uri() }}/public/images/bradcrumb-bg.png" alt="" class="absolute top-0 left-0 right-0 h-full w-full object-cover" />
    @include('sections.header')
    @include('sections.mobile-menu')
    <section class="max-lg:pt-20 pt-[92px]">
      <div class="relative z-10 py-12 lg:py-20">
        <div class="flex justify-center items-center flex-col gap-3">
          <p class="display-4 uppercase">Partnerships</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none"><a href="{{ home_url('/') }}">Home</a></li>
            <li class="font-medium text-2xl !leading-none"><i class="ph ph-caret-double-right"></i></li>
            <li class="font-medium text-g300 !leading-none">Partnerships</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  @php
    $about_title = \App\cf_get('part_about_title') ?: 'About Brand Partnerships';
    $about_text = \App\cf_get('part_about_text');
    if (!$about_text) {
        $about_text = '<p>Ultimate Battle offers brands a unique opportunity to connect with engaged digital audiences through esports. Through esports activations, brands can create authentic connections with gaming communities.</p><p>Brands working with Ultimate Battle benefit from access to youth-driven digital audiences, authentic engagement within gaming culture, interactive brand activations, high visibility through livestream broadcasts, and content distribution across multiple digital platforms.</p>';
    }

    $opportunities = \App\cf_get('part_opportunities');
    if (!$opportunities) {
        $opportunities = [
            ['text' => 'Tournament title sponsorship'],
            ['text' => 'Brand integration within livestream broadcasts'],
            ['text' => 'Influencer campaigns & collaborations'],
            ['text' => 'Community engagement challenges'],
            ['text' => 'Digital marketing collaborations'],
        ];
    }
  @endphp

  <section class="stp-15">
    <div class="container grid grid-cols-12 gap-6">
      <div class="col-span-12 lg:col-span-8 xl:pr-14">
        <ul class="flex justify-start items-center gap-8 heading-4 text-base sm:text-xl lg:text-2xl uppercase pb-2">
          <li class="border-b-2 border-g300">Overview</li>
          <li class="">Features</li>
        </ul>
        @php
          $slider_images = \App\cf_get('part_slider_images');
          if (!$slider_images) {
              $slider_images = [
                  ['image' => get_template_directory_uri() . '/public/images/service-details-slider-img1.webp'],
                  ['image' => get_template_directory_uri() . '/public/images/service-details-slider-img2.webp'],
                  ['image' => get_template_directory_uri() . '/public/images/service-details-slider-img3.webp'],
              ];
          }
        @endphp
        <div class="pt-6 lg:pt-10">
          <div class="swiper service-details2">
            <div class="swiper-wrapper">
              @foreach($slider_images as $slide)
              <div class="swiper-slide">
                <div class="masked-content-five h-[300px] sm:h-[428px] w-full relative">
                  <img src="{{ \App\cf_image_url($slide['image'] ?? '') }}" alt="" class="h-full w-full object-cover" />
                  <img src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg" alt="" class="absolute inset-0 h-full w-full" />
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="swiper service-details pt-6">
            <div class="swiper-wrapper">
              @foreach($slider_images as $slide)
              <div class="swiper-slide">
                <div class="masked-content-five h-[80px] min-[500px]:h-[100px] md:h-[172px] w-full relative">
                  <img src="{{ \App\cf_image_url($slide['image'] ?? '') }}" alt="" class="h-full w-full object-cover" />
                  <img src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg" alt="" class="absolute inset-0 h-full w-full" />
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="flex flex-col gap-4 pt-6 lg:pt-10">
          <h3 class="heading-3 uppercase">{{ $about_title }}</h3>
          <div class="text-sm sm:text-base lg:text-lg text-g40">{!! $about_text !!}</div>
        </div>
        <div class="pt-6 lg:pt-10">
          <h4 class="heading-4 uppercase">Partnership Opportunities:</h4>
          <ul class="pt-4 flex flex-col gap-4">
            @foreach($opportunities as $opp)
            <li class="flex justify-start items-center gap-3">
              <div class="size-2 rounded-full bg-g300"></div>
              <p>{{ $opp['text'] }}</p>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-4">
        <div class="grid grid-cols-12 gap-6 sticky top-6">
          <div class="bg-bg1 rounded-2xl p-8 flex flex-col gap-6 w-full col-span-12 sm:col-span-6 lg:col-span-12">
            <div class="flex justify-start items-start gap-2 pb-6 border-b border-bg5">
              <div class="w-0.5 h-5 bg-g300"></div>
              <h5 class="uppercase heading-5 !leading-none">CONTACT</h5>
            </div>
            <p>{{ \App\cf_get('part_contact_email') ?: 'partnerships@ultimatebattle.co' }}</p>
          </div>
          <div class="bg-bg1 rounded-2xl p-8 flex flex-col gap-6 w-full col-span-12 sm:col-span-6 lg:col-span-12">
            <div class="flex justify-start items-start gap-2 pb-6 border-b border-bg5">
              <div class="w-0.5 h-5 bg-g300"></div>
              <h5 class="uppercase heading-5 !leading-none">PLATFORMS</h5>
            </div>
            <p>{{ \App\cf_get('part_platforms') ?: 'YouTube, Twitch, Facebook, TikTok' }}</p>
          </div>
          <div class="bg-bg1 rounded-2xl p-8 flex flex-col gap-6 w-full col-span-12 sm:col-span-6 lg:col-span-12">
            <div class="flex justify-start items-start gap-2 pb-6 border-b border-bg5">
              <div class="w-0.5 h-5 bg-g300"></div>
              <h5 class="uppercase heading-5 !leading-none">WEBSITE</h5>
            </div>
            <p>{{ \App\cf_get('part_website') ?: 'ultimatebattle.co' }}</p>
          </div>
          <div class="bg-bg1 rounded-2xl p-8 flex flex-col gap-6 w-full col-span-12 sm:col-span-6 lg:col-span-12">
            <div class="flex justify-start items-start gap-2 pb-6 border-b border-bg5">
              <div class="w-0.5 h-5 bg-g300"></div>
              <h5 class="uppercase heading-5 !leading-none">FOLLOW</h5>
            </div>
            <div class="flex justify-start items-center gap-2">
              <a href="{{ get_option('ub_twitter_url') ?: '#' }}" class="flex justify-center items-center size-10 rounded-full bg-bg1 text-xl text-g300 hover:text-g900 duration-300 hover:bg-g300"><i class="ph ph-x-logo"></i></a>
              <a href="{{ get_option('ub_instagram_url') ?: '#' }}" class="flex justify-center items-center size-10 rounded-full bg-bg1 text-xl text-g300 hover:text-g900 duration-300 hover:bg-g300"><i class="ph ph-instagram-logo"></i></a>
              <a href="{{ get_option('ub_discord_url') ?: '#' }}" class="flex justify-center items-center size-10 rounded-full bg-bg1 text-xl text-g300 hover:text-g900 duration-300 hover:bg-g300"><i class="ph ph-discord-logo"></i></a>
              <a href="{{ get_option('ub_tiktok_url') ?: '#' }}" class="flex justify-center items-center size-10 rounded-full bg-bg1 text-xl text-g300 hover:text-g900 duration-300 hover:bg-g300"><i class="ph ph-tiktok-logo"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
