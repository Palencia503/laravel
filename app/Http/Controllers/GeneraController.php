<?php

namespace App\Http\Controllers;

use App\Models\Genera;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GeneraController extends Controller
{
    // GET /api/artists
    public function index(Request $request)
    {
        $generas = Genera::all();
        return response()->json($generas);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $genera = Genera::create($data);
        return response()->json($genera, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Genera $genera)
    {
        $genera->update($data);
        return response()->json($genera);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Genera $genera)
    {
        $genera->delete();
        return response()->json(['message' => 'genera deleted']);
    }
}
