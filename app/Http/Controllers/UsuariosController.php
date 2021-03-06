<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::get();

        return response()->json($usuarios);
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

        if(!$usuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($usuario);
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
