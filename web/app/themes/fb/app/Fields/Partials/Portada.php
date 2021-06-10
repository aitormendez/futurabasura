<?php

namespace App\Fields\Partials;

use Log1x\AcfComposer\Partial;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Portada extends Partial
{
    /**
     * The partial field group.
     *
     * @return array
     */
    public function fields()
    {
        $aportada = new FieldsBuilder('destacar_en_portada');

        $aportada
            ->addTrueFalse('mostrar_en_portada', [
                'label' => 'Mostrar en portada',
                'instructions' => 'activar para destacar este contenido en la portada',
                'required' => 0,
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Mostrando',
                'ui_off_text' => 'Sin mostrar',
            ])
            ->addRadio('contenido_formato', [
                'label' => 'Formato de contenido',
                'instructions' => 'elige el formato con el que se mostrará el contenido en portada',
                'choices' => [
                    'imagen' => 'imagen',
                    'galeria' => 'Galeria',
                    'mosaico' => 'Mosaico',
                    'repeticion' => 'Repetición',
                ],
                'allow_null' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
                'return_format' => 'value',
            ])
                ->conditional('mostrar_en_portada', '==', '1')
            ->addImage('contenido_imagen_portada', [
                'label' => 'imagen para portada',
                'instructions' => 'Debe tener un formato de 2000 px x 1500 px',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '2000',
                'min_height' => '1500',
                'max_width' => '2000',
                'max_height' => '1500',
            ])
                ->conditional('contenido_formato', '==', 'imagen')
                ->or('contenido_formato', '==', 'repeticion')
            ->addGallery('contenido_galeria_portada', [
                'label' => 'Galería',
                'instructions' => 'Introduce las imágenes de la galería. 1500 px x 1500 px',
                'return_format' => 'array',
                'min' => '',
                'max' => '',
                'insert' => 'append',
                'library' => 'all',
                'min_width' => '1500',
                'min_height' => '1500',
                'max_width' => '1500',
                'max_height' => '1500',
            ])
                ->conditional('contenido_formato', '==', 'galeria')
            ->addGallery('contenido_mosaico_portada', [
                'label' => 'Galería',
                'instructions' => 'Introduce las cuatro imágenes del mosaico. 1500 px x 1500 px',
                'return_format' => 'array',
                'min' => '',
                'max' => '4',
                'insert' => 'append',
                'library' => 'all',
                'min_width' => '1500',
                'min_height' => '1500',
                'max_width' => '1500',
                'max_height' => '1500',
            ])
                ->conditional('contenido_formato', '==', 'mosaico')
        ;

        return $aportada;
    }
}
