<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Offre;

class OffreController extends Controller
{
    public function getOffre()
    {
        return Offre :: all();
    }
    
    public function addOffre(Request $request)
    {
        if(Offre :: create($request -> all())){
            return "Offre created";
        }else{
            return "Offre not created";
        }
    }
}
