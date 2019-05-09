<?php

namespace App;

use App\Models\Memoire;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    public function favoriteMemoires()
    {
        return $this->belongsToMany('App\Models\Memoire' ,'memoire_note_user')->withPivot('note')->withTimestamps();;
    }

    public function memoires()
    {
       return $this->hasMany('App\Models\Memoire' ,'user_id');
    }
}
