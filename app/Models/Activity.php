<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable=['date','time','description','location','EventID'];

    public function activity(){
        return $this->belongsTo('App\Models\Event');
    }
}
