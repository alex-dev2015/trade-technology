<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Championships;
use App\Http\Requests\ChamprionshipRequest;

class ChampionshipsController extends Controller
{
    /**
     * Lista todos os campeonatos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Championships::all(), 200);
    }

    /**
     * Cria um novo campeonato.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChamprionshipRequest $request): Response
    {
        return response(
            Championships::create($request->all()), 201
        );
    }

    /**
     * Lista os dados relacionado a um determinado campeonato.
     *
     * @param  \App\Models\Championships  $championships
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Championships::find($id);
        if ($response) {
            return response($response,200);
        }
        
    }

  
}
