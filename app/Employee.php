<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Employee extends Model
{
    public $timestamps = false;

    // Define the relationship with Profile.
    // Take note: singular function name. 💣 
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
