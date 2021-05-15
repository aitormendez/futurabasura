{{--
  Template Name: Artists Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
  @endwhile

  @foreach ($artists as $artist)
    <a href="{{ $artist['permalink'] }}" role="article" class="article flex flex-wrap md:flex-nowrap p-6 md:pt-0 text-black bg-white mb-6 md:mb-2 justify-between">
      <h2 class="font-bold uppercase tracking-max mb-6 md:pt-6 md:w-1/6 ">{{ $artist['name'] }}</h2>

      <div class="avatar flex items-center justify-center md:w-1/6 md:pt-6">
        @if ($artist['avatar'])
        <img src="{{ $artist['avatar']['url'] }}" srcset="{{ $artist['srcset'] }}" sizes="(max-width: 768px) 80vw, 20vw" alt="{{ $artist['name'] }}" class="rounded-full">
        @endif
      </div>

      <div class="bio text-sm mb-6 md:mb-0 md:px-6 md:w-1/3 md:pt-6 flex-grow">
        {{ $artist['description'] }}
      </div>

      <div class="productos md:w-1/6 flex flex-wrap align-top">
        @foreach ($artist['products'] as $prod)
            {!! $prod['prod_img'] !!}
        @endforeach
      </div>
    </a>

  @endforeach
@endsection
