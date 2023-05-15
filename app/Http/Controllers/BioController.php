<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function introduction()
    {
        return view('bio.introduction');
    }

    public function flora()
    {
        return view('bio.flora');
    }

    public function fauna()
    {
        return view('bio.fauna');
    }

    public function avifauna()
    {
        return view('bio.avifauna');
    }

    public function wildlifeCensus()
    {
        return view('bio.census');
    }

    public function butterflies()
    {
        return view('bio.butterflies');
    }

    public function rareSpecies()
    {
        return view('bio.rare-species');
    }
}
