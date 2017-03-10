<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\Pavement_section;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    public function dashboard(){

        if (! Auth::check())
        {
            return redirect('/');
        }

        if(! Session::has('Project_Id') )
            {
                return redirect('/start_project_');
            }

        $Session_Project_Id = Session::get('Project_Id');

        $selected_project = DB::table('projects')->where('Project_Id', "$Session_Project_Id")->get();

        $Pavement_section = DB::table('pavement_sections')->where('Project_Id', "$Session_Project_Id")->get();

        if($selected_project->count() )
        {
            if (! $Pavement_section->count())
            {
                $Pavement_section_ = null;
            }

                $Pavement_section_ = $Pavement_section;
                $selected_project_ = $selected_project[0];
                return view('Dashboard.Dashboard_view', compact('selected_project_','Pavement_section_'));
         }
        else{
            return redirect('/start_project_');
        }

    }

    public function create_project(Request $request)
    {
        $name = Auth::user()->name;

        // check if all field is setted else return

        $Project = new project();
        $Project->Created_By = $name;
        $Project->Project_Name = $request->Project_name;
        $Project->From = $request->From;
        $Project->To = $request->To;
        $Project->Distance = $request->Total_Distance;
        $Project->save();

        $Project_Id = DB::table('projects')->where('Project_Name', "$request->Project_name")->orderBy('Project_Id','desc')->pluck('Project_Id');
    
        $Session_project_Id =  $Project_Id[0];

//        $New_pavement_section = new Pavement_section();
//
//        $New_pavement_section->Project_Id = $Session_project_Id;
//        $New_pavement_section->save();

        Session::forget('Project_Id');

        Session::put('Project_Id',$Session_project_Id);

        return redirect('/dashboard');

    }

    public function start_Project()
    {
        if (! Auth::check())
        {
            return redirect('/');
        }

        return view('start_project.start_project');
    }

    public function add_section(Request $request)
    {
        if (! Auth::check())
        {
            return redirect('/');
        }

        $Session_Project_Id = Session::get('Project_Id');
        
        $pavement_section = new Pavement_section();
        $pavement_section->Section_Name = $request->Section_name;
        $pavement_section->Project_Id = $Session_Project_Id;
        $pavement_section->From = $request->Sec_From;
        $pavement_section->To = $request->Sec_To;
        $pavement_section->Surface = $request->Surface;
        $pavement_section->Length = $request->Length;
        $pavement_section->Carriage_width = $request->Carriadge_Width;
        $pavement_section->Area = $request->Area;
        $pavement_section->Number_of_lane = $request->No_of_Lane;
        $pavement_section->Street_type = $request->street_type;
        $pavement_section->Direction = $request->Direction;
        $pavement_section->Carriage_way_type = $request->Carriage_way_type;
        $pavement_section->save();
        
        return redirect('/dashboard');

    }

    public function Open_section(Request $request)
    {
        $Session_section_Id = $request->Section_Id_open;

        Session::forget('Section_Id');

        Session::put('Section_Id',$Session_section_Id);

        return redirect('/Section_dashboard');
    }

    public function Delete_section(Request $request)
    {
        $Seciton_Id = $request->Section_Id_open;

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Seciton_Id")->delete();

        return redirect('/dashboard');

    }

    public function edit_section(Request $request)
    {
        if (! Auth::check())
        {
            return redirect('/');
        }

        $Session_Project_Id = Session::get('Project_Id');

        $Section_Id = $request->Section_Id;

        $pavement_section = Pavement_section::find("$Section_Id");
        $pavement_section->Section_Name = $request->Section_name;
        $pavement_section->Project_Id = $Session_Project_Id;
        $pavement_section->From = $request->Sec_From;
        $pavement_section->To = $request->Sec_To;
        $pavement_section->Surface = $request->Surface;
        $pavement_section->Length = $request->Length;
        $pavement_section->Carriage_width = $request->Carriadge_Width;
        $pavement_section->Area = $request->Area;
        $pavement_section->Number_of_lane = $request->No_of_Lane;
        $pavement_section->Street_type = $request->street_type;
        $pavement_section->Direction = $request->Direction;
        $pavement_section->Carriage_way_type = $request->Carriage_way_type;
        $pavement_section->save();

        return redirect('/dashboard');

    }
}

