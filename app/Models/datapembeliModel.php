<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\ControllerPulsaUser;
use app\Models\providerModel;

class datapembeliModel extends Model
{
    use HasFactory;

    protected $table = 'datapembeli';
    protected $primaryKey = 'id';

    protected $fillable = ['nohp', 'id_provider','id_nominal','status'];
    public $incrementing = false;
    protected $keyType = 'string';
    public function relasikeProvider()
    {
        return $this->belongsTo('app\Models\providerModel');
    }
    
    /**
     * 
     * 
     * @return void
     */

    public function relasikeNominal()
    {
        return $this->belongsTo('app\Models\nominalModel');
    }
   
}