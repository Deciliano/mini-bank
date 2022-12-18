<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Index / GET
    public function index()
    {
        //
        return Usuario::all();
    }

    // Store / POST
    public function store(Request $request)
    {
        //
        Usuario::create($request->all());
    }

    // Show
    public function show($id)
    {
        //
        return Usuario::findOrFail($id);
    }

    // Update / PUT
    public function update(Request $request, $id)
    {
        //
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
    }

    // Destroy
    public function destroy($id)
    {
        //
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
    }
}
