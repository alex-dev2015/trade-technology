<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\Cast\Bool_;

class ParticipantsHasChampionships extends Model
{
    use HasFactory;

    public $timestamps    = false;

    protected $fillable = ['participants_id', 'championships_id'];

}
