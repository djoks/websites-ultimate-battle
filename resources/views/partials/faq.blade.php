@php
  $faq_label = \App\cf_get('faq_sec_label') ?: 'FAQ';
  $faq_title = \App\cf_get('faq_sec_title') ?: 'Frequently Asked';
  $faq_items = \App\cf_get('faq_items');
  if (!$faq_items) {
      $faq_items = [
          ['question' => 'What is Ultimate Battle?', 'answer' => 'Ultimate Battle is a competitive esports tournament and broadcast platform designed to connect gamers, fans, and brands through high-impact gaming experiences. The platform operates within the PlayProvince Esports ecosystem.'],
          ['question' => 'What tournament formats do you offer?', 'answer' => 'We offer Weekly Community Battles (regular competitions), Seasonal Championships (multi-week tournaments with prize pools), and Branded Tournaments (custom competitions for brand engagement and campaigns).'],
          ['question' => 'Which games are featured?', 'answer' => 'Ultimate Battle hosts competitions across EA Sports FC (FIFA), Call of Duty Mobile, PUBG Mobile, Tekken, Street Fighter, and emerging competitive titles popular in the African gaming community.'],
          ['question' => 'How can I register for tournaments?', 'answer' => 'Visit our tournaments page or follow our social media channels for announcements. Registration is typically open before each event with details on format, schedule, and prizes.'],
          ['question' => 'Do you produce live broadcasts?', 'answer' => 'Yes! Ultimate Battle produces high-quality livestream broadcasts covering matches, highlights, commentary, and esports shows. Our content is distributed across YouTube, Twitch, Facebook Live, TikTok, and partner media platforms.'],
          ['question' => 'How can brands partner with Ultimate Battle?', 'answer' => 'We offer tournament title sponsorship, brand integration within broadcasts, influencer campaigns, community engagement challenges, and digital marketing collaborations. Contact us to discuss partnership opportunities.'],
          ['question' => 'Where is Ultimate Battle based?', 'answer' => 'Ultimate Battle is based in Ghana and operates across Africa. We\'re focused on growing the gaming ecosystem through organized tournaments, live broadcasts, and community-driven gaming events.'],
      ];
  }
@endphp
<section class="stp-30 relative z-20">
  <div class="container">
    <div class="flex justify-center items-center flex-col">
      <div class="flex justify-start items-center gap-3">
        <p class="text-lg font-medium text-g300 uppercase">{{ $faq_label }}</p>
        <img src="{{ get_template_directory_uri() }}/public/images/section-title-icon.png" alt="" />
      </div>
      <h2 class="display-3 uppercase pt-4">{{ $faq_title }}</h2>
    </div>
    <div class="stp-15 grid grid-cols-12 gap-6">
      <div class="col-span-12 lg:col-span-6 flex flex-col gap-5">
        @foreach($faq_items as $item)
        <div class="cursor-pointer rounded-xl border border-g600 bg-bg1">
          <div class="faq-accordion flex items-center justify-between py-4 px-6 duration-500">
            <div class="flex justify-start items-center gap-3">
              <img src="{{ get_template_directory_uri() }}/public/images/icon/faq-illus-1.png" alt="" />
              <h6 class="heading-6 uppercase">{{ $item['question'] }}</h6>
            </div>
            <div class="size-8 bg-bg2 rounded-full flex justify-center items-center">
              <i class="ph ph-plus"> </i>
            </div>
          </div>
          <div class="h-0 overflow-hidden duration-500">
            <p class="mx-6 pb-4">{{ $item['answer'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="max-lg:hidden lg:col-span-6 flex justify-end items-center">
        <img src="{{ \App\cf_image_url(\App\cf_get('faq_sec_image')) ?: get_template_directory_uri() . '/public/images/faq-img-1.png' }}" alt="" class="" />
      </div>
    </div>
  </div>
</section>
