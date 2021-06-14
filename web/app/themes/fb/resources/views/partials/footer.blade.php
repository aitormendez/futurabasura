<footer class="flex flex-wrap items-center pt-10 pb-2 content-info">
  <div class="flex justify-center w-full mb-10 footer-hole">@svg('images.hole')</div>
  <div class="flex flex-wrap justify-center w-full menus md:flex-nowrap md:items-start">
    <ul class="w-full px-3 py-2 mx-3 my-2 border border-black contenidos md:w-min hover:bg-white md:py-5 md:px-7">
      @foreach ($contents_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="text-sm tracking-widest text-black uppercase hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="w-full px-3 py-2 mx-3 my-2 border border-black shop md:w-min hover:bg-white md:py-5 md:px-7">
      @foreach ($shop_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="text-sm tracking-widest text-black uppercase hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="w-full px-3 py-2 mx-3 my-2 border border-black social md:w-min hover:bg-white md:py-5 md:px-7">
      @foreach ($social_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="text-sm tracking-widest text-black uppercase hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="w-full px-3 py-2 mx-3 my-2 border border-black info md:w-min hover:bg-white md:py-5 md:px-7">
      @foreach ($info_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="text-sm tracking-widest text-black uppercase hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="flex flex-wrap justify-center w-full color">
    <span class="mb-10 font-serif text-center frase-footer text-9xl" style="color: @option('footer_color')">@option('footer_frase')</span>
    <div class="flex items-end w-full h-56 p-1 mancha" style="background-color: @option('footer_color')">
      <span class="text-xs uppercase">
        <a href="https://e451.net" class="text-black">451 web development</a>
      </span>
    </div>
  </div>
  <div class="w-full p-4 bg-white border border-black formulario">
    <div class="flex flex-wrap formu">
      <h3 class="tracking-widest">NEWSLETTER</h3>
      {!! do_shortcode( '[mc4wp_form id="474"]' ) !!}
    </div>
  </div>
</footer>
