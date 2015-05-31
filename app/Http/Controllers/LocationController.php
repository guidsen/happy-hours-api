<?php namespace App\Http\Controllers;

use App\Entities\Event;
use App\Entities\Location;

class LocationController extends Controller
{
    public function all()
    {
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
}