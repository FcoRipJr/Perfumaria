<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Models\Fragrancia;
use App\Http\Requests;



class PerfumeController extends Controller
{

    public function index()
    {
        $perfumes = Perfume::all();

        return view('perfumesIndex', [
            'perfumes' => $perfumes
        ]);
        
    }
    
    public function show()
    {
         $perfumes = Perfume::all();
        return view('perfumeShow', [
            'perfumes' => $perfumes
        ]); 

    }


    public function create()
    {
        $fragrancias = Fragrancia::all();
       return view('createPerfume',[
        'fragrancias' => $fragrancias
    ]); 
    }
    
    public function store(Request $request)
    {
        Perfume::create([
            'nome' => $request->nome,
            'percentAgua' => $request->percentAgua,
            'percentAlcool' => $request->percentAlcool,
            'fragrancias'=>$request->inputFragrancia,
            'percentFragrancia' => $request->percentFragrancia
        ]);
        return view('perfumesIndex');
    }
    
    public function edit($perfume)
    {
        $perfume = Perfume::findOrFail($perfume);
        $fragrancias = Fragrancia::all();
        return view('perfumesEdit',[
            'perfumes' => $perfume,
            'fragrancias' => $fragrancias
        ]);
    }
    
    public function update($perfume, Request $request)
    {
          $perfume = Perfume::findOrFail($perfume);
        $dados =$request->all();
       $perfume->update($dados);

        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');

    }
    
    public function delete($perfume)
    {
        $perfume = Perfume::findOrFail($perfume);
        $perfume->delete();


    }
    

    
}
