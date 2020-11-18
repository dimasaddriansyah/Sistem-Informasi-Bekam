<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class login_superadmin extends Authenticatable
{
    protected $table = 'superadmin';
}
