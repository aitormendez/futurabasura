<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleProduct extends Composer
{
    protected static $views = [
        'woocommerce.content-single-product',
    ];

    public function with()
    {
        return [
            'galeria' => $this->galeria(),
        ];
    }

    public function galeria()
    {
        global $product;
        $attachment_ids = $product->get_gallery_image_ids();

        $output = array_map( function( $att_id ) {

            $meta = get_post_meta( $att_id );

            $array = [
                'att_url'    => wp_get_attachment_url( $att_id ),
                'att_srcset' => wp_get_attachment_image_srcset( $att_id ),
                'has_alt'    => false,
                'meta'       => $meta,
            ];

            if (array_key_exists('_wp_attachment_image_alt', $meta)) {
                $array['has_alt'] = true;
                $array['alt'] = $meta['_wp_attachment_image_alt'];
            }
            return $array;

        }, $attachment_ids);

        return $output;
    }

}
