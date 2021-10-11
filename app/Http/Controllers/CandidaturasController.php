<?php

namespace App\Http\Controllers;

use App\Models\Candidatura;
use App\Models\Vaga;
use App\Models\Pessoa;

use App\Http\Controllers\SplQueue;
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

        // $vaga = Vaga::where('id',$candidatura->id_vaga)->select('localizacao LV','nivel as NV')->get();
        // $pessoa = Pessoa::where('id',$candidatura->id_pessoa)->select('localizacao as LC','nivel as NC')->get();
        
        // $candidatura->save();


        // $score_candidato = DB::table('candidaturas')
        // ->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')
        // ->join('pessoas', 'candidaturas.id_pessoa', '=', 'pessoas.id')
        // ->where([['candidaturas.id_vaga','=', $id_vaga],['candidaturas.id_pessoa','=',  $id_pessoa]])
        // ->select('candidaturas.id', 'vagas.localizacao as LV', 'vagas.nivel as NV', 'pessoas.localizacao as LC', 'pessoas.nivel as NC')
        // ->get();
        
        $LV =  Vaga::where('id',$candidatura->id_vaga)->select('localizacao')->value("localizacao");
        $NV =  Vaga::where('id',$candidatura->id_vaga)->select('nivel')->value("nivel");

        $LC =  Pessoa::where('id',$candidatura->id_pessoa)->select('localizacao')->value("localizacao");
        $NC =  Pessoa::where('id',$candidatura->id_pessoa)->select('nivel')->value("nivel");

        IF($LV == $LC){
            $SUM = 0;
        }ELSEIF($LV == "A" ){
            IF($LC == "B"){
                $SUM = 5;
            }ELSEIF($LC == "C"){
                $SUM = 12;
            }ELSEIF($LC == "D"){
                $SUM = 8;
            }ELSEIF($LC == "E"){
                $SUM = 12;
            }ELSEIF($LC == "F"){
                $SUM = 16;
            }
        }ELSEIF($LV == "B" ){
            IF($LC == "A"){
                $SUM = 5;
            }ELSEIF($LC == "C"){
                $SUM = 7;
            }ELSEIF($LC == "D"){
                $SUM = 3;
            }ELSEIF($LC == "E"){
                $SUM = 11;
            }ELSEIF($LC == "F"){
                $SUM = 11;
            }
        }ELSEIF($LV == "C" ){
            IF($LC == "A"){
                $SUM = 12;
            }ELSEIF($LC == "B"){
                $SUM = 7;
            }ELSEIF($LC == "D"){
                $SUM = 10;
            }ELSEIF($LC == "E"){
                $SUM = 4;
            }ELSEIF($LC == "F"){
                $SUM = 18;
            }
        }ELSEIF($LV == "D" ){
            IF($LC == "A"){
                $SUM = 8;
            }ELSEIF($LC == "B"){
                $SUM = 3;
            }ELSEIF($LC == "C"){
                $SUM = 10;
            }ELSEIF($LC == "E"){
                $SUM = 10;
            }ELSEIF($LC == "F"){
                $SUM = 8;
            }
        }ELSEIF($LV == "E" ){
            IF($LC == "A"){
                $SUM = 16;
            }ELSEIF($LC == "B"){
                $SUM = 11;
            }ELSEIF($LC == "C"){
                $SUM = 4;
            }ELSEIF($LC == "D"){
                $SUM = 10;
            }ELSEIF($LC == "F"){
                $SUM = 18;
            }
        }ELSEIF($LV == "F" ){
            IF($LC == "A"){
                $SUM = 16;
            }ELSEIF($LC == "B"){
                $SUM = 11;
            }ELSEIF($LC == "C"){
                $SUM = 18;
            }ELSEIF($LC == "D"){
                $SUM = 8;
            }ELSEIF($LC == "E"){
                $SUM = 18;
            }
        }

        IF($SUM <= 5){
            $D = 100;
        }ELSEIF($SUM > 5 && $SUM <= 10){
            $D = 75;
        }ELSEIF($SUM > 10 && $SUM <= 15){
            $D = 50;
        }ELSEIF($SUM > 15 && $SUM <= 20){
            $D = 25;
        }ELSEIF($SUM > 20){
            $D = 0;
        }

        $N = 100 - 25 * ($NV - $NC);
        $SCORE = ($N + $D)/2;

        $candidatura->score = $SCORE;
        
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
        $candidatura = Candidatura::findOrFail($id);
        $request->validate([
            'id_vaga' => 'required',
            'id_pessoa' => 'required'
        ]);
        $input = $request->all();
        $candidatura->fill($input)->save();

        return redirect('/candidaturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidatura = Candidatura::findOrFail($id);
        $candidatura->delete();
        return redirect('/candidaturas');
    }

    public function score()
    {

        $vagas = DB::table('candidaturas')
        ->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')
        ->select('vagas.id', 'vagas.empresa','vagas.titulo', 'vagas.descricao', 'vagas.localizacao', 'vagas.nivel')
        ->groupBy('vagas.id', 'vagas.empresa','vagas.titulo', 'vagas.descricao', 'vagas.localizacao', 'vagas.nivel')
        ->get();

        //echo $vagas;

        return view('candidaturas.score', compact('vagas'));
    }

    public function det_score($id)
    {
        $pessoas = DB::table('candidaturas')
        ->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')
        ->join('pessoas', 'candidaturas.id_pessoa', '=', 'pessoas.id')
        ->where('vagas.id','=',$id)
        ->select('candidaturas.id_pessoa', 'pessoas.nome', 'pessoas.profissao', 'pessoas.localizacao', 'pessoas.nivel', 'candidaturas.score')
        ->orderBy('candidaturas.score', 'DESC')
        ->get();


        return view('candidaturas.det_score', compact('pessoas'));
    }


}



