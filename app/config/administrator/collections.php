<?php

/**
 * Actors model config
 */
return array(

    'title' => 'Colecciones',

    'single' => 'colección',

    'model' => 'Collections',

    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Titulo',
            'select' => "(:table).title",
        ),
        'description' => array(
            'title' => 'Descripción'
        )
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
        'description' => array(
            'title' => 'Descripcion',
            'type' => 'wysiwyg',
        )
    ),

);
