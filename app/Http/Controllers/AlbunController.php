<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbunController extends Controller
{
    //
    // GET /api/Albuns
    public function index(Request $request)
    {
        $Albuns = Albun::all();
        return response()->json($Albun);
        }
    // POST /api/Albuns
    public function store(Request $request)
    {
        $Albun = Albun::create($data);
        return response()->json($Albun, 201);
    }

    // PUT/PATCH /api/Albuns/{Albun}
    public function update(Request $request, Albun $Albun)
    {
        $Albun->update($data);
        return response()->json($Albun);
    }
            // DELETE /api/Albuns/{Albun}
    public function destroy(Albun $Albun)
    {
        $Albun->delete();
        return response()->json(['message' => 'Albun deleted']);
    }
}
