<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupe extends Model
{
    public function GrupeKursai()
    {
        return $this->belongsTo('App\Kursai', 'kursai_id', 'id');
    }

    public function GrupePaskaito()
    {
        return $this->belongsTo('App\Paskaito', 'paskaito_id', 'id');
    }
}

