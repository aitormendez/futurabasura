<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


/**
 * Register taxonomy API for WC
 *
 * @link https://stackoverflow.com/a/62681137/2986401
 */
add_action( 'rest_api_init', function () {
    register_rest_field('product', "artist", array(
        'get_callback'    => __NAMESPACE__ . '\\product_get_callback',
        // 'update_callback'    => __NAMESPACE__ . '\\product_update_callback',
        'schema' => null,
    ));
} );

/**
 * Get Taxonomy record in wc REST API
 *
 * @link https://stackoverflow.com/a/62681137/2986401
 */
function product_get_callback($post, $attr, $request, $object_type)
{
    $terms = array();

    // Get terms
    foreach (wp_get_post_terms( $post[ 'id' ], 'artist') as $term) {
        $terms[] = array(
            'id'        => $term->term_id,
            'name'      => $term->name,
            'slug'      => $term->slug,
        );
    }
    return $terms;
}
