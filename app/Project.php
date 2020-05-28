<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function supervisor(){
        return $this->belongsTo('App\Supervisor','supervisor_id');
    }
}
