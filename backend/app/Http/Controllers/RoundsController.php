<?php

namespace App\Http\Controllers;

use App\Models\Championships;
use App\Models\Confrontations;
use App\Models\Rounds;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RoundsController extends Controller
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
    public function store(Request $request)
    {
        // /**
        //  * Recuperando os dados da requisição
        //  */
        // $championship = $request['championship'];
        
        // if($this->generateRounds($championship))
        // {
        //     return response([
        //         'messsage' => 'Rodadas definidas com sucesso!' 
        //     ], 201);
        // }else{
        //     return response([
        //         'message' => 'As rodadas já foram definidas!'
        //     ],405);
        // }
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

    // private function generateRounds($championship)
    // {
    //     $rounds         = Rounds::all();
    //     $champ          = Championships::find($championship);

    //     $getChampRound = DB::table('championships_has_rounds')
    //         ->where('championships_id', '=', $champ['id'])
    //         ->where('rounds_id', '=' , 1)
    //         ->select('id')->first()->id;
    //     /**
    //      * Verificar se as rodadas já foram geradas
    //      */

    //     if(count($champ->rounds()->get()) >= 1)
    //     {
    //         return false;
    //     }else {
    //         foreach ($rounds as $key => $value) {
    //             $round = $value['id'];
    //             $champ->rounds()->attach($round);
    //         }
    //         return true;    
    //     } 
    // }
}
