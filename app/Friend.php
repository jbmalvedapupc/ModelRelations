<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Friend extends Model
{
    public $timestamps = false;
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
