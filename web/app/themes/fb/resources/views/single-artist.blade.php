<main id="main" class="py-8 sm:mt-40 main">
  @extends('layouts.app')

  @section('content')
    @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    @endwhile
  @endsection
</main>
