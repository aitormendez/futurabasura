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



// add_filter('manage_artist_custom_column', function ($content,$column_name,$term_id){
//     $term= get_term($term_id, 'artist');
//     switch ($column_name) {
//         case 'artist_avatar':
//             $avatar = get_field('artist_avatar', $term);
//             // var_dump($avatar["url"]);
//             $content = '$avatar["url"]';
//             break;
//         default:
//             break;
//     }
//     return $content;
// },10,3);

// add_filter( 'manage_edit-artist_columns', function ( $columns ) {
//     $columns['artist_avatar'] = __('Artist Avatar', 'sage');
//     return $columns;
// } );


