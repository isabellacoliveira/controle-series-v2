<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // Serie::create($request->only(['nome'])); o que ele busca
        // Serie::create($request->except(['nome']));
        // atribuição de dados em massa
        Serie::create($request->all());

        // Serie::create(['nome' => 'Teste']); adiciona no banco na tabela 'nome' a propriedade 'Teste'
        return redirect()->route('series.index');
    }
}
