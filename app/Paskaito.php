<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paskaito extends Model
{
    public function PaskaitoKursai()
    {
        return $this->belongsTo('App\Kursai', 'kursai_id', 'id');
    }

    
    public function PaskaitoGrupe()
    {
        return $this->belongsTo('App\Grupe', 'grupe_id', 'id');
    }


//             bandau padaryti kelia, kad isgautu info apie kursus
    public function PaskaitoKurpav()
    {
        return $this->belongsTo('App\Grupe', 'kursai_id', 'id');
    }


    public function PaskaitoStudentoGrupe()
    {
        return $this->hasMany('App\StudentoGrupe', 'grupe_id', 'id');
    }


}
