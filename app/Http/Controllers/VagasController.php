<?php

namespace App\Http\Controllers;
use App\Models\Vaga;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::all();
        return view('vagas.index',compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vagas.form');
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
            'empresa' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'localizacao' => 'required',
            'nivel' => 'required'
        ]);
        $body = $request->all();
        if(!empty($body['id'])):
            $vaga = Vaga::find($body['id']);
        else:
            $vaga = new Vaga;
            $vaga = Vaga::create( $body );
        endif;

        $vaga->save();
                
        return redirect('/vagas')->with('success', 'Vaga adicionada.');
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
        $vaga = Vaga::findOrFail($id);
        return view('vagas.form',['vaga' => $vaga]);
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
