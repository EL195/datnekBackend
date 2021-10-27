<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Langue;
use Illuminate\Http\Response;

class LangueController extends Controller
{
    public function index()
    {
        return Langue::all();
    }

    public function show(Langue $langue)
    {
        return $langue;
    }

    public function store(Request $request)
    {
        $langue = Langue::create($request->all());
        return response()->json('success', 201);
    }

    public function update(Request $request, Langue $langue)
    {
        //return $request;
        $langue = Langue::query()->find($request->id);
        $langue->titre = $request->titre;
        $langue->comprehension = $request->comprehension;
        $langue->parle = $request->parle;
        $langue->ecrit = $request->ecrit;
        $langue->update();
        return response()->json('success', 200);
    }

    public function delete($langue)
    {   
        $del = Langue::query()->find($langue)->delete();
        return response()->json('success', 204);
    }
}
