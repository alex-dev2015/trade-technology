<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Championships extends Model
{
    use HasFactory;

    public $timestamps    = true;

    /**
     * O campo da tabela chamado status, definirá algumas regras durante o fluxo do programa.
     * 
     * Período de inscrição do campeonato o status = 1;
     *  
     * Campeonato em andamento o status = 2;
     * 
     * Campeonato finalizado o status = 3;
     */

    protected $fillable = [
         'name_championship', 'status', 'champion_participant'
        , 'created_at', 'updated_at'
    ];

    

    public function participants()
    {
        return $this->belongsToMany(Participants::class, 'participants_has_championships');
    }

    public function rounds()
    {
        return $this->belongsToMany(Rounds::class, 'championships_has_rounds');
    }
}
