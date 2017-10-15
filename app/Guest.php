<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['name', 'email', 'city'];

    public function guestEvent()
    {
        return $this->hasMany(EventGuest::class);
    }

    public static function eventInvitationList($event_id)
    {
        $guest_list = self::whereDoesntHave('guestEvent', function ($sub_query) use ($event_id) {
            $sub_query->where('event_id', $event_id);
        })->get();

        return $guest_list;
    }
}
