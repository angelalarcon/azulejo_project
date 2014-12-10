<?php

class NosotrosController extends BaseController {

    public function get()
    {
        try {
            $menus = Collections::all();

            return View::make('nosotros')->with('page', '/nosotros')
                ->with('menu', $menus);

        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }
}