<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Artist extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'tax-artist',
    ];

    /**
     * Data to be passed to view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'artisthero' => $this->artistHero(),
        ];
    }

    public function artistHero()
    {
        $term = get_queried_object();

        return $term;
    }

}
