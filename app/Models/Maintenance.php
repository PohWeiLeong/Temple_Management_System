<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable = ['date','time','location','ProviderID'];

    public function maintenance(){
        return $this->belongsTo('App\Models\Provider');
    }
}
