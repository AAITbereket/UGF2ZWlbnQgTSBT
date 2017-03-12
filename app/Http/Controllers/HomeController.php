<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
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

        return redirect('/home');
    }

}
