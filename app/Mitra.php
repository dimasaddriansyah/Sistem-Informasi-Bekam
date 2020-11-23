<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Mitra extends Authenticatable
{
    use Notifiable;

    protected $table = "mitra";

    protected $primaryKey = "id_mitra";

    protected $fillable = [
        'nama', 'email', 'password', 'no_hp', 'alamat', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];
}
