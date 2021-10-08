<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fragancia;
use App\Http\Requests\FraganciaRequest;

class FraganciaController extends Controller
{
    public function index()
    {
        $fragancias = Fragancia::all();

        return view('fraganciasIndex', [
            'fragancias' => $fragancias
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('createFragancia');
    }

    public function store(FraganciaRequest $request)
    {
        
    }

    public function edit()
    {
        $fragancia = Fragancia::findOrFail($fragancia);

        return view('fraganciasEdit',[
            'fragancias' => $fragancia
        ]);
    }

    public function update($fragancia, FraganciaRequest $request)
    {

    }

    public function delete()
    {
        $fragancia = Fragancia::findOrFail($fragancia);
        $fragancia->delete();

        return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');

    }



}
