<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChampionshipsHasRounds extends Model
{
    use HasFactory;
    
    public $timestamps    = false;

    protected $fillable = ['championships_id', 'rounds_id'];

}