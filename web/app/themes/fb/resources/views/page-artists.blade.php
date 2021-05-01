{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
  @endwhile

  @foreach ($artists as $artist)
    <a href="{{ $artist['permalink'] }}" role="article" class="text-black">
      <h2 class="font-bold uppercase tracking-max">{{ $artist['name'] }}</h2>
      <div class="bio text-sm">
        {{ $artist['description'] }}
      </div>

      <div class="avatar">
        @if ($artist['avatar'])
        <img src="{{ $artist['avatar']['url'] }}" srcset="{{ $artist['srcset'] }}" sizes="(max-width: 791px) 80vw, 20vw" alt="{{ $artist['name'] }}">
        @endif
      </div>

      <div class="productos">
        @foreach ($artist['products'] as $prod)
            {!! $prod['prod_img'] !!}
        @endforeach
      </div>
    </a>

  @endforeach
@endsection
