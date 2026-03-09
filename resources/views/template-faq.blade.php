{{--
  Template Name: FAQ
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
          <p class="display-4 uppercase">FAQ</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">FAQ</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  @include('partials.faq')

  <section class="container stp-15">
    <div class="">
      <h4 class="uppercase heading-4">{{ get_field('faq_still_title') ?: 'STILL HAVE QUESTIONS?' }}</h4>
      <p class="pt-4 text-g60">
        If you didn't find the answer you were looking for, we're here to
        help. Reach out to us at <a href="mailto:{{ get_field('faq_contact_email') ?: 'info@ultimatebattle.co' }}" class="text-g300">{{ get_field('faq_contact_email') ?: 'info@ultimatebattle.co' }}</a>
        or use our <a href="{{ home_url('/contact') }}" class="text-g300">contact form</a>,
        and we'll get back to you as soon as possible. We're building
        Africa's esports future together!
      </p>
    </div>
  </section>
@endsection
