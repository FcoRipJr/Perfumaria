<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producao;
use App\Http\Requests\ProducaoRequest;


class ProducaoController extends Controller
{

    public function index()
    {
        $producoes = Producao::all();

        return view('producoes.index', [
            'producoes' => $producoes
        ]);
    }
    
    public function create()
    {
        
    }
    
    public function store(ProducaoRequest $request)
    {
        
    }
    
    public function edit()
    {
    
    }
    
    public function update($producao, ProducaoRequest $request)
    {
    
    }
    
    public function delete()
    {
        $producao = Producao::findOrFail($producao);
        $producao->delete();

        return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');

    }
    
}
