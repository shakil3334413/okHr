<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function company() {
        return $this->belongsTo('App\Companies','company_id');
    }

    public function jobCategory() {
        return $this->belongsTo('App\JobCategories','jobCategory_id');
    }

    public function jobLocation() {
        return $this->belongsTo('App\JobLocation','jobLocation_id');
    }
}
