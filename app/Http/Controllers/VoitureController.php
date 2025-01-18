<?php

namespace App\Http\Controllers;

use App\Models\Voiture;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $voitures = Voiture::all();
        $auth = false;

        return view('index', compact('voitures'));
    }
}