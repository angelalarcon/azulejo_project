<?php

/**
 * Actors model config
 */
return array(

    'title' => 'Sub Coleciones',

    'single' => 'sub coleción',

    'model' => 'CollectionsType',


    /**
     * The display columns
     */
    'columns' => array(
        'title' => array(
            'title' => 'Titulo'
        ),
        'description' => array(
            'title' => 'Descripción'
        ),
        'collections' => array(
            'title' => 'Colección',
            'relationship' => 'collections',
            'select' => 'title',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'collections' => array(
            'title' => 'Colección',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
    ),

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
        ),
        'collections' => array(
            'title' => 'Colección',
            'type' => 'relationship',
            'name_field' => 'title'
        ),
    ),

);
