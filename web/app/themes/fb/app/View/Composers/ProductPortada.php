<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProductPortada extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'woocommerce.content-product-portada',
    ];

    public function with()
    {
        return [
            'producto' => $this->producto(),
        ];
    }

    public function producto()
    {
        $product_id = get_the_ID();
        $product = wc_get_product($product_id);
        $product_img_id = get_post_thumbnail_id($product_id);
        $sale_prize = $product->get_sale_price();
        $format = $product->get_attribute( 'format' );

        $output = [
            'title'          => $product->get_title(),
            'url'            => get_permalink($product_id),
            'img_url'        => get_the_post_thumbnail_url($product_id, 'large'),
            'img_srcset'     => wp_get_attachment_image_srcset($product_img_id),
            'artist'         => get_the_terms($product_id, 'artist')[0]->name,
            'regular_prize'  => $product->get_regular_price(),
            'has_format'     => false,
            'has_sale_prize' => false,
        ];

        if ($sale_prize) {
            $output['has_sale_prize'] = true;
            $output['sale_prize'] = $sale_prize;
        }

        if ($format) {
            $output['has_format'] = true;
            $output['format'] = $format;
        }

        return $output;
    }


}
