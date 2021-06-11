@dump($destacado)
<article class="mb-6 {{ $destacado['post_type'] }} {{ $destacado['formato'] }}">

  {{-- IMAGEN --}}
  @if ($destacado['formato'] === 'imagen')
    <a href="{{ $destacado['link'] }}" class="flex flex-wrap w-full text-black bg-white md:justify-between md:flex-nowrap">
      <header class="w-full p-6 col-datos md:flex md:flex-col md:justify-between">
        <div class="arriba">
          <div class="font-serif text-lg font-bold capitalize meta">{{ $destacado['post_type'] }}</div>
          <h2 class="my-6 text-2xl tracking-widest">{{ $destacado['title'] }}</h2>
        </div>
        <div class="tracking-wide excerpt">
          {!! $destacado['excerpt'] !!}
        </div>
      </header>
      @if ($destacado['has_img'])
        <div class="img">
          <img src="{!! $destacado['url'] !!}" srcset="{!! $destacado['srcset'] !!}" alt="" sizes="">
        </div>
      @endif
    </a>
  @endif

  {{-- MOSAICO --}}
  @if ($destacado['formato'] === 'mosaico')
    <a href="{{ $destacado['link'] }}" class="flex flex-wrap w-full text-black bg-white md:justify-between md:flex-nowrap">
      <header class="w-full p-6 col-datos md:flex md:flex-col md:justify-between">
        <div class="arriba">
          <div class="font-serif text-lg font-bold capitalize meta">{{ $destacado['post_type'] }}</div>
          <h2 class="my-6 text-2xl tracking-widest">{{ $destacado['title'] }}</h2>
        </div>
        <div class="tracking-wide excerpt">
          {!! $destacado['excerpt'] !!}
        </div>
      </header>
      @if ($destacado['has_msc'])
        <div class="flex flex-wrap items-start msc">
          @foreach ($destacado['mosaico'] as $img)
            <img class="w-2/4" src="{{ $img['url'] }}" alt="">
          @endforeach
        </div>
      @endif
    </a>
  @endif

  {{-- GALERIA --}}
  @if ($destacado['formato'] === 'galeria')
    <a href="{{ $destacado['link'] }}" class="flex flex-wrap w-full text-black bg-white md:justify-between md:flex-nowrap">
      <header class="w-full p-6 col-datos md:flex md:flex-col md:justify-between">
        <div class="arriba">
          <div class="font-serif text-lg font-bold capitalize meta">{{ $destacado['post_type'] }}</div>
          <h2 class="my-6 text-2xl tracking-widest">{{ $destacado['title'] }}</h2>
        </div>
        <div class="tracking-wide excerpt">
          {!! $destacado['excerpt'] !!}
        </div>
      </header>
      @if ($destacado['has_gal'])

      <div class="contenedor-slider">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">

              @foreach ($destacado['galeria'] as $img)
              <li class="glide__slide">
                <img class="" src="{{ $img['url'] }}" alt="">
              </li>
              @endforeach

            </ul>
          </div>
        </div>
      </div>



      @endif
    </a>
  @endif

</article>

