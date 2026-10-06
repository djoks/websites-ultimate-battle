{{--
  Template Name: Broadcasts
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
          <p class="display-4 uppercase">Broadcasts</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">Broadcasts</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  <!-- Broadcast Features Section Start -->
  <section class="stp-30">
    <div class="container">
      <div class="flex justify-center items-center flex-col">
        <div class="flex justify-start items-center gap-3">
          <p class="text-lg font-medium text-g300 uppercase">{{ \App\cf_get('bc_section_label') ?: 'Content' }}</p>
          <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
        </div>
        <h2 class="display-4 uppercase pt-4">{{ \App\cf_get('bc_section_title') ?: 'Broadcast & Content' }}</h2>
      </div>
      @php $cards = \App\cf_get('bc_cards'); @endphp
      <div class="stp-15 grid grid-cols-12 gap-6">
        @if($cards)
          @foreach($cards as $card)
            <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
              <h4 class="heading-4 uppercase text-g300">{{ $card['title'] }}</h4>
              <p class="pt-4 text-g80">{{ $card['description'] }}</p>
            </div>
          @endforeach
        @else
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Live Tournament Streams</h4>
            <p class="pt-4 text-g80">Professional livestream broadcasts with expert commentary, real-time analysis, and multi-camera production.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Match Highlights</h4>
            <p class="pt-4 text-g80">Curated highlight reels showcasing the best plays, clutch moments, and standout performances from our events.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Gaming Talk Shows</h4>
            <p class="pt-4 text-g80">Regular esports discussion shows featuring competitive players, industry guests, and community voices.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Influencer Collaborations</h4>
            <p class="pt-4 text-g80">Partnership content with gaming influencers and content creators reaching diverse digital audiences.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Tournament Recaps</h4>
            <p class="pt-4 text-g80">Post-event content packages including summary broadcasts, player interviews, and behind-the-scenes footage.</p>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-xl bg-bg1 border border-bg2">
            <h4 class="heading-4 uppercase text-g300">Distribution Channels</h4>
            <p class="pt-4 text-g80">Content distributed across YouTube, Twitch, Facebook Live, TikTok, and partner media platforms.</p>
          </div>
        @endif
      </div>
    </div>
  </section>
  <!-- Broadcast Features Section End -->

  <!-- contact section start -->
  @include('partials.contact')
  <!-- contact section end -->
@endsection
