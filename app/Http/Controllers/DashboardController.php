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
            if($Pavement_section->count())
            {
                $Pavement_section_ = $Pavement_section[0];
                $selected_project_ = $selected_project[0];
                return view('Dashboard.Dashboard_view', compact('selected_project_','Pavement_section_'));
            }
            else{
                    $selected_project_ = $selected_project[0];
                    return view('Dashboard.Dashboard_view', compact('selected_project_'));
            }
            
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

        Session::forget('Project_Id');

        Session::put('Project_Id',$Session_project_Id);

        return redirect('/dashboard');

    }

    public function start_Project()
    {
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
        $pavement_section->Number_of_lane = $request->No_of_Lane;
        $pavement_section->Street_type = $request->street_type;
        $pavement_section->Direction = $request->Direction;
        $pavement_section->Carriage_way_type = $request->Carriage_way_type;
        $pavement_section->save();
        
        return $pavement_section;

    }

}
