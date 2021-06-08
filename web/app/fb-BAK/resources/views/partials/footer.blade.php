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
</footer>
