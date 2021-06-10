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
            ]);

        return $aportada;
    }
}
