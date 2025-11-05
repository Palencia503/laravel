<?php

namespace App\Http\Controllers;

use App\Models\Cançons_llistes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Cançons_llistesController extends Controller
{
    // GET /api/Cançons_llistes
    public function index(Request $request)
    {
        $cançons_llistes = Cançons_llistes::all();
        return response()->json($cançons_llistes);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $cançons_llistes = Cançons_llistes::create($data);
        return response()->json($cançons_llistes, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Cançons_llistes $cançons_llistes)
    {
        $cançons_llistes->update($data);
        return response()->json($cançons_llistes);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Cançons_llistes $cançons_llistes)
    {
        $cançons_llistes->delete();
        return response()->json(['message' => 'Cançons_llistes deleted']);
    }
}
