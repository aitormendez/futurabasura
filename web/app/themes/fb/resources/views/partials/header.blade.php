<div id="solapa" class="fixed w-screen h-screen bg-white z-40 pr-8 py-8 pl-0 sm:pr-16 sm:py-16 top-0">
  <ul class="contents my-4">
    @foreach ($contents_nav as $item)
    <li class="">
      <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm sm:text-xl">{{ $item->label }}</a>
    </li>
    @endforeach
  </ul>
  <ul class="shop my-4">
    @foreach ($shop_nav as $item)
    <li class="">
      <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm sm:text-xl">{{ $item->label }}</a>
    </li>
    @endforeach
  </ul>
  <ul class="social my-4">
    @foreach ($social_nav as $item)
    <li class="">
      <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm sm:text-xl">{{ $item->label }}</a>
    </li>
    @endforeach
  </ul>
  <ul class="info my-4">
    @foreach ($info_nav as $item)
    <li class="">
      <a href="{{ $item->url }}" class="uppercase text-black tracking-widest text-sm sm:text-xl">{{ $item->label }}</a>
    </li>
    @endforeach
  </ul>
  <a id="btn-close" href="#" class="absolute right-8 top-8 btn inline-block hover:bg-allo">CLOSE</a>
</div>

<header class="banner flex w-full z-30 top-0">
  <nav class="w-full">
    <ul class="flex">
      <li class="li-brand inline-block sm:block p-4 sm:pt-8">
        <a id="brand" class="brand nav-item hover:text-allo"" href="{{ home_url('/') }}">
          {{ $frase }}
        </a>
      </li>
      @foreach ($primary_nav as $item)
      <li class="li-shop p-4 sm:pt-8">
        <a href="{{ $item->url }}" class="nav-item hover:text-allo">{{ $item->label }}</a>
      </li>
      @endforeach
      <li class="li-cart">
        <a href="/cart" class="cart-link flex nav-item hover:text-allo">
          <div class="cart bg-white flex items-center sm:items-start flex-shrink flex-grow pl-8 sm:pt-8 pr-8 justify-end">
            <span>cart</span>
          </div>
          <div class="hole flex flex-col">
            <div class="num-items font-serif text-azul font-bold bg-white text-center">
              {{ $items_cart }}
            </div>
            <div class="hole-cell">
              @svg('images.cart-hole-min')
            </div>
            <div class="espacio bg-white"></div>
          </div>
          <div class="espacio bg-white"></div>
        </a>
      </li>
      <li id="li-btn-menu" class="li-menu block absolute sm:static sm:pt-6">
        <a href="#" id="btn-menu" class="btn block hover:bg-allo">MENU</a>
      </li>
    </ul>
  </nav>
</header>
