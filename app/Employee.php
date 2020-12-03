<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;
use App\Friend;

class Employee extends Model
{
    public $timestamps = false;

    // Define the relationship with Profiles table.
    // Take note: singular function name. 💣 
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }
}
