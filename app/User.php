<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




// class User extends Model

    public function UserKursai()
    {
        return $this->belongsTo('App\Kursai', 'kursai_id', 'id');
    }


    public function UserGrupe()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    

    public function userStudentoGrupe() 
    {
        return $this->hasMany('App\User', 'studentoGrupe_id', 'id');
    }

}