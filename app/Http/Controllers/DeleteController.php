<?php

namespace App\Http\Controllers;

use App\Models\exposure;
use App\Models\establishmentvisit;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;

class DeleteController extends Controller
{
    //
    public function destroy($id)
    {
        $data=exposure::find($id);
        $data->delete();

        return redirect('tracker');
    }

    public function removed($id)
    {
        $data=establishmentvisit::find($id);
        $data->delete();

        return redirect('visits');
    }
}
