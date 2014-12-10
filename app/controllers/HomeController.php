<?php

class HomeController extends BaseController {

    public function get()
    {
        try {
            $menus = Collections::all();
            $banners = array(
                'sp'=>BannersHome::where('type', 'sp')->orderBy('id', 'desc')->first(),
                'cd'=>BannersHome::where('type', 'cd')->orderBy('id', 'desc')->first(),
                'ci'=>BannersHome::where('type', 'ci')->orderBy('id', 'desc')->first(),
                'in'=>BannersHome::where('type', 'in')->orderBy('id', 'desc')->first(),
            );

            return View::make('index')->with('page', '/')->with('menu', $menus)->with('banners', $banners);
        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }

}