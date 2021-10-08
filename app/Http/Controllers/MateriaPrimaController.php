<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriaPrima;
use App\Http\Requests\MateriaPrimaRequest;



class MateriaPrimaController extends Controller
{

    public function index()
    {
        $materiasprimas = MateriaPrima::all();

        return view('materiasprimas.index', [
            'materiasprimas' => $materiasprimas
        ]);
    }

    public function create()
    {
        
    }

    public function store(MateriaPrimaRequest $request)
    {
        
    }

    public function edit()
    {

    }

    public function update($materiaprima, MateriaPrimaRequest $request)
    {

    }

    public function delete()
    {

    }


}
