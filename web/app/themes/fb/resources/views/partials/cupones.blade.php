@foreach ($cupones as $cupon)
  <div class="cupon-wrap bg-allo flex justify-center my-4">
    <div class="cupon inline-flex justify-between w-5/6 sm:w-1/2 md:2/6 lg:3/12 xl:2/12">
      <div class="punteado bg-punteado"></div>
      <div class="textos p-3 flex flex-col justify-center">
        <h3 class="font-bold text-center">{{ $cupon->post_title }}</h3>
        <div class="excerpt text-center">
          {{ $cupon->post_excerpt }}
        </div>
      </div>
      <div class="punteado bg-punteado"></div>
    </div>
  </div>
@endforeach
