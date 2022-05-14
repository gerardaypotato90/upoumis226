<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\covid19case;
use App\Models\casesregion;

class HighchartController extends Controller
{
    public function handleChart()
    {
        $userData = covid19case::all();
        $regionData = casesregion::all();
        return view('dashboard', compact('userData', 'regionData'));
    }
}
