<?php

namespace App\Http\Controllers;

use App\Models\Championships;
use App\Models\Confrontations;
use App\Models\Rounds;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SortitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {
        $championship = $request['championship'];

        $champ          = Championships::find($championship);
        
        if ($champ == null) {
            return response([
                'message' => 'Campeonato inexistente'
            ],404);
        }
        
        /**
         * Verifica se o campeonato está na condição de realizar os sorteios
         */
        
              if ($champ['status'] === 2) {

                //Gerar tabela de rodadas
                $this->generateRounds($champ['id']);
                $round = 1;

                switch ($round) {
                    case 1:
                        $sort = $this->generateSortitions(1, $champ);
                        if ($sort) {
                            return response([
                                'message' => 'Sorteio Realizado com sucesso, vamos para os confrontos.'
                            ], 201);
                        }else{
                            return response([
                                'message' => 'Aguarde a finalização das quartas de finais'
                            ], 405);
                        }
                        break;
                    
                    default:
                        # code...
                        break;
                }
                
            }else{
                return response([
                    'message' => 'Não é possível realizar o sorteio desse campeonato!'
                ], 400);
            }
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function generateSortitions($round, $champ) 
    {
        $listParticipants = [];
        $objeto = []; 
        $getChampRound = DB::table('championships_has_rounds')
                ->where('championships_id', '=', $champ['id'])
                ->where('rounds_id', '=' , $round)
                ->select('id')->first()->id;
        if ($round === 1) {
            
            //Verifica se já existe o confronto
            $verifyRegisterConfrontation = DB::table('confrontations')
                ->where('championships_rounds_id', '=', $getChampRound)
                ->first();
            
            if($verifyRegisterConfrontation == null)
            {
                $participants = $champ->participants()->get();
    
                foreach ($participants as $key => $value) {
                    $listParticipants[] =+ $value['id'];
                }

                for ($i=0; $i <= 3 ; $i++) {
                    
                    $rand_key = array_rand($listParticipants,2);

                    $confront = Confrontations::create([
                        'participant_A' => $listParticipants[$rand_key[0]],
                        'participant_B' => $listParticipants[$rand_key[1]],
                        'championships_rounds_id' => $getChampRound
                    ]);
                    
                    //Removendo o participante sorteado para não haver duplicidade
                    unset($listParticipants[$rand_key[0]]);
                    unset($listParticipants[$rand_key[1]]);
                }

                return true;
            }
            return false;
            
        }
        
        if ($round === 2) {
            dd("Gerar as semi-finais");
        }
        
    }

    private function generateRounds($championship)
    {
        $rounds         = Rounds::all();
        $champ          = Championships::find($championship);

        /**
         * Gera as rodadas do campeonato caso não exista
         */

        if(count($champ->rounds()->get()) == 0)
        {
            foreach ($rounds as $key => $value) {
                $round = $value['id'];
                $champ->rounds()->attach($round);
            }   
        }
    }
}
