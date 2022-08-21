<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifications extends Model
{
    use HasFactory;

    public $timestamps    = false;

    protected $fillable = [ 'championship_id, participant_id, spots'];

}
