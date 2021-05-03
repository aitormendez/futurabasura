<?php


/**
 * Shortcode con desplegable de artistas.
 *
 * @link https://stackoverflow.com/questions/56120607/make-a-dropdown-for-a-woocommerce-taxonomy-like-product-tags
 */

add_shortcode( 'product_tax_artist_dropdown', function( $atts ) {
    // Attributes
    $atts = shortcode_atts(
        [
        'hide_empty'   => '1', // or '0'
        'show_count'   => '1', // or '0'
        'orderby'      => 'name', // or 'order'
        'taxonomy'     => 'artist',
        ],
        $atts,
        'product_tax_artist_dropdown'
    );

    global $wp_query;

    $taxonomy      = $atts['taxonomy'];
    $taxonomy_name = get_taxonomy( $taxonomy )->labels->singular_name;

    ob_start();

    wp_dropdown_categories( [
        'hide_empty' => $atts['hide_empty'],
        'show_count' => $atts['show_count'],
        'orderby'    => $atts['orderby'],
        'selected'           => isset( $wp_query->query_vars[$taxonomy] ) ? $wp_query->query_vars[$taxonomy] : '',
        'show_option_none'   => sprintf( __( 'Select an %s', 'sage' ), $taxonomy_name ),
        'option_none_value'  => '',
        'value_field'        => 'slug',
        'taxonomy'   => $taxonomy,
        'name'       => $taxonomy,
        'class'      => 'dropdown_'.$taxonomy,
     ] );
    return ob_get_clean();
} );

/**
 * Rodear filtros de la tienda con un div. inicio.
 */
add_action( 'woocommerce_before_shop_loop', function() {
    echo '<div class="filtros relative flex justify-center flex-wrap p-6">';
}, 20 );


add_action( 'woocommerce_before_shop_loop', function() {
    echo '<form class="fb_artist-ordering woocommerce-ordering">';
    echo do_shortcode('[product_tax_artist_dropdown]');
    echo '</form>';
}, 20 );

/**
 * Rodear filtros de la tienda con un div. fin
 */
add_action( 'woocommerce_before_shop_loop', function() {
    echo '</div><div id="desplegable" class="relative"></div>';
}, 30 );


/**
 * pruebas product loop.
 *
 */

 add_filter('woocommerce_shop_loop_item_title', function() {

 });

/**
 * Eliminar estilos WC.
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Eliminar "Showing número de products".
 */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
