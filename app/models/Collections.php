<?php

class Collections extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'collections';

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
        return $this->hasMany('CollectionsType');
    }

    public function banners()
    {
        return $this->hasMany('BannersHome');
    }

    public static $rules = array
    (
        'title' => 'required|between:1,255',
        'desription' => 'between:0,255'
    );
}