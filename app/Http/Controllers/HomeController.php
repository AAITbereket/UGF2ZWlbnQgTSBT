<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\project_info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function start_project()
    {
        $Current_user = Auth::user()->name;

        $projects = DB::table('projects')->where('Created_By', "$Current_user")->get();

        if ($projects->count())
        {
//                print_r ($projects[1]);
            return view('homepage.home', compact('projects'));
        }
        else
        {
            $projects = null;
            return view('homepage.home', compact('projects'));
        }

    }

    public function index()
    {
        
        
        return view('welcome');
    }

    public function Open_project(Request $request)
    {
        $Project_Id = $request->Project_Id_open;

        $Session_project_Id =  $Project_Id;

        Session::forget('Project_Id');

        Session::put('Project_Id',$Session_project_Id);

        return redirect('/dashboard');
    }

    public function Delete_project(Request $request)
    {
        $Project_Id = $request->Project_Id_delete;

        $Session_project_Id =  $Project_Id;

        Session::forget('Project_Id');

        $project_ = project::find($Project_Id);
        $project_->delete();

//        $sections = Pavement_section::find

        return redirect('/home');
    }
    
    public function project_info()
    {
        $Session_Project_Id = Session::get('Project_Id');

        $selected_project = DB::table('project_infos')->where('Project_Id', "$Session_Project_Id")->get();
        
        if ($selected_project->count())
        {
            $selected_project = $selected_project[0];
            return view('Dashboard.project_info_view', compact('selected_project'));
        }
        else
        {
            $selected_project = DB::table('project_infos')->where('Id', "1")->get();
            return view('Dashboard.project_info_view', compact('selected_project'));
        }
        
        
    }
    
    public function change_project_info(Request $request)
    {
        $Session_Project_Id = Session::get('Project_Id');

        $ID = DB::table('project_infos')->where('Project_Id', "$Session_Project_Id")->pluck('Id');

        $project_info = project_info::find($ID);

        $project_info->Client_Name = $request->Client_name;
        $project_info->Company_Name = $request->Company_Name;
        $project_info->Project_Name = $request->Project_name;
        $project_info->Inspect_By = $request->Inspect_by;
        $project_info->Checker = $request->Checker;
        $project_info->Supervisior = $request->Superviser;
        $project_info->Date = $request->date;
        $project_info->Issue_Number = $request->issue_no;

        $project_info->save();

        return redirect('/project_info');

    }

    public function change_logo(Request $request)
    {

        $Image_ = $request->file('logo');
        $Image__name = uniqid()."_".$Image_->getClientOriginalName();
        $Image_->move(public_path('company_logos'), $Image__name);
        
        $Session_Project_Id = Session::get('Project_Id');
        $ID = DB::table('project_infos')->where('Project_Id', "$Session_Project_Id")->pluck('Id');
        $project_info = project_info::find($ID);
        $project_info->Company_Logo_URL = '/company_logos/' . $Image__name;;
        $project_info->save();

        return redirect('/project_info');
    }
}
