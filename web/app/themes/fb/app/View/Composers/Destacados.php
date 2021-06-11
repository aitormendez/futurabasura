<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Destacados extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'destacados' => $this->destacados(),
        ];
    }

    public function destacados()
    {

        $posts = get_posts([
            'posts_per_page'   => -1,
            'post_type'        => ['product', 'story', 'project'],
            'post_status'      => 'publish',
            'meta_key'		   => 'mostrar_en_portada',
            'meta_value'	   => '1'
        ]);



        $posts_array = array_map(function ($post) {
            $formato = get_field('contenido_formato', $post->ID);

            $out = [
                'post_type' => get_post_type( $post->ID ),
                'title'   => get_the_title($post->ID),
                'formato' => $formato,
                'excerpt' => get_the_excerpt( $post->ID ),
            ];

            if ($formato === 'imagen' || $formato === 'repeticion') {

                $img = get_field ('contenido_imagen_portada', $post->ID);
                if ($img) {
                    $out['has_img'] = true;
                    $out['url'] = $img['url'];
                    $out['srcset'] = wp_get_attachment_image_srcset($img['ID']);
                } else {
                    $out['has_img'] = false;
                }

            } elseif ($formato === 'mosaico') {

                $mosaico = get_field ('contenido_mosaico_portada', $post->ID);
                if ($mosaico) {
                    $out['has_msc'] = true;

                    $msc = array_map(function($img) {
                        $srcset = wp_get_attachment_image_srcset($img['ID']);
                        return [
                            'alt'    => $img['alt'],
                            'url'    => $img['url'],
                            'srcset' => $srcset,
                        ];
                    }, $mosaico);

                    $out['mosaico'] = $msc;
                } else {
                    $out['has_msc'] = false;
                }

            } elseif ($formato === 'galeria') {

                $galeria = get_field ('contenido_galeria_portada', $post->ID);
                if ($galeria) {
                    $out['has_gal'] = true;

                    $msc = array_map(function($img) {
                        $srcset = wp_get_attachment_image_srcset($img['ID']);
                        return [
                            'alt'    => $img['alt'],
                            'url'    => $img['url'],
                            'srcset' => $srcset,
                        ];
                    }, $galeria);

                    $out['galeria'] = $msc;
                } else {
                    $out['has_gal'] = false;
                }

            }

            return $out;
        }, $posts);

        $output = [
            'posts' => $posts_array,
        ];

        if (count($posts) !== 0) {
            $output['has_posts'] = true;
        } else {
            $output['has_posts'] = false;
        }

        return $output;
    }
}
