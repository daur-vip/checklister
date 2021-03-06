<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Flat;

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
        $flats = Flat::where('complex_id', $complex->id)->get();
        return view('complexes.show', compact(['complex', 'flats']));
    }
}
