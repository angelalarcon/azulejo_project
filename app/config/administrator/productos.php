<?php

/**
 * Actors model config
 */

return array(

    'title' => 'Productos',

    'single' => 'producto',

    'model' => 'Productos',

    'form_width' => 600,

    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Titulo',
            'select' => "(:table).title",
        ),
        'img' => array(
            'title' => 'Imagen',
            'output' => '<img src="/uploads/productos/(:value)" height="100" />'
        ),
        'description_img' => array(
            'title' => 'Imagen para la Descripción',
            'output' => function ($value) {
                return $value!=''?"<img src='/uploads/description_productos/$value' height='100' />":'';
            },
        ),
        'description' => array(
            'title' => 'Descripción'
        ),
        'collection' => array(
            'title' => 'Colección',
            'relationship' => 'collectionsType.collections',
            'select' => '(:table).title',
        ),
        'collectionsType' => array(
            'title' => 'Sub colección',
            'relationship' => 'collectionsType',
            'select' => '(:table).title',
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
        'title' => array(
            'title' => 'Titulo',
            'type' => 'text',
        ),
        'img' => array(
            'title' => 'Imagen',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/productos/',
            'size_limit' => 1,
        ),
        'description_img' => array(
            'title' => 'Imagen para la descripción',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() .'/uploads/description_productos/',
            'sizes' => array(
                array(855, 640, 'crop', public_path() . '/uploads/description_productos/', 100)
            ),
            'description' => 'La imagen debe meidr 855x640 px',
            'size_limit' => 1,
        ),
        'description' => array(
            'title' => 'Descripcion',
            'type' => 'wysiwyg',
        ),
        'collectionsType' => array(
            'title' => 'Colección',
            'type' => 'relationship',
            'name_field' => 'collection_title',
        ),
    ),

);
