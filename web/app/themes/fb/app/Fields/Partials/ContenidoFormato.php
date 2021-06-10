<?php

// namespace App\Fields\Partials;

// use Log1x\AcfComposer\Partial;
// use StoutLogic\AcfBuilder\FieldsBuilder;

// class ContenidoFormato extends Partial
// {
//     /**
//      * The partial field group.
//      *
//      * @return array
//      */
//     public function fields()
//     {
//         $builder = new FieldsBuilder('formato_del_contenido');

//         $builder
//             ->addRadio('contenido_formato', [
//                 'label' => 'Formato de contenido',
//                 'instructions' => 'elige el formato con el que se mostrará el contenido en portada',
//                 'choices' => [
//                     'imagen' => 'imagen',
//                     'galeria' => 'Galeria',
//                     'mosaico' => 'Mosaico',
//                     'repeticion' => 'Repetición',
//                 ],
//                 'allow_null' => 0,
//                 'default_value' => '',
//                 'layout' => 'horizontal',
//                 'return_format' => 'value',
//             ])
//                 ->conditional('mostrar_en_portada', '==', '1')
//         ;

//         return $builder;
//     }
// }
