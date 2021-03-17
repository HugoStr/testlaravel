<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    public function index(){

        $points=Point::all();
        return response()->json($points);

    }

    public function store(Request $request){

        $point = new Point();
        $point->value= $request->input('value');
        $point->conso_prod= $request->input('conso_prod');
        $point->save();

    }
}
