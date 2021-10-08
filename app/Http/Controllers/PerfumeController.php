<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use App\Http\Requests\PerfumeRequest;



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

    }


    public function create()
    {
       return view('createPerfume'); 
    }
    
    public function store(PerfumeRequest $request)
    {
        
    }
    
    public function edit($perfume)
    {
        $perfume = Perfume::findOrFail($perfume);

        return view('perfumesEdit',[
            'perfumes' => $perfume
        ]);
    }
    
    public function update($perfume, PerfumeRequest $request)
    {
  /*      $perfume = Perfume::findOrFail($perfume);
        $dados['nome']
        if($request->)
        $perfume->update($dados);

        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
*/
    }
    
    public function delete($perfume)
    {
        $perfume = Perfume::findOrFail($perfume);
        $perfume->delete();

        return redirect('/noticias')->with('mensagem', 'Registro excluído com sucesso!');

    }
    

    
}
