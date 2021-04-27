<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Story extends Field
{
    public function fields()
    {
        $artist = new FieldsBuilder('story');

        $artist
            ->setLocation('post_type', '==', 'story');

        $artist
            ->addTab('Portada', ['placement' => 'left'])
                ->addTrueFalse('noticia_a_portada', [
                    'label' => 'Enviar a portada',
                    'instructions' => 'Si se activa, esta noticia será enviada a portada',
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => 'Está Activo',
                    'ui_off_text' => 'Desactivado',
                ])
                ->addRadio('noticia_formato', [
                    'label' => 'Formato de noticia',
                    'instructions' => 'elige el formato con el que se mostrará la noticia en portada',
                    'choices' => [
                        'imagen' => 'imagen',
                        'galeria' => 'Galeria',
                        'mosaico' => 'Mosaico',
                    ],
                    'allow_null' => 0,
                    'default_value' => '',
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                ])
                    ->conditional('noticia_a_portada', '==', '1')
                ->addImage('noticia_imagen_portada', [
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
                    ->conditional('noticia_formato', '==', 'imagen')
                ->addGallery('noticia_galeria_portada', [
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
                    ->conditional('noticia_formato', '==', 'galeria')
                ->addGallery('noticia_mosaico_portada', [
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
                    ->conditional('noticia_formato', '==', 'mosaico')
            ;

        return $artist->build();
    }
}
