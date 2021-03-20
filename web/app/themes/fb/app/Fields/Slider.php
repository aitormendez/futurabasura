<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Slider extends Field
{
    public function fields()
    {
        $artist = new FieldsBuilder('slider');

        $artist
            ->setLocation('post_type', '==', 'product');

        $artist
            ->addTrueFalse('mostrar_en_slider', [
                'label' => 'Mostrar en slider',
                'instructions' => 'activar para enviar este producto al slider de portada',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Mostrando',
                'ui_off_text' => 'Sin mostrar',
            ])
            ->addImage('img_producto', [
                'label' => 'Imagen de producto',
                'instructions' => 'Debe ser de 2000px x 1155px, un PNG con fondo transparente y que encaje en el fondo predefinido',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'png',
            ])
                ->conditional('mostrar_en_slider', '==', 1);


        return $artist->build();
    }
}
