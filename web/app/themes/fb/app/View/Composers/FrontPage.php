<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class FrontPage extends Composer
{
        /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front_page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            // 'primary_nav' => $this->navigation(),
        ];
    }
}
