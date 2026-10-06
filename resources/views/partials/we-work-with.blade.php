@php
  $fg_title = \App\cf_get('fg_title') ?: 'Featured Games';
  $games = \App\cf_get('fg_games');
  if (!$games) {
      $games = [
          ['name' => 'EA Sports FC', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-1.png'],
          ['name' => 'Tekken', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-2.png'],
          ['name' => 'Call of Duty Mobile', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-3.png'],
          ['name' => 'PUBG Mobile', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-4.png'],
          ['name' => 'Street Fighter', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-5.png'],
          ['name' => 'Fortnite', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-6.png'],
          ['name' => 'Apex Legends', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-7.png'],
          ['name' => 'More Coming', 'icon' => get_template_directory_uri() . '/public/images/icon/icon-8.png'],
      ];
  }
@endphp
<section class="stp-30">
  <div class="relative">
    <div class="swiper text-slider4 large-container">
      <div class="swiper-wrapper">
        @for($i = 0; $i < 3; $i++)
        <div class="swiper-slide">
          <p class="relative uppercase text-[40px] sm:text-[60px] md:text-[100px] lg:text-[160px] 2xl:text-[216px] font-bold text-nowrap !leading-none">
            {{ $fg_title }}
          </p>
        </div>
        @endfor
      </div>
    </div>
  </div>
  <div class="container stp-15 grid grid-cols-12">
    @foreach($games as $i => $game)
    @php
      $isTopRow = $i < 4;
      $isFirstCol = $i % 4 === 0;
      $isLastCol = $i % 4 === 3;
      $isSecondCol = $i % 4 === 1;
      $borderClasses = '';
      if ($isTopRow) {
          if ($isLastCol) $borderClasses = 'border border-bg3';
          elseif ($isSecondCol) $borderClasses = 'border-y border-bg3 max-md:border-x md:border-l';
          elseif ($isFirstCol) $borderClasses = 'border-y border-bg3 border-l';
          else $borderClasses = 'border-y border-bg3 border-l';
      } else {
          if ($isLastCol) $borderClasses = 'border-b border-x border-bg3';
          elseif ($isSecondCol) $borderClasses = 'border-b max-md:border-x md:border-l border-bg3';
          elseif ($isFirstCol) $borderClasses = 'border-b border-l border-bg3';
          else $borderClasses = 'border-b border-l border-bg3';
      }
    @endphp
    <div class="col-span-6 md:col-span-3 flex justify-center items-center gap-3 max-lg:flex-col py-6 sm:py-10 lg:py-20 {{ $borderClasses }} relative">
      <div class="bg-g900 size-8 text-bg3 absolute -left-4 -top-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @if(!$isTopRow)
      <div class="bg-g900 size-8 text-bg3 absolute -left-4 -bottom-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @endif
      @if($isLastCol)
      <div class="bg-g900 size-8 text-bg3 absolute -right-4 -top-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @endif
      @if($isLastCol && !$isTopRow)
      <div class="bg-g900 size-8 text-bg3 absolute -right-4 -bottom-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @endif
      @if($isSecondCol && $isTopRow)
      <div class="bg-g900 size-8 text-bg3 absolute md:hidden -right-4 -top-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @endif
      @if($isSecondCol && !$isTopRow)
      <div class="bg-g900 size-8 text-bg3 absolute md:hidden -right-4 -top-4 text-xl flex justify-center items-center"><i class="ph ph-plus"></i></div>
      @endif
      <img src="{{ \App\cf_image_url($game['icon'] ?? '') }}" alt="" />
      <h6 class="font-medium max-lg:text-sm">{{ $game['name'] }}</h6>
    </div>
    @endforeach
  </div>
</section>
