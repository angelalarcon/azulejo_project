<?php

class ProductosController extends BaseController {

    public function get($id)
    {
        //try {
            $menus = Collections::all();

            $producto = Productos::find($id);
            $collection = $producto->collectionsType->collections;

            return View::make('productos')->with('page', '/colecciones')
                ->with('menu', $menus)
                ->with('collection', $collection)
                ->with('producto', $producto);

        /*}
        catch(Exception $e)
        {
            App::abort(404);
        }*/
    }
}