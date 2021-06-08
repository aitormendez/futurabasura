@if (is_archive('story'))
  <div class="p-6 md:fixed page-header md:py-0">
    <h1 class="leading-none page-header-font">{!! $title !!}</h1>
  </div>
@else
  <div class="p-6 page-header">
    <h1 class="page-header-font">{!! $title !!}</h1>
  </div>
@endif
