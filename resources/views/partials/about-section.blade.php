@php
  $sec_label = \App\cf_get('about_sec_label') ?: 'PLAYPROVINCE ESPORTS';
  $sec_title = \App\cf_get('about_sec_title') ?: 'Competitive Esports Platform';
  $sec_subtitle = \App\cf_get('about_sec_subtitle') ?: 'Tournaments, Broadcasts & Brand Activations';
  $sec_text = \App\cf_get('about_sec_text') ?: 'Ultimate Battle is a dynamic esports competition and content platform built to grow the gaming ecosystem in Ghana and across Africa. Through organized tournaments, live broadcasts, and community-driven gaming events, we provide competitive environments for gamers while delivering exciting entertainment for audiences and brand partners.';
  $sec_button_text = \App\cf_get('about_sec_button_text') ?: 'Learn More';
  $sec_button_url = \App\cf_get('about_sec_button_url') ?: home_url('/about-us');

  $vision_title = \App\cf_get('about_vision_title') ?: 'Our Vision';
  $vision_items = \App\cf_get('about_vision_items');
  if (!$vision_items) {
      $vision_items = [
          ['text' => "Ghana's premier esports platform"],
          ['text' => 'Professional tournament operations'],
      ];
  }

  $mission_title = \App\cf_get('about_mission_title') ?: 'Our Mission';
  $mission_items = \App\cf_get('about_mission_items');
  if (!$mission_items) {
      $mission_items = [
          ['text' => 'Community-driven competitions'],
          ['text' => 'High-quality broadcast production'],
      ];
  }

  $stats = \App\cf_get('about_stats');
  if (!$stats) {
      $stats = [
          ['label' => 'Events Hosted', 'stat_value' => '100', 'suffix' => '+'],
          ['label' => 'Games Featured', 'stat_value' => '6', 'suffix' => '+'],
          ['label' => 'Community Members', 'stat_value' => '10', 'suffix' => 'K+'],
          ['label' => 'Brand Partners', 'stat_value' => '25', 'suffix' => '+'],
      ];
  }
@endphp
<section class="stp-30 relative z-20 overflow-hidden">
  <div class="container grid grid-cols-12 gap-6 relative">
    <div class="col-span-12 lg:col-span-6 flex justify-center items-center overflow-hidden">
      <div class="masked-content-three h-[400px] sm:h-[668px] w-full max-w-[580px] relative">
        <img src="{{ \App\cf_image_url(\App\cf_get('about_sec_image')) ?: get_template_directory_uri() . '/public/images/team-meeting.webp' }}" alt="" class="h-full w-full object-cover" />
        <img src="{{ get_template_directory_uri() }}/public/images/icon/team-meeting-img-bg.svg" alt="" class="absolute inset-0 h-full w-full" />
      </div>
    </div>
    <div class="col-span-12 lg:col-span-6">
      <div class="flex justify-start items-center gap-3">
        <p class="text-lg font-medium text-g300">{{ $sec_label }}</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2 class="display-4 uppercase pt-4" data-aos="fade-down">{{ $sec_title }}</h2>
      <h5 class="heading-5 py-3 lg:py-6 uppercase">{{ $sec_subtitle }}</h5>
      <p class="text-base lg:text-lg text-g80">{{ $sec_text }}</p>
      <div class="pt-6 lg:pt-8 flex flex-col items-start">
        <div class="grid grid-cols-12 gap-6 pb-6 lg:pb-10">
          <div class="col-span-12 sm:col-span-6 p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-5">
            <div class="flex justify-start items-center gap-4">
              <div class="flex justify-center items-center p-2 rounded-full bg-g300">
                <img src="{{ get_template_directory_uri() }}/public/images/icon/light-bulb.png" alt="" />
              </div>
              <h5 class="uppercase heading-5">{{ $vision_title }}</h5>
            </div>
            <ul class="flex flex-col gap-3">
              @foreach($vision_items as $item)
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                {{ $item['text'] }}
              </li>
              @endforeach
            </ul>
          </div>
          <div class="col-span-12 sm:col-span-6 p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-5">
            <div class="flex justify-start items-center gap-4">
              <div class="flex justify-center items-center p-2 rounded-full bg-g300">
                <img src="{{ get_template_directory_uri() }}/public/images/icon/light-bulb.png" alt="" />
              </div>
              <h5 class="uppercase heading-5">{{ $mission_title }}</h5>
            </div>
            <ul class="flex flex-col gap-3">
              @foreach($mission_items as $item)
              <li class="flex justify-start items-center gap-2">
                <span class="text-g300"><i class="ph ph-check"></i></span>
                {{ $item['text'] }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="flex justify-start items-start">
          <div class="relative group h-10 sm:h-[50px] lg:h-[62px] flex justify-start items-center">
            <a href="{{ $sec_button_url }}" class="flex justify-center items-center gap-2 text-g900 bg-g300 font-semibold relative z-10 h-full mx-4 sm:mx-5 lg:mx-6 max-sm:text-sm"><span>{{ $sec_button_text }}</span></a>
            @include('partials.custom-btn-illus')
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="stp-15 grid grid-cols-12 gap-6 container">
    @foreach($stats as $stat)
    <div class="col-span-12 min-[400px]:col-span-6 md:col-span-3 p-4 lg:p-6 rounded-xl bg-bg4 border border-g600 flex flex-col justify-start gap-3 lg:gap-5">
      <div class="flex justify-start items-center gap-3">
        <div class="flex justify-center items-center p-2 lg:p-2.5 rounded-full bg-bg1 text-g300 border border-bg2">
          <i class="ph ph-lightbulb-filament"></i>
        </div>
        <p class="max-lg:text-sm">{{ $stat['label'] }}</p>
      </div>
      <p class="display-2 uppercase text-g300">
        <span class="odometer pb-5" data-odometer-final="{{ $stat['stat_value'] }}">0</span>{{ $stat['suffix'] }}
      </p>
    </div>
    @endforeach
  </div>
</section>
