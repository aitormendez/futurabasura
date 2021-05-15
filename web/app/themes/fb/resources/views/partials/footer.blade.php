<footer class="content-info pt-10 pb-2 flex flex-wrap items-center">
  <div class="footer-hole w-full flex justify-center mb-10">@svg('images.hole')</div>
  <div class="menus flex flex-wrap w-full md:flex-nowrap md:items-start justify-center">
    <ul class="contenidos w-full md:w-min mx-3 my-2 px-3  py-2 border border-black hover:bg-white hover:bg-white md:py-5 md:px-7">
      @foreach ($contents_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="shop w-full md:w-min mx-3 my-2 px-3 py-2 border border-black hover:bg-white md:py-5 md:px-7">
      @foreach ($shop_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="social w-full md:w-min mx-3 my-2 px-3 py-2 border border-black hover:bg-white md:py-5 md:px-7">
      @foreach ($social_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
    <ul class="info w-full md:w-min mx-3 my-2 px-3 py-2 border border-black hover:bg-white md:py-5 md:px-7">
      @foreach ($info_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm hover:text-blue-700">{{ $item->label }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</footer>
