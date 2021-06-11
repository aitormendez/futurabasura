@dump($destacado)
<article>

  @if ($destacado['formato'] === 'imagen')

  <header class="col-datos">
    <h2>{{ $destacado['title'] }}</h2>
    <div class="excerpt">

    </div>
  </header>

  @endif

</article>

