<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conveyance extends Model
{
    // public function employee(){
    //     return $this->belongsTo('App\Employee','employee_id');
    // }

    public function employee() {
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
