<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Friend extends Model
{
    public $timestamps = false;
    
    // Ang friends table ay related kay employee table.
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
