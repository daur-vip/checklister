<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Flat;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flat = Flat::find($id);
        $complex = Complex::find($flat->complex_id);
        return view('flats.show', compact(['flat', 'complex']));
    }
}
