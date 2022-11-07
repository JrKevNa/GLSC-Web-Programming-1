<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PlaneController extends Controller
{
    public function index()
    {
        $arrPlane =
        [
            // ['name'-> 'Bf 109G 6', 'firepower'-> 200],
            // ['name'-> 'Fw 190A 4', 'firepower'-> 300],
            // ['name'-> 'Ta 152C 3', 'firepower'-> 400],
        ];

        return view('plane.chart');
    }
}
