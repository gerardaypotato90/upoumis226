<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\establishmentvisit;
use App\Models\symptom;
use Hash;
use Session;
use Auth;

class EstabVisitController extends Controller
{
    //
    public function establishmentvisit(Request $request)
    {
        $request->validate([
            'establishment' => ['required', 'string', 'max:255'],
            'temperature' => ['required', 'string', 'max:255'],
            'symptoms' => ['array', 'max:500'],
        ]);

        
        $checked = $request->input('symptoms');
        if ($checked == null){
            $answers[] = "no symptoms";
        }
        else{
            foreach($checked as $c) {
                $answers[] = $c;
            }
        }
        
       
        

        $establishment = new establishmentvisit();       
        $establishment->name = Auth::user()->name;
        $establishment->establishment = $request->establishment;
        $establishment->temperature = $request->temperature;
        $establishment->address = Auth::user()->address;
        $establishment->symptoms = implode(",", $answers);
        $establishment->telephone_number = Auth::user()->telephone_number;
        $establishment->userid = Auth::user()->id;  
        $res = $establishment->save();

        return back()->with("success", "added successfully");


        /*$establishment = establishment::create([
            'name' => $user->name,
            'establishment' => $request->establishment,
            'temperature' => $request->temperature,
            'address' => $user->address,
            'telephone_number' => $user->telephone_number,
            'userid' => $user->id,
            
        ]);*/

    }

    public function index()
    {
        $symp = symptom::all();
        return view('establishvisit', compact('symp'));
    }
}