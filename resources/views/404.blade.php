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
          <p class="display-4 uppercase">Page Not Found</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">404</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
  </div>

  <!-- not found section start -->
  <section class="container stp-30">
    <div class="flex justify-center items-center flex-col max-w-[1076px] mx-auto">
      <div class="">
        <img src="{{ get_template_directory_uri() }}/public/images/not_found.webp" alt="" />
      </div>
      <p class="display-4 pt-10 lg:pt-20 uppercase text-center">
        Oops, the page you're looking for doesn't exist
      </p>
      <p class="text-lg text-g50 pt-4 max-w-[636px] text-center">
        It looks like this page has been moved or doesn't exist. Head back
        to the homepage to continue exploring Ultimate Battle.
      </p>
      <div class="flex justify-center items-center pt-6 lg:pt-10">
        <div class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center">
          <img src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-1.svg" alt="" class="absolute top-0 left-0 bottom-0 object-cover rotate-180 h-10 sm:h-[50px] lg:h-[62px]" />
          <a href="{{ home_url('/') }}" class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm">
            <span>Back to Home</span>
          </a>
          <img src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-1.svg" alt="" class="-ml-px absolute top-0 right-0 bottom-0 h-10 sm:h-[50px] lg:h-[62px]" />
          <div class="absolute top-1 sm:top-2 left-[3px] sm:left-2 h-full flex justify-between w-full items-center group-hover:top-0 group-hover:left-0 duration-300">
            <img src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-2.svg" alt="" class="rotate-180 h-10 sm:h-[50px] lg:h-[62px]" />
            <div class="w-full border-y sm:border-g300 border-g300/60 h-full"></div>
            <img src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-2.svg" alt="" class="-mr-px h-10 sm:h-[50px] lg:h-[62px]" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- not found section end -->
@endsection
