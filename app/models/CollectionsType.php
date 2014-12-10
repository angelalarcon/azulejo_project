<?php

class CollectionsType extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'collections_type';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public function collections()
    {
        return $this->belongsTo('Collections');
    }

    public function getCollectionTitleAttribute()
    {
        return $this->collections->title . ' | ' . $this->title;
    }

    public function productos()
    {
        return $this->hasMany('Productos');
    }

    public static $rules = array
    (
        'description' => 'between:0,255',
        'collections_id' => 'required',
        'title' => 'required|between:1,255',

    );
}