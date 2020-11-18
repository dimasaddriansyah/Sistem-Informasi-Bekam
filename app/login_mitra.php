<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class login_mitra extends Authenticatable
{
    protected $table = 'mitra';
}
