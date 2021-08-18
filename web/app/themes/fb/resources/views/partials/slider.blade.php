@php $count = count($slider); @endphp

<div class="relative flex justify-center mb-4 bg-white slide-wrapper">
  <div id="fondo-slider" class="absolute w-screen bg-cover sm:w-3/4"></div>
  <div class="w-screen glide sm:w-3/4">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">
        @foreach ($slider as $slide)
        <li class="glide__slide" formato="{!! $slide['formato'] !!}">
          <a href="{!! $slide['url'] !!}" class="relative block prod">
            <div class="absolute top-0 bottom-0 p-8 uppercase bg-white bg-hover">
              <div class="leading-tight datos">
                <h2 class="mb-4 font-bold tracking-widest text-black">{!! $slide['nombre'] !!}</h2>
                <p class="mb-4 font-bold tracking-widest text-black">{!! $slide['artist'] !!}</p>
                <p class="mb-4 font-bold tracking-widest text-black">{!! $slide['formato_humano'] !!}</p>
                <p class="mb-4 font-bold tracking-widest text-black">{!! $slide['regular_price'] !!} €</p>
              </div>
            </div>
            @if (array_key_exists('img', $slide))
              <img class="relative" src="{!! $slide['img']['url'] !!}" srcset="{!! $slide['srcset'] !!}" sizes="(max-width: 640px) 100vw, 80vw" alt="">
            @endif
          </a>
        </li>
        @endforeach
      </ul>
    </div>

    <div class="glide__arrows d-none d-sm-block" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
        ←
      </button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
        →
      </button>
    </div>

    <div class="glide__bullets d-none d-sm-block" data-glide-el="controls[nav]">
      @for ($i = 0; $i < $count; $i++)
        <button class="glide__bullet" data-glide-dir="={{ $i }}">
          <div class="cruz-wrap">
            <div class="cruz">
              <div class="cruz1"></div>
              <div class="cruz2"></div>
              <div class="cruz3"></div>
            </div>
          </div>
        </button>
      @endfor
    </div>

  </div>
</div>
