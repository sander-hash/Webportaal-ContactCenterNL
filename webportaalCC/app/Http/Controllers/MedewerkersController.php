<?php

namespace App\Http\Controllers;

use App\Models\Medewerkers;
use Illuminate\Http\Request;

class MedewerkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medewerker::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'naam'=>'required',
            'baan'=>'required',
            'datum_van_aannamen'=>'required|date'
        ]);

        $medewerker = new Medewerker();
        $medewerker->naam = $request->naam;
        $medewerker->baan = $request->baan;
        $medewerker->datum_van_aannamen = $request->datum_van_aannamen;

        $medewerker->save();

        return response('Medewerker toegevoegd',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Medewerker::find($id);
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
        $this->validate($request, [
            'naam'=>'required',
            'baan'=>'required',
            'datum_van_aannamen'=>'required|date'
        ]);

        $medewerker = Student::find($id);
        $medewerker->naam = $request->naam;
        $medewerker->baan = $request->baan;
        $medewerker->datum_van_aannamen = $request->datum_van_aannamen;

        $medewerker->save();

        return response('Medewerker geupdate',200);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return response('Medewerker verwijderd', 200);
    }
}
