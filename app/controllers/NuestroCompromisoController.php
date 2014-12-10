<?php

class NuestroCompromisoController extends BaseController {

    public function get()
    {
        try {
            $menus = Collections::all();

            return View::make('nuestro_compromiso')->with('page', '/nuestro-compromiso')->with('menu', $menus);
        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }

}