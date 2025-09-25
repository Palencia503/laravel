<?php

namespace App\Http\Controllers;


use App\Models\Usuari;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UsuariController extends Controller
{
    //
    // GET /api/artists
    public function index(Request $request)
    {
        $artists = Usuari::all();
        return response()->json($usuaris);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $artist = Usuari::create($data);
        return response()->json($usuari, 201);
    }

    // PUT/PATCH /api/usuaris/{usauri}
    public function update(Request $request, Usuari $usuari)
    {
        $usuari->update($data);
        return response()->json($usauri);
    }
    // DELETE /api/usuaris/{usuari}
    public function destroy(Usuari $usuari)
    {
        $usuari->delete();
        return response()->json(['message' => 'Usuari deleted']);
    }
}
