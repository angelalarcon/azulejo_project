<?php

class NosotrosController extends BaseController {

    public function get()
    {
        try {
            $menus = Collections::all();
            $images = ImagesNosotros::orderBy('id', 'desc')->take(3)->get();

            return View::make('nosotros')->with('page', '/nosotros')
                ->with('menu', $menus)
                ->with('images', $images);

        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }
}