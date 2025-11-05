<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AlbumController extends Controller
{
    // GET /api/album
    public function index(Request $request)
    {
        $album = Album::with("canciones")->get();
        return response()->json($album);
        }
    // POST /api/usauri
    public function store(Request $request)
    {
        $album = Album::create($data);
        return response()->json($album, 201);
    }

    // PUT/PATCH /api/idiomas/{usauri}
    public function update(Request $request, Album $album)
    {
        $album->update($data);
        return response()->json($album);
    }
    // DELETE /api/idiomas/{idioma}
    public function destroy(Album $album)
    {
        $album->delete();
        return response()->json(['message' => 'album deleted']);
    }
}