<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oportunity;

class OpportunityController extends Controller
{
    //
    public function getOpportunities(Request $request){
        $opportunities = Oportunity::all()->where("id_promotor","=",$request->id);
        return response()->json(
            $opportunities
        );
    }
}
