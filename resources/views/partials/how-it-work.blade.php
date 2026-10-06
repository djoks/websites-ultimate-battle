@php
  $hiw_title = \App\cf_get('hiw_title') ?: 'how it works';
  $steps = \App\cf_get('hiw_steps');
  if (!$steps) {
      $steps = [
          ['title' => 'Register & Compete', 'image' => get_template_directory_uri() . '/public/images/how_it_works_img_1.webp', 'rotation' => '-rotate-6'],
          ['title' => 'Watch & Engage', 'image' => get_template_directory_uri() . '/public/images/how_it_works_img_2.webp', 'rotation' => 'rotate-0'],
          ['title' => 'Experience the Battle', 'image' => get_template_directory_uri() . '/public/images/how_it_works_img_3.webp', 'rotation' => 'rotate-6'],
      ];
  }
  $total = count($steps);
@endphp
<section class="stp-30 px-8 sbp-30">
  <div class="flex justify-center items-center flex-col gap-20">
    <div class="py-52 md:py-[350px] sticky top-0">
      <p
        class="relative uppercase text-216px font-bold text-nowrap !leading-none text-center text-g300"
      >
        {{ $hiw_title }}
      </p>
    </div>
    @foreach($steps as $i => $step)
    <div class="sticky top-10">
      <div class="relative {{ $step['rotation'] }}">
        <img
          src="{{ \App\cf_image_url($step['image'] ?? '') }}"
          alt=""
          class="h-[400px] md:h-[90vh] 3xl:h-[752px]"
        />
        <div
          class="absolute bottom-2 md:bottom-5 left-0 right-0 w-full h-44 bg-gradient-to-t from-g900 to-transparent flex justify-center items-center flex-col"
        >
          <div class="flex justify-start items-start flex-col p-3">
            <div class="flex justify-start items-center gap-3">
              <p class="text-2xl">{{ $i + 1 }}</p>
              <div class="w-[100px] h-0.5 bg-g60"></div>
              <p class="text-2xl">{{ $total }}</p>
            </div>
            <h3 class="heading-3 uppercase max-w-[432px] pt-3">
              {{ $step['title'] }}
            </h3>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
