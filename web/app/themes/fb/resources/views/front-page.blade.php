@extends('layouts.app')

@section('content')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @if (count($cupones) !== 0)
    <section>
      @include('partials.cupones')
    </section>
  @endif

  @include('partials.slider')

  @query([
    'post_type' => 'post'
  ])

  <section class="posts prose">
    @posts
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endposts
  </section>

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

@endsection
