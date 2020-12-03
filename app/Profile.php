<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Profile extends Model
{
    public $timestamps = false;

    // Define relationship with Employees Table.
    // Take note: Singular function name. 💣 
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
