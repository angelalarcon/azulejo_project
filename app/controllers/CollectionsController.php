<?php

class CollectionsController extends BaseController {

    public function get($id)
    {
        try {
            $menus = Collections::all();

            $collection = Collections::find($id);

            return View::make('collections')->with('page', '/colecciones')
                ->with('menu', $menus)
                ->with('collection', $collection);

        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }
}