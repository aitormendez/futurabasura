<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Facades\Navi;

class Navigation extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.navigation',
        'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'primary_nav' => $this->navigation(),
            'info_nav' => $this->infoNavigation(),
            'items_cart' => $this->itemsInCart(),
        ];
    }

    /**
     * Returns the primary navigation.
     *
     * @return array
     */
    public function navigation()
    {
        if (Navi::build()->isEmpty()) {
            return;
        }

        return Navi::build()->toArray();
    }

    /**
     * Returns the info navigation.
     *
     * @return array
     */
    public function infoNavigation()
    {
        if (Navi::build()->isEmpty()) {
            return;
        }

        return Navi::build('info')->toArray();
    }

    /**
     * Returns number of items in cart.
     *
     * @return string
     */
    public function itemsInCart()
    {
        global $woocommerce;
        return $woocommerce->cart->cart_contents_count;
    }
}