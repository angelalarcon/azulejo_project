<?php

class ContactoController extends BaseController {

    public $restful = true;

    public function get()
    {
        try {
            $menus = Collections::all();

            return View::make('contactanos')->with('page', '/contactanos')->with('menu', $menus);
        }
        catch(Exception $e)
        {
            App::abort(404);
        }
    }

    public function post()
    {
        try{
            $rules = array(
                'nombre' => 'Required',
                'correo' => 'Required|Email',
                'apellido' => 'Required',
                'empresa' => 'Required',
                'comentario' => 'Required'
            );

            $v = Validator::make(Input::get(), $rules);

            if(!$v->passes()){
                return Response::json(array('success' => false,
                    'msj' => 2,
                    'error' => 'Campos no validos'), 200);
            } else {
                Mail::send('emails.contacto', Input::get(), function($message)
                {
                    $message->from(Input::get('correo'), Input::get('nombre') . ' ' . Input::get('apellido'));
                    $message->to('enydrueda@gmail.com', 'Pedidos Dispufil')->subject('Formulario de contacto website Dispufil');
                    $message->comentario = Input::get('comentario');
                    $message->telefono = Input::get('telefono');
                    $message->correo = Input::get('correo');
                    $message->nombre = Input::get('nombre');
                    $message->apellido = Input::get('apellido');
                    $message->empresa = Input::get('empresa');
                });

                return Response::json(array('success' => true), 200);
            }
        }catch(Exception $e){
            return Response::json(array('success' => false, 'error' => 'Error'), 200);
        }
    }
}