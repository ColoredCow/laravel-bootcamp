<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'theme', 'location', 'description', 'date'];


    public function eventGuest()
    {
    	return $this->hasMany(EventGuest::class);
    }

}
