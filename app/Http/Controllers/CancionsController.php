<?php

namespace App\Http\Controllers;

use App\Models\Cancions;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CancionsController extends Controller
{
    // GET /api/cançons
    public function index(Request $request)
    {
        $cancions = Cancions::all();
        return response()->json($cancions);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $cancions = Cancions::create($data);
        return response()->json($cancions, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Cancions $cancions)
    {
        $cancions->update($data);
        return response()->json($cancions);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Cancions $cancions)
    {
        $cançons->delete();
        return response()->json(['message' => 'cançons deleted']);
    }
}
