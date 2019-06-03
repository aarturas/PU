<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentoGrupe extends Model
{
    public function StudentoGrupe()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function visaGrupe()
    {
        return $this->belongsTo('App\Grupe', 'grupe_id', 'id');
    }

   
}
