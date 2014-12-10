<?php

class ImagesNosotros extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images_nosotros';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public static $rules = array
    (
        'image' => 'required',
        'alt' => 'between:0,255'
    );

    public function delete ()
    {
        File::delete(public_path() . '/uploads/images_nosotros/' . $this->image);
        return parent::delete();
    }
}