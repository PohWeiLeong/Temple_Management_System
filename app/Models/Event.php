<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','title','date','time','description','location','SupplierID'];

    public function event(){
        return $this->belongsTo('App\Models\Supplier')
                    ->hasMany('App\Models\Activity');
    }
}
