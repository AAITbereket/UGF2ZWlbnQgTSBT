<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\Pavement_section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Section_controller extends Controller
{
    //
    public function dashboard()
    {
        if (! Auth::check())
        {
            return redirect('/');
        }


        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        $Session_Section_Id = Session::get('Section_Id');

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Session_Section_Id")->get();

        if($Pavement_section->count() )
        {
            $Pavement_section_ = $Pavement_section[0];
            return view('Dashboard.Section_Dashboard_view', compact('Pavement_section_'));
        }
        else{
            return redirect('/start_project_');
        }


        return view('Dashboard.Section_Dashboard_view');
    }

}
