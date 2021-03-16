<nav>
  <ul class="flex flex-wrap">
    @foreach ($primary_nav as $item)
    <li class="inline-block">
      <a href="{{ $item->url }}" class="sombra text-2xl text-white uppercase hover:text-allo">{{ $item->label }}</a>
    </li>
    @endforeach
    <li class="inline-block">
      <a href="/cart" class="relative sombra text-2xl text-white uppercase hover:text-allo">
        <span class>cart</span>
        <span>{{ $items_cart }}</span>
        @svg('images.cart-hole', 'absolute')
      </a>
    </li>
  </ul>
</nav>
