<?php

class NosotrosController extends BaseController {

    public function get()
    {
        try {
            $menus = Collections::all();
            $nosotros_images = NosotrosImage::all();

            return View::make('nosotros')->with('page', '/nosotros')
                ->with('menu', $menus)->with('nosotros_images', $nosotros_images);

        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }
}