<div class="flex relative justify-center bg-white">
  <div id="fondo-slider" class="bg-black bg-cover w-100 md:w-3/4 absolute"></div>
  <div class="glide md:w-3/4">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">
        @foreach ($slider as $slide)
        <li class="glide__slide" formato="{!! $slide['formato'] !!}">
          <div class="prod w-100">
            <img src="{!! $slide['img']['url'] !!}" srcset="{!! $slide['srcset'] !!}" sizes="(max-width: 640px) 100vw, 80vw", alt="">
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
