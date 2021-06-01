@php
    /**
     * The Template for displaying product archives, including the main shop page which is a post type archive
     *
     * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
     *
     * HOWEVER, on occasion WooCommerce will need to update template files and you
     * (the theme developer) will need to copy the new files to your theme to
     * maintain compatibility. We try to do this as little as possible, but it does
     * happen. When this occurs the version of the template file will be bumped and
     * the readme will list any important changes.
     *
     * @see https://docs.woocommerce.com/document/template-structure/
     * @package WooCommerce\Templates
     * @version 3.4.0
     */
@endphp

@extends('layouts.app')

@section('content')
  <main id="main" class="py-8 sm:mt-40 main">
    @if (is_tax('artist'))
     <h1>artist</h1>
     @dump($artist_hero)
    @endif
    @if ( woocommerce_product_loop() )

        @php
            /**
            * Hook: woocommerce_before_shop_loop.
            *
            * @hooked woocommerce_output_all_notices - 10
            * @hooked woocommerce_result_count - 20
            * @hooked woocommerce_catalog_ordering - 30
            */

            do_action( 'woocommerce_before_shop_loop' );

            // woocommerce_product_loop_start();
        @endphp
        <ul class="flex flex-wrap items-center justify-center infinite-scroll-container">
        @if ( wc_get_loop_prop( 'total' ) )
            @while ( have_posts() )
                @php
                    the_post();

                    /**
                    * Hook: woocommerce_shop_loop.
                    */
                    do_action( 'woocommerce_shop_loop' );
                @endphp
                @include('woocommerce.content-product-portada')
            @endwhile
        @endif
        </ul>
        @php
            // woocommerce_product_loop_end();

            /**
            * Hook: woocommerce_after_shop_loop.
            *
            * @hooked woocommerce_pagination - 10
            */
            do_action( 'woocommerce_after_shop_loop' );
        @endphp
    @else

        @php
            /**
            * Hook: woocommerce_no_products_found.
            *
            * @hooked wc_no_products_found - 10
            */
            do_action( 'woocommerce_no_products_found' );
        @endphp

    @endif

    @php

        /**
         * Hook: woocommerce_after_main_content.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action( 'woocommerce_after_main_content' );

        /**
         * Hook: woocommerce_sidebar.
         *
         * @hooked woocommerce_get_sidebar - 10
         */
        // do_action( 'woocommerce_sidebar' );
    @endphp
  </main>
@endsection

