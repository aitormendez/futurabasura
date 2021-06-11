@dump($destacado)
<article>

  @if ($destacado['formato'] === 'imagen')

  <header class="col-datos">
    <div class="meta">{{ $destacado['post_type'] }}</div>
    <h2>{{ $destacado['title'] }}</h2>
    <div class="excerpt">
      {!! $destacado['excerpt'] !!}
    </div>
  </header>

  @endif

</article>

