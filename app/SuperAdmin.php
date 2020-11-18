<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    protected $table = 'superadmin';
    protected $primaryKey = 'id_superadmin';
    protected $fillable = [
        'nama', 'email', 'api_token', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}
