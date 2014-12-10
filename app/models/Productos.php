<?php

class Productos extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public function collections_type()
    {
        return $this->belongsTo('CollectionsType');
    }

    public static $rules = array
    (
        'img' => 'required',
        'title' => 'required|between:1,255',
        'description' => 'between:0,255',
        'collections_type_id' => 'required',
    );

    public function delete ()
    {
        File::delete(public_path() . '/uploads/productos/' . $this->img);
        return parent::delete();
    }
}