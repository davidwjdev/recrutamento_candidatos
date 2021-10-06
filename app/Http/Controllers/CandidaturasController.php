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

        $candidaturas = DB::table('candidaturas')->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')->join('pessoas', 'candidaturas.id_pessoa', '=', 'pessoas.id')
            ->select('candidaturas.id', 'candidaturas.id_vaga', 'vagas.titulo', 'candidaturas.id_pessoa', 'pessoas.nome')->get();

        return view('candidaturas.index', compact('candidaturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vagas = Vaga::all();
        $pessoas = Pessoa::all();

        return view('candidaturas.form', compact('vagas', 'pessoas'));
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
        $candidatura->save();

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
        $candidatura = Candidatura::findOrFail($id);
        $vagas = Vaga::all();
        $pessoas = Pessoa::all();
        return view('candidaturas.form', ['candidatura' => $candidatura], compact('vagas', 'pessoas'));
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
