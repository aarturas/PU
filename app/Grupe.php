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


    //        1.  į 'show' kortelę irašome kelią iki dėstytojo vardo :
    //                  kortelėje rodo dėstytojo vardą

    public function GrupeDestytoja()
    {
        return $this->belongsTo('App\User', 'destytoja_id', 'id');
    }


    //         2.   į 'show' kortelę įrašome kelią iki kursų pavadinimo
    //                   kortelėje rodo: kurso / grupės pavadinimą

    public function GrupeKurpav()
    {
        return $this->belongsTo('App\Grupe', 'kursai_id', 'id');
    }

}

