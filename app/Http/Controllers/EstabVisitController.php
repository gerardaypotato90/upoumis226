<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\establishmentvisit;
use App\Models\symptom;
use App\Models\exposure;
use App\Models\statusexposure;
use Hash;
use Session;
use Auth;

class EstabVisitController extends Controller
{
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

        return back()->with("success", "Thank you!!");

    }
    public function expose(Request $request)
    {
        $request->validate([
            'exposures' => ['array', 'max:500'],
        ]);

        
        $checked = $request->input('exposures');
        if ($checked == null){
            $answer[] = "No exposure or negative with COVID-19";
        }
        else{
            foreach($checked as $c) {
                $answer[] = $c;
            }
        }
        $exposure = new exposure();       
        $exposure->status_desc = implode(",", $answer);
        $exposure->userid = Auth::user()->id;
        $res = $exposure->save();
        
        return back()->with("message", "Notification sent");
    }
    public function index()
    {
        $symp = symptom::all();
        

        return view('establishvisit', compact('symp'));
    }

    public function expoindex()
    {

        $expo = statusexposure::all();

        return view('exposurep', compact('expo'));
    }
}