<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Http\Requests;


class EstoqueController extends Controller
{
    public function index()
    {
        $estoque = Estoque::all();

        return view('estoqueIndex', [
            'estoque' => $estoque
        ]);
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function edit()
    {
        $estoque = Estoque::findOrFail($estoque);

        return view('estoqueEdit',[
            'estoque'=>$estoque
        ]);
    }

    public function update($estoque, Request $request)
    {

    }

    public function delete()
    {

    }

}
