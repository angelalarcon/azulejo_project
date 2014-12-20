<?php

/**
 * Actors model config
 */



return array(

    'title' => 'Imágenes nosotros',

    'single' => 'Imagen nosotros',

    'model' => 'NosotrosImage',

    /**
     * The display columns
     */
    'columns' => array(
        'photo' => array(
            'title' => 'Foto',
            'output' => '<img src="/uploads/nosotros/(:value)" height="100" />'
        )
    ),


    /**
     * The editable fields
     */
    'edit_fields' => array(
        'photo' => array(
            'title' => 'Foto',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/nosotros/',
            'size_limit' => 1,
            'description' => 'Imagenes que apareceran en la vista Nosotros.'
        )
    ),

);
