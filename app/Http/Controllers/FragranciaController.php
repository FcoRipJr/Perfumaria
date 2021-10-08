<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fragrancia;
use App\Http\Requests;

class FragranciaController extends Controller
{
    public function index()
    {
        $fragrancias = Fragrancia::all();

        return view('fragranciasIndex', [
            'fragrancias' => $fragrancias
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('createFragrancia');
    }

    public function store(Request $request)
    {
        Fragrancia::create([
            'nome'=>$request->nome,
            'estoque'=>$request->estoque,
            'totalUtilizado'=>'0'
        ]);
        //return view('fragranciasIndex');
    }

    public function edit()
    {
        $fragrancia = Fragrancia::findOrFail($fragrancia);

        return view('fragranciasEdit',[
            'fragrancias' => $fragrancia
        ]);
    }

    public function update($fragrancia, Request $request)
    {

    }

    public function delete()
    {
        $fragrancia = Fragrancia::findOrFail($fragrancia);
        $fragrancia->delete();

        return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');

    }



}
