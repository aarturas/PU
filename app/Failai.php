<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Failai extends Model
{
    public function FailaiPaskaito()
    {
    return $this->belongsTo('App\Paskaito', 'paskaito_id', 'id');
    }

}
