<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['location_id', 'day_of_week', 'start_time', 'end_time'];
}