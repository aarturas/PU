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
}
