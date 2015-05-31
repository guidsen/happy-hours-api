<?php namespace App\Http\Controllers;

use App\Entities\Favorite;

class FavoriteController extends Controller
{
    public function all()
    {
        return response()->json(Favorite::all());
    }
}