{{--
  Template Name: Terms & Conditions
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
          <p class="display-4 uppercase">Terms & Conditions</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">Terms & Conditions</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  @php
    $terms_sections = \App\cf_get('terms_sections');
    if (!$terms_sections) {
        $terms_sections = [
            ['title' => 'Welcome to Ultimate Battle', 'content' => '<p>Ultimate Battle is an esports tournament and broadcast platform operated by PlayProvince Esports. By accessing or using our platform, you agree to be bound by these Terms and Conditions.</p><p>If you have questions about our platform or need assistance, contact us at info@ultimatebattle.co or use our contact form. We\'re here to help you connect, compete, and grow in Africa\'s esports ecosystem.</p>'],
            ['title' => 'Agreement to Terms', 'content' => '<p>By accessing or using any part of Ultimate Battle\'s website, app, or related services, you\'re entering into a legally binding agreement with PlayProvince Esports. This agreement includes these Terms and Conditions, our Privacy Policy, and any other rules or guidelines we publish on our platform.</p><p>These Terms are designed to ensure a safe, fair, and enjoyable environment for all users, whether you\'re a gamer, team manager, or tournament organizer. If you\'re using our Services on behalf of an organization, you confirm that you have the authority to bind that organization to these Terms.</p>'],
            ['title' => 'Who Can Use Our Services', 'content' => '<p>You must be at least 13 years old to access or use our Services. If you\'re under 18, you\'ll need parental or guardian consent to use paid features, create an account, or participate in tournaments and competitive activities.</p><p>By using our Services, you confirm that you\'re not barred from doing so under any applicable laws in your country or region.</p>'],
            ['title' => 'Your Account', 'content' => '<p>Some features, such as matchmaking, team management, and tournament participation, require you to create an account with Ultimate Battle.</p><p>When creating an account, you agree to provide accurate and up-to-date information. You\'re responsible for keeping your login credentials secure and confidential.</p><p>If you suspect any unauthorized access to your account, notify us immediately at info@ultimatebattle.co. You\'re responsible for all activities that occur under your account.</p>'],
            ['title' => 'Fair Play Policy', 'content' => '<p>Ultimate Battle is committed to fair play. Users must not engage in cheating, account boosting, impersonation, or any form of manipulation that undermines the integrity of the platform. Violations may result in account suspension or termination.</p>'],
            ['title' => 'STILL HAVE QUESTIONS?', 'content' => '<p>If you didn\'t find what you were looking for, contact us at <a href="mailto:info@ultimatebattle.co" class="text-g300">info@ultimatebattle.co</a> or use our <a href="' . home_url('/contact') . '" class="text-g300">contact form</a>. We\'re building Africa\'s esports future together!</p>'],
            ['title' => 'Ultimate Battle — PlayProvince Esports', 'content' => ''],
        ];
    }
  @endphp

  <!-- Terms And Conditions Start -->
  <section class="stp-30 relative z-20">
    <div class="container p-4 sm:p-6 lg:p-10 xl:p-[60px] flex flex-col gap-6 lg:gap-8 bg-bg1 border border-bg2 rounded-2xl">
      <h2 class="heading-2 uppercase">Terms of Service</h2>
      <div class="h-0.5 w-[100px] bg-g300"></div>
      @foreach($terms_sections as $section)
      <div class="flex flex-col gap-4">
        <h4 class="uppercase heading-4">{{ $section['title'] }}</h4>
        @if(!empty($section['content']))
        <div class="flex flex-col gap-2 text-base text-g50 lg:text-lg">{!! $section['content'] !!}</div>
        @endif
      </div>
      @endforeach
    </div>
  </section>
  <!-- Terms And Conditions End -->
@endsection
