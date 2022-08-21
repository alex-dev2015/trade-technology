<?php

namespace App\Http\Controllers;

use App\Models\Championships;
use App\Models\Participants;
use App\Models\ParticipantsHasChampionships;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RegistrationsController extends Controller
{
    public function store(Request $request): Response
    {
        /**
         * Recuperando os dados da requisição
         */
        $participant  = $request['participant'] ;
        $championship = $request['championship'] ;

        /**
         * Realiza a busca do campeonato com inscrições em aberto
         */
        $searchChampionship = Championships::where([
            'id' => $championship,
            'status' =>  1 
        ])->first();

        if (!$searchChampionship) {
            return response([
                        'message' => 'Campeonato indisponível para insrições'
                    ],405);
        }
        
        /**
         * Realizando a busca do participante
         */
        $searchParticipant = Participants::find($participant) ;
        
        /**
         * Realizando a inscrição do participante no campeonato
         * Após a inscrição é verificado se o número máximo de participantes foi atingido
         * Caso sim, o status do campeonato é atualizado encerrando o ciclo de inscrições
         */
        if ($searchParticipant != null) {
            
            //Verifica se o participante já existe
            $existParticipant = count($searchChampionship->participants()->where('participants_id', '=', $participant )->get());
            
            if($existParticipant >= 1)
            {
                return response([
                    'message' => 'O participante já está inscrito neste campeonato'
                ],405);
            }else{
                $searchChampionship->participants()->attach($searchParticipant);
            }
            
            $count = count($searchChampionship->participants()->get());

            if ($count === 8) 
            {
                $searchChampionship->update(['status' => 2]);
                return response([
                    'message' => 'Participante cadastrado com sucesso!',
                    'participante' => $searchParticipant['name_participant'],
                    'campeonato'   => $searchChampionship['name_championship'],
                    'status'  => 'Inscrições encerradas'
                ]);
            }
        }else{
            return response([
                'message' => 'O participante não está inscrito!',
            ],404);
        }

        return response([
            'message' => 'Participante cadastrado com sucesso!',
            'participante' => $searchParticipant['name_participant'],
            'campeonato'   => $searchChampionship['name_championship']
        ], 201);
    }
}
