<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IdiomaController extends Controller
{
    // GET /api/idioma
    public function index(Request $request)
    {
        $idioma = Idioma::all();
        return response()->json($idioma);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $idioma = Idioma::create($data);
        return response()->json($idioma, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Idioma $idioma)
    {
        $idioma->update($data);
        return response()->json($idioma);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Idioma $idioma)
    {
        $idioma->delete();
        return response()->json(['message' => 'idioma deleted']);
    }
}
