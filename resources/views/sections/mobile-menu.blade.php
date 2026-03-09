<div
  class="fixed inset-0 bg-g900 z-50 flex flex-col translate-x-[-100%] duration-500 opacity-0 invisible mobile-menu"
>
  <div class="px-6 pt-6 flex justify-between items-center">
    <a href="{{ home_url('/') }}" class="flex justify-start items-center">
      <img src="{{ get_template_directory_uri() }}/public/images/logo.png" class="h-10 w-auto" alt="Ultimate Battle" />
    </a>
    <button class="text-2xl mobile-menu-close">
      <i class="ph ph-x"></i>
    </button>
  </div>
  <div class="flex-1 flex justify-center items-center flex-col">
    <ul
      class="font-medium text-center flex flex-col gap-6 text-lg justify-center items-center"
    >
      <li>
        <a href="{{ home_url('/') }}" class="uppercase font-bold hover:text-g300">Home</a>
      </li>
      <li>
        <div
          class="subMenuToggle group flex flex-col items-center justify-center"
        >
          <div
            class="flex cursor-pointer items-center justify-start hover:text-g300"
          >
            <span class="mobileSubMenuTitle uppercase font-bold">What We Do</span>
            <i class="pl-1 pt-1 !text-xl duration-500">
              <i class="ph ph-caret-right"></i>
            </i>
          </div>

          <ul
            class="subMenuClose subMenu flex flex-col items-center justify-center gap-2 overflow-hidden pl-4 duration-700"
          >
            <li>
              <a
                href="{{ home_url('/tournaments') }}"
                class="mobileSubMenuItem text-base hover:text-g300"
              >
                <span>-</span> Tournaments
              </a>
            </li>
            <li>
              <a
                href="{{ home_url('/broadcasts') }}"
                class="mobileSubMenuItem text-base hover:text-g300"
              >
                <span>-</span> Broadcasts
              </a>
            </li>
            <li>
              <a
                href="{{ home_url('/partnerships') }}"
                class="mobileSubMenuItem text-base hover:text-g300"
              >
                <span>-</span> Partnerships
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="{{ home_url('/about-us') }}" class="uppercase font-bold hover:text-g300">About</a>
      </li>
      <li>
        <a href="{{ home_url('/contact') }}" class="uppercase font-bold hover:text-g300">Contact</a>
      </li>
    </ul>
  </div>
  <div class="flex justify-center items-center pb-6 flex-col gap-4">
    <a
      href="{{ get_option('ub_header_cta_url') ?: '#' }}"
      class="flex justify-center items-center text-g900 bg-g300 font-semibold px-8 py-3 text-sm uppercase rounded"
      >{{ get_option('ub_header_cta_text') ?: 'Get Started' }}</a
    >
    <div
      class="flex justify-start items-center gap-4 text-g300"
    >
      <a href="{{ get_option('ub_twitter_url') ?: '#' }}" aria-label="Twitter/X">
        <i class="ph ph-x-logo text-2xl"></i>
      </a>
      <a href="{{ get_option('ub_instagram_url') ?: '#' }}" aria-label="Instagram">
        <i class="ph ph-instagram-logo text-2xl"></i>
      </a>
      <a href="{{ get_option('ub_discord_url') ?: '#' }}" aria-label="Discord">
        <i class="ph ph-discord-logo text-2xl"></i>
      </a>
      <a href="{{ get_option('ub_tiktok_url') ?: '#' }}" aria-label="TikTok">
        <i class="ph ph-tiktok-logo text-2xl"></i>
      </a>
    </div>
  </div>
</div>
