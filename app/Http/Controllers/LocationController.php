<?php namespace App\Http\Controllers;

use App\Entities\Event;
use App\Entities\User;
use App\Entities\Favorite;
use App\Entities\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function all(Request $request)
    {
        if ($request->has('name'))
            return response()->json(Location::with('events')->whereName($request->get('name'))->first());

        return response()->json(Location::with('events')->get());
    }

    public function show($id)
    {
        return response()->json(Location::with('events')->find($id));
    }

    public function events($id)
    {
        return response()->json(Event::where('location_id', $id)->get());
    }

    public function favorite(Request $request, $id)
    {
        $user = User::where('facebook_id', $request->input('facebook_id'));
        Favorite::create(['user_id' => $user->id, 'location_id' => $id]);
        return response()->json(['message' => 'Created.']);
    }
}