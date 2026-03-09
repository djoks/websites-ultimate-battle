<section class="stp-30 relative z-20 overflow-hidden">
  <div class="container grid grid-cols-12 gap-6 relative">
    <div
      class="col-span-12 lg:col-span-6 flex justify-center items-center overflow-hidden"
    >
      <div
        class="masked-content-three h-[400px] sm:h-[668px] w-full max-w-[580px] relative"
      >
        <img
          src="{{ get_template_directory_uri() }}/public/images/team-meeting.webp"
          alt=""
          class="h-full w-full object-cover"
        />
        <img
          src="{{ get_template_directory_uri() }}/public/images/icon/team-meeting-img-bg.svg"
          alt=""
          class="absolute inset-0 h-full w-full"
        />
      </div>
    </div>
    <div class="col-span-12 lg:col-span-6">
      <div class="flex justify-start items-center gap-3">
        <p class="text-lg font-medium text-g300">PLAYPROVINCE ESPORTS</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2 class="display-4 uppercase pt-4" data-aos="fade-down">
        Competitive Esports Platform
      </h2>
      <h5 class="heading-5 py-3 lg:py-6 uppercase">
        Tournaments, Broadcasts & Brand Activations
      </h5>
      <p class="text-base lg:text-lg text-g80">
        Ultimate Battle is a dynamic esports competition and content platform built to grow the gaming ecosystem in Ghana and across Africa. Through organized tournaments, live broadcasts, and community-driven gaming events, we provide competitive environments for gamers while delivering exciting entertainment for audiences and brand partners.
      </p>
      <div class="pt-6 lg:pt-8 flex flex-col items-start">
        <div class="grid grid-cols-12 gap-6 pb-6 lg:pb-10">
          <div
            class="col-span-12 sm:col-span-6 p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-5"
          >
            <div class="flex justify-start items-center gap-4">
              <div
                class="flex justify-center items-center p-2 rounded-full bg-g300"
              >
                <img src="{{ get_template_directory_uri() }}/public/images/icon/light-bulb.png" alt="" />
              </div>
              <h5 class="uppercase heading-5">Our Vision</h5>
            </div>
            <ul class="flex flex-col gap-3">
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                Ghana's premier esports platform
              </li>
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                Professional tournament operations
              </li>
            </ul>
          </div>
          <div
            class="col-span-12 sm:col-span-6 p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-5"
          >
            <div class="flex justify-start items-center gap-4">
              <div
                class="flex justify-center items-center p-2 rounded-full bg-g300"
              >
                <img src="{{ get_template_directory_uri() }}/public/images/icon/light-bulb.png" alt="" />
              </div>
              <h5 class="uppercase heading-5">Our Mission</h5>
            </div>
            <ul class="flex flex-col gap-3">
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                Community-driven competitions
              </li>
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                High-quality broadcast production
              </li>
            </ul>
          </div>
        </div>
        <div class="flex justify-start items-start">
          <div
            class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center"
          >
            <a
              href="{{ home_url('/about-us') }}"
              class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"
              ><span>Learn More</span></a
            >

            @include('partials.custom-btn-illus')
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="stp-15 grid grid-cols-12 gap-6 container">
    <div
      class="col-span-12 min-[400px]:col-span-6 md:col-span-3 p-4 lg:p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-3 lg:gap-5"
    >
      <div class="flex justify-start items-center gap-3">
        <div
          class="flex justify-center items-center p-2 lg:p-2.5 rounded-full bg-bg1 text-g300 border border-bg2"
        >
          <i class="ph ph-lightbulb-filament"></i>
        </div>
        <p class="max-lg:text-sm">Events Hosted</p>
      </div>
      <p class="display-2 uppercase text-g300">
        <span class="odometer pb-5" data-odometer-final="100">0</span>+
      </p>
    </div>
    <div
      class="col-span-12 min-[400px]:col-span-6 md:col-span-3 p-4 lg:p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-3 lg:gap-5"
    >
      <div class="flex justify-start items-center gap-3">
        <div
          class="flex justify-center items-center p-2 lg:p-2.5 rounded-full bg-bg1 text-g300 border border-bg2"
        >
          <i class="ph ph-lightbulb-filament"></i>
        </div>
        <p class="max-lg:text-sm">Games Featured</p>
      </div>
      <p class="display-2 uppercase text-g300">
        <span class="odometer pb-5" data-odometer-final="6">0</span>+
      </p>
    </div>
    <div
      class="col-span-12 min-[400px]:col-span-6 md:col-span-3 p-4 lg:p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-3 lg:gap-5"
    >
      <div class="flex justify-start items-center gap-3">
        <div
          class="flex justify-center items-center p-2 lg:p-2.5 rounded-full bg-bg1 text-g300 border border-bg2"
        >
          <i class="ph ph-lightbulb-filament"></i>
        </div>
        <p class="max-lg:text-sm">Community Members</p>
      </div>
      <p class="display-2 uppercase text-g300">
        <span class="odometer pb-5" data-odometer-final="10">0</span>K+
      </p>
    </div>

    <div
      class="col-span-12 min-[400px]:col-span-6 md:col-span-3 p-4 lg:p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-3 lg:gap-5"
    >
      <div class="flex justify-start items-center gap-3">
        <div
          class="flex justify-center items-center p-2 lg:p-2.5 rounded-full bg-bg1 text-g300 border border-bg2"
        >
          <i class="ph ph-lightbulb-filament"></i>
        </div>
        <p class="max-lg:text-sm">Brand Partners</p>
      </div>
      <p class="display-2 uppercase text-g300">
        <span class="odometer pb-5" data-odometer-final="25">0</span>+
      </p>
    </div>
  </div>
</section>
