<?php namespace App\Http\Controllers;

use App\Entities\Event;
use App\Entities\Favorite;
use App\Entities\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function all(Request $request)
    {
        if($request->has('name'))
            return response()->json(Location::whereName($request->get('name'))->first());
        return response()->json(Location::all());
    }

    public function show($id)
    {
        return response()->json(Location::find($id));
    }

    public function events($id)
    {
        return response()->json(Event::where('location_id', $id)->get());
    }

    public function favorite(Request $request, $id)
    {
        Favorite::create(['user_id' => $request->input('user_id'), 'location_id' => $id]);
        return response()->json(['message' => 'Created.']);
    }
}