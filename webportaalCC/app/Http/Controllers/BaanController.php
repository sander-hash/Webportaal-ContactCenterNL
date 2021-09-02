<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Course::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'baan_omschrijving'=>'required'
        ]);

        $baan = new Baan();
        $baan->baan_omschrijving = $request->baan_omschrijving;
        $baan->save();

        return response('Baan toegevoegd',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Baan::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'baan_omschrijving'=>'required'
            ]);
    
            $baan = Baan::find($id);
            $baan->baan_omschrijving = $request->baan_omschrijving;
            $baan->save();
    
            return response('Baan geupdate',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Baan::find($id)->delete();
        return response('Gedelete!',200);
    }
}
