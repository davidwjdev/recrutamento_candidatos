<?php

namespace App\Http\Controllers;

use App\Models\Candidatura;
use App\Models\Vaga;
use App\Models\Pessoa;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $candidaturas = DB::table('candidaturas')->join('vagas','candidaturas.id_vaga','=','vagas.id')->join('pessoas','candidaturas.id_pessoa', '=','pessoas.id')
        ->select('candidaturas.id','vagas.titulo','pessoas.nome')->get();

        // $candidaturas = Candidatura::all();
        // $candidaturas->titulo = DB::table('vagas')->select('titulo')->where('id','=',$candidaturas->id_vaga)->get();
        // $candidaturas->nome = DB::table('pessoas')->select('nome')->where('id','=',$candidaturas->id_pessoa)->get();

        //$candidaturas = Candidatura::join('vagas','candidaturas.id_vagas','=','vagas.id')->select('vagas.nome')->get();
        // $candidaturas = DB::table('candidaturas')->join('vagas','candidaturas.id_vaga', '=','vagas.id')->join('pessoas','candidaturas.id_pessoa', '=','pessoas.id')
        // ->select('candidaturas.id','vagas.titulo','pessoas.nome');


        return view('candidaturas.index', compact('candidaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$candidaturas = Candidatura::with('vagas')->get();
        $vagas = Vaga::all();
        $pessoas = Pessoa::all();
        
        return view('candidaturas.form', compact('vagas','pessoas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_vaga' => 'required',
            'id_pessoa' => 'required'
        ]);
        $candidatura = new Candidatura;
        $candidatura->id_vaga = $request->input('id_vaga');
        $candidatura->id_pessoa = $request->input('id_pessoa');
        //$candidatura = Candidatura::create($candidatura);
        $candidatura->save();
        // $candidatura = Candidatura::create($body);
        // $candidatura->save();

        return redirect('/candidaturas');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
