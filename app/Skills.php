<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    public function jobcategory(){
        return $this->belongsTo('App\JobCategories','jobCategory');
    }
}
