<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Artist extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $artist = new FieldsBuilder('example');

        $artist
            ->setLocation('taxonomy', '==', 'artist');

        $artist
            ->addImage('artist_avatar', [
                'label' => 'Foto del artista',
                'instructions' => 'Estas instrucciones quedan pendientes de redactar',
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ]);

        return $artist->build();
    }
}
