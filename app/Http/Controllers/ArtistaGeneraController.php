<?php

namespace App\Http\Controllers;

use App\Models\artista_genera;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class artista_generaController extends Controller
{
    // GET /api/Cançons_llistes
    public function index(Request $request)
    {
        $artista_genera = Artista_genera::all();
        return response()->json($artista_genera);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $artista_genera = Artista_genera::create($data);
        return response()->json($artista_genera, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Artista_genera $artista_genera)
    {
        $artista_genera->update($data);
        return response()->json($artista_genera);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Artista_genera $artista_genera)
    {
        $artista_genera->delete();
        return response()->json(['message' => 'Artista_genera deleted']);
    }
}
