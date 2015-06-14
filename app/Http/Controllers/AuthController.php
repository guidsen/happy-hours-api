<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        if ($request->has('id')) {
            $user = User::where('facebook_id', $request->input('id'))->exists();

            if (!$user)
                User::create(['facebook_id' => $request->input('id'), 'email' => null, 'password' => null]);

            return response()->json('Succesfully logged in.');
        }

        return response()->json('No ID found in the request', 403);
    }
}