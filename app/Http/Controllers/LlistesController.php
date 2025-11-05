<?php

namespace App\Http\Controllers;

use App\Models\Llistes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LlistesController extends Controller
{
    // GET /api/Llistes
    public function index(Request $request)
    {
        $llistes = Llistes::all();
        return response()->json($llistes);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $llistes = Llistes::create($data);
        return response()->json($llistes, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Llistes $llistes)
    {
        $llistes->update($data);
        return response()->json($llistes);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Llistes $llistes)
    {
        $llistes->delete();
        return response()->json(['message' => 'Llistes deleted']);
    }
}
