<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Municipality;
class PopulationController extends Controller
{
    public function indexLocalPopulation()
    {
        $district=District::all();
        $municipality=Municipality::all();
        // return $district;
        return view('populations.local_population.index',compact(['district','municipality']));
    }
    public function createLocalPopulation()
    {
       
        // return $district;
        // return view('populations.local_population.add',);
    }
}
