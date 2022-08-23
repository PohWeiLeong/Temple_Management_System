<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable=['name','amount','description','UserID'];

    public function sponsor(){
        return $this->hasMany('App\Models\User');
    }
}
