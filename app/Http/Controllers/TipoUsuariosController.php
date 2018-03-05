<?php

namespace App\Http\Controllers;

use \App\TipoUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TipoUsuariosController extends Controller
{
    public function index()
    {
        $tipoUsuario = TipoUsuario::get();
        return response()->json($tipoUsuario);
    }
    
    public function store(Request $request)
    {
        $tipoUsuario = new TipoUsuario();
        
        $tipoUsuario->fill($request->all());
        $tipoUsuario->save();

        return response()->json($tipoUsuario, 201);
    }
    
    public function show($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        if(!$tipoUsuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($tipoUsuario);
    }

    public function update(Request $request, $id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        if(!$tipoUsuario) 
        {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $tipoUsuario->fill($request->all());
        $tipoUsuario->save();

        return response()->json($tipoUsuario);
    }

    public function destroy($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        if(!$tipoUsuario) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $tipoUsuario->delete();
    }
}
