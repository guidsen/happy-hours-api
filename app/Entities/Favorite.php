<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'location_id'];

    public function location()
    {
        return $this->belongsTo('App\Entities\Location');
    }
}