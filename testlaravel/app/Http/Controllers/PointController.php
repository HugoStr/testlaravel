<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{
    public function index(){

        $points=DB::select('SELECT * FROM points');
        return response()->json($points);

    }

    public function store(Request $request){

        $point = new Point();
        $point->value= $request->input('valeur');
        $point->value= $request->input('conso-prod');

    }
}
