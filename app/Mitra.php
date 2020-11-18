<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id_mitra';
    protected $fillable = [
        'nama', 'email', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}
