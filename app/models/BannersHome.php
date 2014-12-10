<?php

class BannersHome extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banner_home';

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

    public static $rules = array
    (
        'banner' => 'required',
        'type' => 'required'
    );

    public function delete ()
    {
        File::delete(public_path() . '/uploads/banners_home/' . $this->banner);
        return parent::delete();
    }
}