<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Opciones extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Opciones';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Opciones del tema';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $options = new FieldsBuilder('options');

        $options
            ->addTab('Cabecera', ['placement' => 'left'])
                ->addRepeater('frases')
                    ->addText('frase')
                ->endRepeater()
            ->addTab('Slider', ['placement' => 'left'])
                ->addImage('fondo_50x70v', [
                    'label' => 'Fondo para el formato 50x70 vertical',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '2000',
                    'min_height' => '1135',
                    'max_width' => '2000',
                    'max_height' => '1135',
                ])
                ->addImage('fondo_50x70h', [
                    'label' => 'Fondo para el formato 50 x 70 horizontal',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '2000',
                    'min_height' => '1135',
                    'max_width' => '2000',
                    'max_height' => '1135',
                ])
                ->addImage('fondo_61x91v', [
                    'label' => 'Fondo para el formato 61 x 91 vertical',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '2000',
                    'min_height' => '1135',
                    'max_width' => '2000',
                    'max_height' => '1135',
                ])
                ->addImage('fondo_61x91h', [
                    'label' => 'Fondo para el formato 61 x 91 horizontal',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '2000',
                    'min_height' => '1135',
                    'max_width' => '2000',
                    'max_height' => '1135',
                ])
                ->addTab('Experiencia de compra', ['placement' => 'left'])
                    ->addTextarea('exp_car_totals', [
                        'label' => 'Car totals',
                        'instructions' => 'Esta nota aparecerá en el carrito de la compra.',
                        'rows' => '5',
                    ])
                    ->addTextarea('exp_form-billing', [
                        'label' => 'Form billing',
                        'instructions' => 'Esta nota aparecerá en.',
                        'rows' => '5',
                    ])
                    ->addTextarea('exp_form_shipping', [
                        'label' => 'Form Shipping',
                        'instructions' => 'Esta nota aparecerá en.',
                        'rows' => '5',
                    ])
                    ->addTextarea('exp_review_order', [
                        'label' => 'Review order',
                        'instructions' => 'Esta nota aparecerá en.',
                        'rows' => '5',
                    ])
                ->addTab('Footer', ['placement' => 'left'])
                    ->addColorPicker('footer_color', [
                        'label' => 'Color footer',
                        'instructions' => 'Se aplica en la mancha de color del footer y en la frase',
                        'default_value' => '#FFEE38',
                    ])
                    ->addText('footer_frase')

                ;

        return $options->build();
    }
}
