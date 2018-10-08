<?php

namespace team\Http\Controllers;

use Illuminate\Http\Request;
use team\Atleta;

class PrincipalController extends Controller
{
    public function index()
    {
    	$atletas = Atleta::orderBy('nombre','ASC')->paginate(20);

   		return view('index', compact('atletas'));
    }

    public function atleta($id)
    {
    	$atleta = Atleta::find($id);

    	return view('atleta',compact('atleta'));
    }
}
