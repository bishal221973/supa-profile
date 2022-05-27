<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
class PopulationController extends Controller
{
    public function indexLocalPopulation()
    {
       
        return view('populations.local_population.index');
    }
    public function createLocalPopulation()
    {
        $district=District::all();
        // return $district;
        return view('populations.local_population.add',compact('district'));
    }
}
