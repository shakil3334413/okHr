<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    public function employee(){
        return $this->belongsTo('App\Employee','employee_id');
    }
}
