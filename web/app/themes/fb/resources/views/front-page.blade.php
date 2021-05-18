@extends('layouts.app')

<main id="main" class="py-8 sm:mt-40 main">
  @section('content')

    @if (count($cupones) !== 0)
      <section>
        @include('partials.cupones')
      </section>
    @endif

    @include('partials.slider')

  @endsection
</main>

@section('sidebar')
  @include('partials.sidebar')
@endsection
