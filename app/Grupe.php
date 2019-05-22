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

    // i show kortele irasome kelia iki destytojo vardo
    public function GrupeDestytoja()
    {
        return $this->belongsTo('App\User', 'destytoja_id', 'id');
    }

    // i show kortele irasome kelia iki kursu pavadinimo

    public function GrupeKurpav()
    {
        return $this->belongsTo('App\Grupe', 'kursai_id', 'id');
    }

}

