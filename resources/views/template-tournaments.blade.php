{{--
  Template Name: Tournaments
--}}

@extends('layouts.app')

@section('content')
  <div class="size-[100vw] lg:size-[786px] rounded-full absolute top-0 left-0 blur-[700px]" style="background: rgba(249, 233, 52, 0.08)"></div>

  <div class="relative">
    <img src="{{ get_template_directory_uri() }}/public/images/bradcrumb-bg.png" alt="" class="absolute top-0 left-0 right-0 h-full w-full object-cover" />
    @include('sections.header')
    @include('sections.mobile-menu')
    <!-- Breadcrumb Section Start -->
    <section class="max-lg:pt-20 pt-[92px]">
      <div class="relative z-10 py-12 lg:py-20">
        <div class="flex justify-center items-center flex-col gap-3">
          <p class="display-4 uppercase">Tournaments</p>
          <ul class="flex justify-center items-center gap-2 uppercase">
            <li class="font-medium !leading-none">
              <a href="{{ home_url('/') }}" class="">Home</a>
            </li>
            <li class="font-medium text-2xl !leading-none">
              <i class="ph ph-caret-double-right"></i>
            </li>
            <li class="font-medium text-g300 !leading-none">Tournaments</li>
          </ul>
        </div>
        <img src="{{ get_template_directory_uri() }}/public/images/icon/home-3-banner-bottom-illus.png" alt="" class="absolute bottom-0 left-0 right-0" />
      </div>
    </section>
    <!-- Breadcrumb Section End -->
  </div>
  <!-- Features Section Start -->
  <section>
    <div class="container stp-30 relative z-10">
      <div class="flex justify-between items-center gap-6 w-full relative z-10 max-[450px]:flex-col max-[450px]:text-center">
        <p class="uppercase font-bold display-4">Tournament Organization</p>
        <p class="text-base xl:text-lg max-w-[526px]">
          We design and manage competitive esports tournaments that bring
          players together to compete across popular gaming titles.
        </p>
      </div>

      <div class="stp-15 flex flex-col gap-6">
        <div class="grid grid-cols-12 gap-4 min-[400px]:gap-6 bg-bg1 border border-bg5 rounded-2xl p-6 lg:p-10" data-aos="fade-up">
          <div class="col-span-12 md:col-span-6 flex justify-center items-start flex-col">
            <p class="uppercase font-medium text-g300">Competitions</p>
            <h2 class="uppercase pt-4 heading-2">Weekly Community Battles</h2>
            <ul class="pt-6 flex flex-col gap-4">
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Regular competitions designed to keep the community active
                  and competitive across multiple game titles.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Open registration for all skill levels with structured
                  brackets and fair matchmaking.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Consistent scheduling builds habits and grows the community
                  week after week.
                </p>
              </li>
            </ul>
            <div class="flex justify-start pt-6 lg:pt-10">
              <a href="#" class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center cursor-pointer">
                <span class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"><span>REGISTER NOW</span></span>
                @include('partials.custom-btn-illus')
              </a>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-5 lg:col-start-8 flex justify-center items-center">
            <div class="masked-content-five h-[300px] sm:h-[428px] w-full relative">
              <img src="{{ get_template_directory_uri() }}/public/images/service-2-image-1.webp" alt="" class="h-full w-full object-cover" />
              <img src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg" alt="" class="absolute inset-0 h-full w-full" />
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-4 min-[400px]:gap-6 bg-bg1 border border-bg5 rounded-2xl p-6 lg:p-10" data-aos="fade-up">
          <div class="col-span-12 md:col-span-6 flex justify-center items-start flex-col">
            <p class="uppercase font-medium text-g300">Championships</p>
            <h2 class="uppercase pt-4 heading-2">Seasonal Championships</h2>
            <ul class="pt-6 flex flex-col gap-4">
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Multi-week tournaments culminating in championship finals
                  with prize pools and live broadcast coverage.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Digital qualifiers allow nationwide participation leading to
                  grand finals events.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Professional production with commentary, analysis, and
                  post-match content.
                </p>
              </li>
            </ul>
            <div class="flex justify-start pt-6 lg:pt-10">
              <a href="#" class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center cursor-pointer">
                <span class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"><span>REGISTER NOW</span></span>
                @include('partials.custom-btn-illus')
              </a>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-5 lg:col-start-8 flex justify-center items-center">
            <div class="masked-content-five h-[300px] sm:h-[428px] w-full relative">
              <img src="{{ get_template_directory_uri() }}/public/images/service-2-image-2.webp" alt="" class="h-full w-full object-cover" />
              <img src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg" alt="" class="absolute inset-0 h-full w-full" />
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-4 min-[400px]:gap-6 bg-bg1 border border-bg5 rounded-2xl p-6 lg:p-10" data-aos="fade-up">
          <div class="col-span-12 md:col-span-6 flex justify-center items-start flex-col">
            <p class="uppercase font-medium text-g300">Branded</p>
            <h2 class="uppercase pt-4 heading-2">Branded Tournaments</h2>
            <ul class="pt-6 flex flex-col gap-4">
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Custom esports competitions designed for brand engagement
                  and promotional campaigns.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Full tournament production from registration to finals
                  broadcast and post-event content.
                </p>
              </li>
              <li class="flex justify-start items-start gap-3">
                <div class="w-6 h-0.5 bg-g300 mt-3"></div>
                <p>
                  Example: Road to World Cup – EAFC Tournament (4-week,
                  nationwide, championship finals broadcast).
                </p>
              </li>
            </ul>
            <div class="flex justify-start pt-6 lg:pt-10">
              <a href="#" class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center cursor-pointer">
                <span class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"><span>PARTNER WITH US</span></span>
                @include('partials.custom-btn-illus')
              </a>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 lg:col-span-5 lg:col-start-8 flex justify-center items-center">
            <div class="masked-content-five h-[300px] sm:h-[428px] w-full relative">
              <img src="{{ get_template_directory_uri() }}/public/images/service-2-image-3.webp" alt="" class="h-full w-full object-cover" />
              <img src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg" alt="" class="absolute inset-0 h-full w-full" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Section End -->

  <!-- contact section start -->
  @include('partials.contact')
  <!-- contact section end -->
@endsection
