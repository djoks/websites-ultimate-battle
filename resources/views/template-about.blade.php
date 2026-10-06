{{--
  Template Name: About Us
--}}

@extends('layouts.app')

@section('content')
  <div class="relative">
    <img src="{{ get_template_directory_uri() }}/public/images/bradcrumb-bg.png" alt="" class="absolute top-0 left-0 right-0 h-full w-full object-cover" />
    @include('sections.header')
    @include('sections.mobile-menu')
    <section class="max-lg:pt-20 pt-[92px]">
      <div class="relative z-10 py-12 lg:py-20">
        <div class="flex justify-center items-center flex-col gap-3">
          <p class="display-4 uppercase">About Ultimate Battle</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">About Us</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  <!-- About Section Start -->
  @include('partials.about-section')
  <!-- About Section End -->

  <!-- Our Story Section Start -->
  <section>
    <div class="container stp-30">
      <div class="flex justify-between items-center gap-6 w-full relative z-10 max-[450px]:flex-col max-[450px]:text-center">
        <p class="uppercase font-bold display-3">{{ \App\cf_get('about_story_title') ?: 'Our Story' }}</p>
        <p class="text-base xl:text-lg max-w-[636px]">
          {{ \App\cf_get('about_story_text') ?: 'Ultimate Battle was born from a passion for competitive gaming and a vision to grow the esports ecosystem in Ghana and across Africa. Through organized tournaments, live broadcasts, and community-driven gaming events, we provide a competitive environment for gamers while delivering exciting entertainment for audiences and brand partners. The platform operates within the PlayProvince Esports ecosystem.' }}
        </p>
      </div>
      <div class="stp-15">
        <div class="h-[250px] sm:h-[300px] lg:h-[460px] overflow-hidden border border-g600 rounded-2xl flex justify-center items-center relative">
          <div class="absolute inset-0 bg-g900/30 z-10"></div>
          <img src="{{ \App\cf_image_url(\App\cf_get('about_story_image')) ?: get_template_directory_uri() . '/public/images/video-bg.png' }}" alt="" class="object-cover absolute inset-0 h-full w-full" />
        </div>
      </div>
    </div>
  </section>
  <!-- Our Story Section End -->

  <!-- Roadmap Section Start -->
  <section class="stp-30">
    <div class="container">
      <div class="flex justify-center items-center flex-col">
        <div class="flex justify-start items-center gap-3">
          <p class="text-lg font-medium text-g300 uppercase">{{ \App\cf_get('about_roadmap_label') ?: 'Roadmap' }}</p>
          <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
        </div>
        <h2 class="display-4 uppercase pt-4">{{ \App\cf_get('about_roadmap_title') ?: 'Our Journey' }}</h2>
      </div>
      @php $phases = \App\cf_get('about_roadmap_phases'); @endphp
      <div class="stp-15 grid grid-cols-12 gap-6">
        @if($phases)
          @foreach($phases as $phase)
            <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
              <p class="text-g300 font-medium uppercase">{{ $phase['label'] }}</p>
              <h4 class="heading-4 uppercase pt-2">{{ $phase['title'] }}</h4>
              <p class="pt-4 text-g80">{{ $phase['description'] }}</p>
            </div>
          @endforeach
        @else
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <p class="text-g300 font-medium uppercase">Phase 1</p>
            <h4 class="heading-4 uppercase pt-2">Foundation</h4>
            <p class="pt-4 text-g80">Community tournament operations, initial game title selection, broadcast setup, and local community building.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <p class="text-g300 font-medium uppercase">Phase 2</p>
            <h4 class="heading-4 uppercase pt-2">Growth</h4>
            <p class="pt-4 text-g80">Seasonal championship formats, brand partnership program, expanded game titles, and multi-platform content distribution.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <p class="text-g300 font-medium uppercase">Phase 3</p>
            <h4 class="heading-4 uppercase pt-2">Production</h4>
            <p class="pt-4 text-g80">Professional broadcast production, gaming talk shows, influencer collaborations, and enhanced content across YouTube, Twitch, and TikTok.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <p class="text-g300 font-medium uppercase">Phase 4</p>
            <h4 class="heading-4 uppercase pt-2">Ecosystem</h4>
            <p class="pt-4 text-g80">PlayProvince Esports network integration, sponsor marketplace, university gaming communities, and pan-African event partnerships.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <p class="text-g300 font-medium uppercase">Phase 5</p>
            <h4 class="heading-4 uppercase pt-2">Scale</h4>
            <p class="pt-4 text-g80">Large-scale branded tournaments, international partnerships, esports academy programs, and flagship championship events.</p>
          </div>
        @endif
      </div>
    </div>
  </section>
  <!-- Roadmap Section End -->

  <!-- How It Works Start -->
  @include('partials.how-it-work')
  <!-- How It Works End -->

  <!-- contact section start -->
  @include('partials.contact')
  <!-- contact section end -->

  <!-- We Work With Start -->
  @include('partials.we-work-with')
  <!-- We Work With End -->
@endsection
