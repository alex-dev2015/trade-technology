<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confrontations extends Model
{
    use HasFactory;

    public $timestamps    = true;

    protected $fillable = ['participant_A', 'participant_B', 'championships_rounds_id',
                           'created_at', 'updated_at'
    ];

}
