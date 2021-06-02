<article @php(post_class())>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}" class="page-header-font">
        {!! $title !!}
      </a>
    </h2>

    @thumbnail('large')

    @include('partials/entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
