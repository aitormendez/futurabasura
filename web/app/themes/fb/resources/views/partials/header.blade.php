<header class="banner flex w-full">
  <nav class="w-full">
    <ul class="flex">
      <li class="li-brand inline-block sm:block p-4 sm:pt-8">
        <a class="brand nav-item hover:text-allo"" href="{{ home_url('/') }}">
          {{ $siteName }}
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
      <li id="btn-menu" class="li-menu block absolute sm:static sm:pt-6">
        <a href="#" class="btn block hover:bg-allo">MENU</a>
      </li>
    </ul>
  </nav>

</header>
