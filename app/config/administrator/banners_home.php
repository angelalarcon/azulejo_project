<?php

/**
 * Actors model config
 */

global $enum;
$enum = array(
    'sp' => 'Superior',
    'cd' => 'Central derecha',
    'ci' => 'Central izquierda',
    'in' => 'Inferior'
);

return array(

    'title' => 'Imágenes home',

    'single' => 'Imagen home',

    'model' => 'BannersHome',

    /**
     * The display columns
     */
    'columns' => array(
        'banner' => array(
            'title' => 'Banner',
            'output' => '<img src="/uploads/banners_home/(:value)" height="100" />'
        ),
        'type' => array(
            'title' => 'Tipo',
            'select' => "(:table).type",
            'output' => function ($value) {
                global $enum;
                return $enum[$value];
            }
        ),
        'collections' => array(
            'title' => 'Colección',
            'relationship' => 'collections',
            'select' => 'title',
        ),
        'url' => array(
            'title' => 'Url'
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'type' => array(
            'title' => 'Tipo',
            'type' => 'enum',
            'options' => $enum,
        )
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'banner' => array(
            'title' => 'Banner de fondo',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/banners_home/',
            'size_limit' => 1,
            'description' => 'Seleccionar la posición en el home. La imagen superior del home puede tener asociado una colección.'
        ),
        'type' => array(
            'title' => 'Tipo',
            'type' => 'enum',
            'options' => $enum,
        ),
        'collections' => array(
            'title' => 'Colección',
            'type' => 'relationship',
            'name_field' => 'title'
        ),
        'url' => array(
            'title' => 'Url',
            'type' => 'text',
        ),
    ),

);
