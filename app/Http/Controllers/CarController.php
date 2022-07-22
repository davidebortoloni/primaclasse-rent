<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Show the cars list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('flotta');
    }

    /**
     * Show the cars list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // Car $car
    public function show($id)
    {
        return view('car-show');
    }
}
