<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Usuario;
use \App\Response\Response;

class UsuariosController extends Controller
{
    private $response;

    public function __construct() 
    {
        $this->response = new Response();
    }
    
    public function index()
    {
        $usuarios = Usuario::get();
        $this->response->setTypeN();
        $this->response->setDataSet($usuarios);
        $this->response->setMessages("Sucesso!");

        return response()->json($this->response->toString());
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->fill($request->all());
        $usuario->save();

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        
        if(!$usuario) 
        {
            $this->response->setTypeN();
            $this->response->setMessages("Record not found!");

            return response()->json($this->response->toString(), 404);
        }

        $this->response->setTypeS();
        $this->response->setDataSet($usuario);
        $this->response->setMessages("Sucesso!");

        return response()->json($this->response->toString());
    }

    public function update(Request $request, $id)
    {
         $usuario = Usuario::find($id);

        if(!$usuario) 
        {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $usuario->fill($request->all());
        $usuario->save();

        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if(!$usuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $usuario->delete();
    }
}
