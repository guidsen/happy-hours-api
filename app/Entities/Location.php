<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'description', 'lat', 'lon'];

    public function favorites()
    {
        return $this->belongsToMany('App\Entities\Favorite');
    }

    public function events()
    {
        return $this->hasMany('App\Entities\Event');
    }
}