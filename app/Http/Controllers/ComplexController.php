<?php

namespace App\Http\Controllers;

use App\Models\Complex;

class ComplexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complexes = Complex::orderBy('id', 'ASC')->get();
        return view('complexes.index', compact('complexes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complex = Complex::find($id);
        return view('complexes.show', compact('complex'));
    }
}
