<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nominalModel extends Model
{
    use HasFactory;

    protected $table = 'nominal';
    protected $primaryKey = 'nominal';

    protected $fillable = ['nominal'];
    public function relasikeDatapembeliNominal()
    {
        return $this->hasMany('app\Models\datapembeliModel');
    }
}
