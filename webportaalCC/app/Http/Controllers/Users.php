<?php

namespace App\Http\Controllers;
use App\Models\Medewerker;
use Illuminate\Http\Request;

class Users extends Controller
{
    function list()
    {
        $data = Medewerker::all();
        return view('userview', ['data'=>$data]);
    }
}
