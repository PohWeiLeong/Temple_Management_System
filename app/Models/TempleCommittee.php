<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempleCommittee extends Model
{
    use HasFactory;
    protected $fillable = ['name','position','temple','location','electedTime','numberOfTimesElection'];

}
