@extends('layouts.app')


  @section('content')
  <main id="main" class="py-8 sm:mt-40 main">
    @dump($destacados)

    @if (count($cupones) !== 0)
      <section>
        @include('partials.cupones')
      </section>
    @endif

    @include('partials.slider')

@if ($destacados['has_posts'] = true)

    <section id="destacados">
      @foreach ($destacados['posts'] as $destacado)
        @include('partials.destacados-portada')
      @endforeach
    </section>

@endif

  </main>
  @endsection


@section('sidebar')
  @include('partials.sidebar')
@endsection
