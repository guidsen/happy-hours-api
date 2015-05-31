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
        return response()->json(User::find($id));
    }
}