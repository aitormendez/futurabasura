@extends('layouts.app')


  @section('content')
  <main id="main" class="py-8 sm:mt-40 main">

    @if (count($cupones) !== 0)
      <section>
        @include('partials.cupones')
      </section>
    @endif

    @include('partials.slider')
@dump($destacados)

@if ($destacados['has_posts'] = true)
    <section id="destacados">
      @include('partials.destacados-portada')
    </section>
@endif

  </main>
  @endsection


@section('sidebar')
  @include('partials.sidebar')
@endsection
