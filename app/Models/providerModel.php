<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class providerModel extends Model
{
    use HasFactory;

    protected $table = 'dataprovider';
    protected $primaryKey = 'provider';

    protected $fillable = ['provider'];
    public function relasikeDatapembeliProvider()
    {
        return $this->hasMany('app\Models\datapembeliModel');
    }
}
