<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Imágenes nosotros',

    'single' => 'Imagen nosotros',

    'model' => 'ImagesNosotros',

    /**
     * The display columns
     */
    'columns' => array(
        'image' => array(
            'title' => 'Imagen',
            'output' => '<img src="/uploads/images_nosotros/(:value)" height="150" />'
        ),
        'alt' => array(
            'title' => 'Texto alterno',
            'type' => 'text',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'image' => array(
            'title' => 'Imagen ',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/images_nosotros/',
            'size_limit' => 1,
            'sizes' => array(
                array(279, 186, 'crop', public_path() . '/uploads/images_nosotros/', 100),
            )
        ),
        'alt' => array(
            'title' => 'Texto alterno',
            'type' => 'text',
        )
    ),
);
