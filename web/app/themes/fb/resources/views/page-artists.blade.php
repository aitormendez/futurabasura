{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
  @endwhile

  @foreach ($artists as $artist)
    <a href="{{ $artist['permalink'] }}" role="article" class="flex flex-wrap justify-between p-6 mb-6 text-black bg-white article md:flex-nowrap md:pt-0 md:mb-2">
      <h2 class="mb-6 font-bold uppercase tracking-max md:pt-6 md:w-1/6 ">{{ $artist['name'] }}</h2>

      <div class="flex items-center justify-center avatar md:w-1/6 md:pt-6">
        @if ($artist['avatar'])
        <img src="{{ $artist['avatar']['url'] }}" srcset="{{ $artist['srcset'] }}" sizes="(max-width: 768px) 80vw, 20vw" alt="{{ $artist['name'] }}" class="rounded-full">
        @endif
      </div>

      <div class="flex-grow mb-6 text-sm bio md:mb-0 md:px-6 md:w-1/3 md:pt-6">
        {{ $artist['description'] }}
      </div>

      <div class="flex flex-wrap align-top productos md:w-1/6">
        @foreach ($artist['products'] as $prod)
            {!! $prod['prod_img'] !!}
        @endforeach
      </div>
    </a>

  @endforeach
@endsection
