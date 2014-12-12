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

    public function slugify()
    {
        $text = $this->title;
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');

        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public function collectionsType()
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
        File::delete(public_path() . '/uploads/description_productos/' . $this->description_img);
        return parent::delete();
    }
}