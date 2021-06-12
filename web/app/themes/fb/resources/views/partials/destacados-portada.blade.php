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
          <img src="{!! $destacado['url'] !!}" srcset="{!! $destacado['srcset'] !!}" alt="{!! $destacado['alt'] !!}" sizes="(max-width: 768px) 100vw, 40vw">
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
            <img class="w-2/4" src="{!! $img['url'] !!}" alt="{!! $img['alt'] !!}" sizes="(max-width: 768px) 50vw, 20vw">
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
                <img class="" src="{!! $img['url'] !!}" alt="{!! $img['alt'] !!}" sizes="(max-width: 768px) 100vw, 40vw">
              </li>
              @endforeach

            </ul>
          </div>
        </div>
      </div>



      @endif
    </a>
  @endif

  {{-- REPETICION --}}
  @if ($destacado['formato'] === 'repeticion')
    <a href="{{ $destacado['link'] }}" class="flex flex-wrap w-full text-black bg-white md:justify-between md:flex-nowrap">
      <div class="img">
        <img src="{!! $destacado['url'] !!}" srcset="{!! $destacado['srcset'] !!}" alt="{!! $destacado['alt'] !!}"" sizes="">
      </div>
      <div class="relative w-full">
        <div class="overflow-hidden clip">
          <div class="interior">
            @for ($i = 0; $i < 200; $i++)
              <span class="my-6 text-2xl tracking-widest">{{ $destacado['title'] }}</span>
            @endfor
          </div>
        </div>

        @if ($destacado['post_type'] === 'product')
          <div class="absolute bottom-0 w-full p-6 font-serif text-3xl text-center bg-white artist">
            By {!! $destacado['artist'] !!}
          </div>
        @endif


      </div>
      @if ($destacado['has_img'])
    @endif
    </a>
  @endif


</article>

