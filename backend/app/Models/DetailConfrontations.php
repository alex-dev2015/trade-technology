<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailConfrontations extends Model
{
    use HasFactory;

    public $timestamps    = true;

    protected $fillable = ['confrontation_id', 'time_victory', 'time_defeat'
                            , 'goal_time_A', 'goal_time_B'];
}
