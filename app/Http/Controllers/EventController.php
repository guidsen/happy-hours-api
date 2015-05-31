<?php namespace App\Http\Controllers;

use App\Entities\Event;

class EventController extends Controller
{
    public function all()
    {
        return response()->json(Event::all());
    }
}