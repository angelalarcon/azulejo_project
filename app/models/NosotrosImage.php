<?php

class NosotrosImage extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nosotros_image';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public static $rules = array
    (
        'photo' => 'required',
    );

    public function delete ()
    {
        File::delete(public_path() . '/uploads/nosotros/' . $this->banner);
        return parent::delete();
    }
}