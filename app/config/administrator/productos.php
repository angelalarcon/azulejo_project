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
        'description' => array(
            'title' => 'Descripción'
        ),
        'collection' => array(
            'title' => 'Colección',
            'relationship' => 'collections_type.collections',
            'select' => '(:table).title',
        ),
        'collections_type' => array(
            'title' => 'Sub colección',
            'relationship' => 'collections_type',
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
        'description' => array(
            'title' => 'Descripcion',
            'type' => 'wysiwyg',
        ),
        'collections_type' => array(
            'title' => 'Colección',
            'type' => 'relationship',
            'name_field' => 'collection_title',
        ),
    ),

);
