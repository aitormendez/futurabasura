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

            return [
               'img'     => $img,
               'srcset'  => wp_get_attachment_image_srcset($img['ID']),
               'formato' => $formato,
            ];
        }, $posts);

        return $array;
    }

}
