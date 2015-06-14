<?php namespace App\Http\Controllers;

use App\Entities\User;

class UserController extends Controller
{
    public function all()
    {
        return response()->json(User::all());
    }

    public function show($id)
    {
        return response()->json(User::where('facebook_id', $id));
    }

    public function favorites($id)
    {
        $data = User::with('favorites.location')->where('facebook_id', $id)->first();
        return response()->json($data->favorites);
    }
}