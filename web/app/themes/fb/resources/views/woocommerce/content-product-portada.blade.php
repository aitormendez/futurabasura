@php
defined( 'ABSPATH' ) || exit;
global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
@endphp

<li class="producto inline-block">
  <a href="{!! $producto['url'] !!}" class="block relative">
    <img src="{!! $producto['img_url'] !!}" alt="{!! $producto['title'] !!}" srcset="{!! $producto['img_srcset'] !!}" sizes="(max-width: 768px) 100vw, 25vw" class="block">
    <div class="hover bg-negro-fb absolute inset-0 p-4 uppercase text-white tracking-widest font-bold">
      <p class="mb-4">{{ $producto['title'] }}</p>
      <p class="mb-4">{{ $producto['artist'] }}</p>
      @if ($producto['has_format'])
       <p class="mb-4">{{ $producto['format'] }}</p>
      @endif

      @if ($producto['has_sale_prize'])
       <p class="mb-4 line-through text-red-600">{{ $producto['regular_prize'] }} €</p>
       <p class="mb-4">{{ $producto['sale_prize'] }} €</p>
      @else
      <p class="mb-4">{{ $producto['regular_prize'] }} €</p>
      @endif

    </div>

  </a>
</li>
