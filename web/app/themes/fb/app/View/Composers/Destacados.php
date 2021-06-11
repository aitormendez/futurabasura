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
            'meta_key'		=> 'mostrar_en_portada',
            'meta_value'	=> '1'
        ]);



        $array = array_map(function ($post) {
            $formato = get_field('contenido_formato', $post->ID);

            $out = [
                'title'   => get_the_title($post->ID),
                'formato' => $formato,
            ];



            return $out;
        }, $posts);

        if (count($posts) !== 0) {
            $array['has_posts'] = true;
        } else {
            $array['has_posts'] = false;
        }

        return $array;
    }
}
