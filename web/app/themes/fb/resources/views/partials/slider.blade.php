@php $count = count($slider); @endphp

<div class="flex relative justify-center bg-white">
  <div id="fondo-slider" class="bg-cover w-screen sm:w-3/4 absolute"></div>
  <div class="glide w-screen sm:w-3/4">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">
        @foreach ($slider as $slide)
        <li class="glide__slide" formato="{!! $slide['formato'] !!}">
          <a href="{!! $slide['url'] !!}" class="prod relative block">
            <div class="bg-hover bg-white top-0 bottom-0 absolute p-8 uppercase">
              <div class="datos leading-tight">
                <h2 class="text-black font-bold tracking-widest mb-4">{!! $slide['nombre'] !!}</h2>
                <p class="text-black font-bold tracking-widest mb-4">{!! $slide['artist'] !!}</p>
                <p class="text-black font-bold tracking-widest mb-4">{!! $slide['formato_humano'] !!}</p>
                <p class="text-black font-bold tracking-widest mb-4">{!! $slide['regular_price'] !!} €</p>
              </div>
            </div>
            <img class="relative" src="{!! $slide['img']['url'] !!}" srcset="{!! $slide['srcset'] !!}" sizes="(max-width: 640px) 100vw, 80vw" alt="">
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
