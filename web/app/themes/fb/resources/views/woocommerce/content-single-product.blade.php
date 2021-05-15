@php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
@endphp

@if (post_password_required())
  {!! get_the_password_form() !!}
  @php return; @endphp
@endif

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'flex flex-wrap', $product ); ?>>

  @php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	@endphp




  <div class="glide-wrap w-full md:w-1/2 md:order-2">
    <div id="glide" class="g-gallery relative">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
        @foreach ($galeria as $item)
        <li class="glide__slide slide">
          <img src="{!! $item['att_url'] !!}" srcset="{!! $item['att_srcset'] !!}" @if ($item['has_alt']) alt="{!! $item['alt'][0] !!}" @endif sizes="(max-width: 792px) 100%, 50%">
        </li>
        @endforeach
        </ul>
      </div>
      <div id="indice" class="absolute w-20 text-center p-3 bg-white right-0 bottom-0"></div>
    </div>
  </div>




	<div class="summary entry-summary md:w-1/2 flex flex-col items-center justify-end">

    <h2 class="artista uppercase tracking-max mb-6"><a href="{{ $artista['link'] }}">{{ $artista['artista']->name }}</a></h2>

    <h1 class="product_title entry-title mb-6 font-bold tracking-max">{!! get_the_title() !!}</h1>

    <div class="excerpt text-center mb-6">{!! $post->post_excerpt !!}</div>



    @php
  		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5 REMOVED
		 * @hooked woocommerce_template_single_rating - 10 REMOVED
		 * @hooked woocommerce_template_single_price - 10 REMOVED
		 * @hooked woocommerce_template_single_excerpt - 20 REMOVED
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		@endphp


	</div>

	@php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	@endphp
</div>

@php do_action( 'woocommerce_after_single_product' ); @endphp