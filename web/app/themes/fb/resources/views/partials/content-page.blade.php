<div class="max-w-3xl mx-auto">
  glo{{ WP_ENV}}
  <div class="font-serif prose">@php(the_content())</div>
</div>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
