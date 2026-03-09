<section class="stp-30 container relative z-10">
  <div
    class="flex justify-between items-center gap-6 min-[500px]:gap-20 max-[500px]:flex-col max-[500px]:items-start"
  >
    <div class="flex justify-start items-start flex-col">
      <div class="flex justify-start items-center gap-3">
        <p class="text-lg font-medium text-g300">WHAT WE DO</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2 class="display-4 uppercase pt-4">
        Our <br />
        Services
      </h2>
    </div>
    <div class="flex justify-start items-start gap-8 max-w-[526px] flex-col">
      <p class="text-lg text-g40">
        Ultimate Battle delivers competitive gaming experiences through tournaments, live broadcasts, and brand activations.
      </p>
      <div
        class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center"
      >
        <a
          href="{{ home_url('/tournaments') }}"
          class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"
          ><span class="text-nowrap">LEARN MORE</span>
        </a>
        <img
          src="{{ get_template_directory_uri() }}/public/images/icon/button-illus-1.svg"
          alt=""
          class="absolute top-0 left-0 bottom-0 object-cover rotate-180 h-10 sm:h-[50px] lg:h-[62px]"
        />
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

  <div class="stp-15 flex justify-start gap-6 max-lg:flex-col">
    <div class="our-service-item active">
      <div class="title-area">
        <div class="relative masked-content-five w-full h-[355px]">
          <img
            src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg"
            alt=""
            class="absolute inset-0 z-10 object-cover h-full w-full"
          />
          <img
            src="{{ get_template_directory_uri() }}/public/images/our-services-img1.webp"
            alt=""
            class="h-full w-full object-cover"
          />
        </div>
      </div>
      <div class="img-area">
        <h5 class="title">Tournaments</h5>
        <p class="text-xl font-medium text-g300">01</p>
        <div class="hover-data">
          <h5 class="heading-5 uppercase">Tournaments</h5>
          <p class="pt-5">
            Community competitions, seasonal championships, and branded tournaments across popular gaming titles.
          </p>
        </div>
      </div>
    </div>
    <div class="our-service-item">
      <div class="title-area">
        <div class="relative masked-content-five w-full h-[355px]">
          <img
            src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg"
            alt=""
            class="absolute inset-0 z-10 object-cover h-full w-full"
          />
          <img
            src="{{ get_template_directory_uri() }}/public/images/our-services-img2.webp"
            alt=""
            class="h-full w-full object-cover"
          />
        </div>
      </div>
      <div class="img-area">
        <h5 class="title">Broadcasts</h5>
        <p class="text-xl font-medium text-g300">02</p>
        <div class="hover-data">
          <h5 class="heading-5 uppercase">Broadcasts</h5>
          <p class="pt-5">
            High-quality livestream broadcasts, match highlights, commentary, gaming talk shows, and influencer collaborations.
          </p>
        </div>
      </div>
    </div>
    <div class="our-service-item">
      <div class="title-area">
        <div class="relative masked-content-five w-full h-[355px]">
          <img
            src="{{ get_template_directory_uri() }}/public/images/icon/stroke-1.svg"
            alt=""
            class="absolute inset-0 z-10 object-cover h-full w-full"
          />
          <img
            src="{{ get_template_directory_uri() }}/public/images/our-services-img3.webp"
            alt=""
            class="h-full w-full object-cover"
          />
        </div>
      </div>
      <div class="img-area">
        <h5 class="title">Partnerships</h5>
        <p class="text-xl font-medium text-g300">03</p>
        <div class="hover-data">
          <h5 class="heading-5 uppercase">Partnerships</h5>
          <p class="pt-5">
            Tournament sponsorships, brand integrations, influencer campaigns, and digital marketing collaborations.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
