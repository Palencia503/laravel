<?php

namespace App\Http\Controllers;

use App\Models\artista_album;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class artista_albumController extends Controller
{
    // GET /api/artista_album
    public function index(Request $request)
    {
        $artista_album = Artista_album::all();
        return response()->json($artista_album);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $artista_album = Artista_album::create($data);
        return response()->json($artista_album, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Artista_album $artista_album)
    {
        $artista_album->update($data);
        return response()->json($artista_album);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Artista_album $artista_album)
    {
        $artista_album->delete();
        return response()->json(['message' => 'artista_album deleted']);
    }
}
