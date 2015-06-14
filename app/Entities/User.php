<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['facebook_id', 'email', 'password'];
    protected $hidden = ['password'];

    public function favorites()
    {
        return $this->hasMany('App\Entities\Favorite');
    }
}