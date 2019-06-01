<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursai extends Model
{

    public static function allKursai()
    {
        return Kursai::all();   
    }


     //                                 Grupes
    public function kursaiGrupe() 
    {
        return $this->hasMany('App\Grupe', 'kursai_id', 'id');
    }

    
    //    bandau padaryti analogiska koda "grupes.php", kad butu filtruojamas studento redagavimas
    
    public function KursaiStudentoGrupe()
    {
        return $this->hasMany('App\StudentoGrupe', 'kursai_id', 'id');
    }

    

}
