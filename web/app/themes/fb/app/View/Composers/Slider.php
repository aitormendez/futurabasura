<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Slider extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.slider',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'slider' => $this->slider(),
        ];
    }

    /**
     * Devuelve los productos seleccionados para el slider.
     *
     * @return array
     */
    public function slider()
    {
        $posts = get_posts([
            'post_type'		=> 'product',
            'meta_query'	=> [
                'key'	 	=> 'mostrar_en_slider',
                'value'	  	=> 1,
                'compare' 	=> '=',
            ]
        ]);

        $array = array_map(function ($post) {
            $img = get_field('img_producto', $post->ID);
            $formato = get_field('formato', $post->ID);

            if ($formato == '50x70v') {
                $formato_humano = '50 x 70 cm';
            } elseif ($formato == '50x70h') {
                $formato_humano = '70 x 50 cm';
            } elseif ($formato == '61x91v') {
                $formato_humano = '61 x 91 cm';
            } elseif ($formato == '61x91h') {
                $formato_humano = '91 x 61 cm';
            }

            $nombre = $post->post_title;
            $permalink = get_permalink($post->ID);
            $artist = get_the_terms($post->ID, 'artist')[0]->name;
            $product = wc_get_product($post->ID);
            $regular_price = $product->get_regular_price();

            return [
               'img'            => $img,
               'srcset'         => wp_get_attachment_image_srcset($img['ID']),
               'formato'        => $formato,
               'post'           => $post,
               'product'        => $product,
               'nombre'         => $nombre,
               'url'            => $permalink,
               'formato_humano' => $formato_humano,
               'artist' => $artist,
               'regular_price' => $regular_price,
            ];
        }, $posts);

        return $array;
    }

}
