<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;

Route::get ('/artists', [ArtistController::class, 'index']);
Route::post ('/artists', [ArtistController::class, 'store']);
Route::post ('/artists/{artist}', [ArtistController::class, 'update']);
Route::delete('/artists/{artist}', [ArtistController::class, 'destroy']);

Route::get ('/albums', [AlbumController::class, 'index']);