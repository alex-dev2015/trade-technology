<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    public $timestamps    = true;

    protected $primary_key = 'id_participant';

    protected $fillable = ['name_participant', 'created_at', 'updated_at'];


    public function championships()
    {
        return $this->belongsToMany(Championships::class, 'participants_has_championships');
    }
}
