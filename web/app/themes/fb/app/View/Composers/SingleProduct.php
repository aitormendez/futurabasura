<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleProduct extends Composer
{
    protected static $views = [
        'woocommerce.content-single-product',
        'woocommerce.single-product.add-to-cart.simple',
    ];

    public function with()
    {
        return [
            'galeria' => $this->galeria(),
            'artista' => $this->artista(),
            'precio' => $this->precio(),
            'variaciones' => $this->variaciones(),
        ];
    }

    public function artista()
    {
        global $post;
        $artist = get_the_terms($post->ID, 'artist');
        return [
            'artista' => $artist[0],
            'link'    => get_term_link($artist[0]->term_id),
        ] ;
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

    public function precio()
    {
        global $product;

        $output = [
            'product'       => $product,
            'price' => $product->get_price(),
            'regular_price' => $product->get_regular_price(),
            'is_on_sale'    => false,
        ];

        if ( $product->is_on_sale() )  {
            $output['is_on_sale'] = true;
            $output['sale_price'] = $product->get_sale_price();
        }

        return $output;

    }

    public function variaciones()
    {
        global $product;
        $product_type = $product->get_type();

        if ($product_type == 'variable') {

            $product_variations_list = $product->get_available_variations();

            $output = [];

            foreach ($product_variations_list as $idx => $variation) {
                $variation_id = $variation["variation_id"];
                $variable_product = wc_get_product($variation_id);
                $variation_obj = wc_get_product( $variation_id );

                $output['variation_' . $idx] = [
                    'product_type'  => $product_type,
                    'variation_id'  => $variation_id,
                    'variation_obj' => $variation_obj,
                    'size_slug'     => implode(', ', $variation["attributes"]),
                    'size'          => $variation_obj->get_attribute( 'format' ),
                    'regular_price' => $variable_product->get_regular_price(),
                    'sale_price'    => $variable_product->get_sale_price(),
                ];
            }

            return $output;

        } else {

            $output = [];
            $output[0] = [
                'product_type' => $product_type,
                'size'         => $product->get_attribute('format'),
            ];

            return $output;
        }

    }



}
