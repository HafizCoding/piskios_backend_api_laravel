<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'no_handphone',
        'age',
        'address'
    ];
}

