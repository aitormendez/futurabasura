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
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ])
                ->addImage('fondo_50x70h', [
                    'label' => 'Fondo para el formato 50 x 70 horizontal',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ])
                ->addImage('fondo_61x91v', [
                    'label' => 'Fondo para el formato 61 x 91 vertical',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ])
                ->addImage('fondo_61x91h', [
                    'label' => 'Fondo para el formato 61 x 91 horizontal',
                    'instructions' => 'Debe tener unas dimensiones de 2000px x 1135px. Aparecerá como fondo en los items del slider que tengan este formato asignado.',
                    'required' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ]);

        return $options->build();
    }
}
