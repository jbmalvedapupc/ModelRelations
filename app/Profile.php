<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Profile extends Model
{
    public $timestamps = false;

    // Define relationship with Employee.
    // Take note: Singular function name. 💣 
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
