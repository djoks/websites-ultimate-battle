<header class="top-0 left-0 right-0 z-50 header headerAbsolute">
  <div
    class="flex justify-between items-center relative z-30 border-b-[0.5px] border-g300 pr-6 2xl:pr-20"
  >
    <div class="relative z-10 overflow-hidden py-3 pl-6 w-[272px]">
      <a href="{{ home_url('/') }}" class="flex justify-start items-center">
        <img src="{{ \App\cf_image_url(\App\cf_option('site_logo')) ?: get_template_directory_uri() . '/public/images/logo.png' }}" class="h-10 lg:h-14 w-auto" alt="Ultimate Battle" />
      </a>

      <div class="absolute left-0 top-0 -z-10 max-lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class=""
          width="272"
          height="91"
          viewBox="0 0 272 91"
          fill="none"
        >
          <foreignObject x="-24" y="-24" width="320" height="139"
            ><div
              xmlns="http://www.w3.org/1999/xhtml"
              style="
                backdrop-filter: blur(12px);
                clip-path: url(#bgblur_0_17216_3520_clip_path);
                height: 100%;
                width: 100%;
              "
            ></div
          ></foreignObject>
          <path
            data-figma-bg-blur-radius="24"
            d="M0 0H236.828L272 91H0V0Z"
            fill="#f9e934"
            fill-opacity="0.08"
          />
          <defs>
            <clipPath
              id="bgblur_0_17216_3520_clip_path"
              transform="translate(24 24)"
            >
              <path d="M0 0H236.828L272 91H0V0Z" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>
    <div class="relative z-10 xl:pr-52">
      <nav class="max-lg:hidden">
        <ul
          class="flex justify-start items-center gap-6 xl:gap-8 text-base font-medium uppercase"
        >
          <li class="">
            <a
              href="{{ home_url('/') }}"
              class="relative before:absolute before:-bottom-0 before:left-0 before:w-[0%] before:h-1 before:bg-g300 before:skew-x-[24deg] before:opacity-0 hover:before:opacity-100 before:duration-500 hover:before:w-[100%] slide-vertical"
              data-splitting
            >
              Home
            </a>
          </li>
          <li class="">
            <div
              class="relative before:absolute before:-bottom-0 before:left-0 before:w-[0%] before:h-1 before:bg-g300 before:skew-x-[24deg] before:opacity-0 hover:before:opacity-100 before:duration-500 hover:before:w-[100%] group"
            >
              <div
                href=""
                class="slide-vertical flex justify-center items-center gap-1 cursor-pointer subMenuTitle"
                data-splitting
              >
                What We Do
                <span class="pb-1.5">
                  <i
                    class="ph ph-caret-down text-xl group-hover:rotate-180 duration-500 block"
                  ></i>
                </span>
              </div>

              <ul
                class="bg-bg1 p-4 flex flex-col gap-3 text-sm absolute top-[34px] left-0 w-[180px] bg-g900 z-50 overflow-hidden border border-bg2 invisible opacity-0 group-hover:visible group-hover:opacity-100 duration-300 translate-y-4 group-hover:translate-y-0 pointer-events-none group-hover:eventunset"
              >
                <li>
                  <a
                    href="{{ home_url('/tournaments') }}"
                    class="slide-horizontal duration-300 subMenuItem"
                    data-splitting
                    >Tournaments</a
                  >
                </li>
                <li>
                  <a
                    href="{{ home_url('/broadcasts') }}"
                    class="slide-horizontal duration-300 subMenuItem"
                    data-splitting
                    >Broadcasts</a
                  >
                </li>
                <li>
                  <a
                    href="{{ home_url('/partnerships') }}"
                    class="slide-horizontal duration-300 subMenuItem"
                    data-splitting
                    >Partnerships</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="">
            <a
              href="{{ home_url('/about-us') }}"
              class="relative before:absolute before:-bottom-0 before:left-0 before:w-[0%] before:h-1 before:bg-g300 before:skew-x-[24deg] before:opacity-0 hover:before:opacity-100 before:duration-500 hover:before:w-[100%] slide-vertical"
              data-splitting
            >
              About
            </a>
          </li>
          <li class="">
            <a
              href="{{ home_url('/contact') }}"
              class="relative before:absolute before:-bottom-0 before:left-0 before:w-[0%] before:h-1 before:bg-g300 before:skew-x-[24deg] before:opacity-0 hover:before:opacity-100 before:duration-500 hover:before:w-[100%] slide-vertical"
              data-splitting
            >
              Contact
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="flex justify-end items-center gap-4">
      <a
        href="{{ get_option('ub_header_cta_url') ?: '#' }}"
        class="max-lg:hidden relative group h-10 flex justify-start items-center"
      >
        <span
          class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full px-5 text-sm uppercase rounded"
          >{{ get_option('ub_header_cta_text') ?: 'Get Started' }}</span
        >
      </a>
      <button class="text-g300 text-2xl mobile-menu-open lg:hidden">
        <i class="ph ph-list"></i>
      </button>
    </div>
  </div>
</header>
