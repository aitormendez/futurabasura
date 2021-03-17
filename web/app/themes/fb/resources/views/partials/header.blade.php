<header class="banner flex">
  <nav class="w-full">
    <ul class="grid">
      <li class="li-brand inline-block">
        <a class="brand nav-item hover:text-allo"" href="{{ home_url('/') }}">
          {{ $siteName }}
        </a>
      </li>
      @foreach ($primary_nav as $item)
      <li class="">
        <a href="{{ $item->url }}" class="nav-item hover:text-allo">{{ $item->label }}</a>
      </li>
      @endforeach
      <li class="li-cart w-full ">
        <a href="/cart" class="cart-link flex nav-item hover:text-allo">
          <div class="cart bg-white flex items-center flex-shrink flex-grow pl-8">
            <span>cart</span>
          </div>
          <div class="hole flex flex-col">
            <div class="num-items font-serif text-azul font-bold bg-white text-center">
              {{ $items_cart }}
            </div>
            <div>
              @svg('images.cart-hole-min')
            </div>
            <div class="espacio bg-white"></div>
          </div>
          <div class="espacio bg-white"></div>
        </a>
      </li>
      <li class="menu inline-block">
        <button href="#" class="btn block">MENU</button>
      </li>
    </ul>
  </nav>

</header>
