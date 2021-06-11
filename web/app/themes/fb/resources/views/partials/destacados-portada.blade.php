@dump($destacado)
<article class="mb-6">
  <a href="{{ $destacado['link'] }}" class="flex flex-wrap w-full text-black bg-white md:justify-between md:flex-nowrap">
    @if ($destacado['formato'] === 'imagen')

      <header class="w-full p-6 col-datos md:flex md:flex-col md:justify-between">
        <div class="arriba">
          <div class="font-serif text-lg font-bold capitalize meta">{{ $destacado['post_type'] }}</div>
          <h2 class="my-6 text-2xl tracking-widest">{{ $destacado['title'] }}</h2>
        </div>
        <div class="tracking-wide excerpt">
          {!! $destacado['excerpt'] !!}
        </div>
      </header>
      <div class="img">
        <img src="{!! $destacado['url'] !!}" srcset="{!! $destacado['srcset'] !!}" alt="" sizes="">
      </div>

    @endif
  </a>

</article>

