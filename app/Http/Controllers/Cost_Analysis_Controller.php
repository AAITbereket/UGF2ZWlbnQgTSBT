<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintain_rehab_plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Cost_Analysis_Controller extends Controller
{
    //
    public function show_maintain_rehab_plan()
    {
        if (! Auth::check())
        {
            return redirect('/');
        }

        if(! Session::has('Project_Id') )
        {
            return redirect('/home');
        }

        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        $Session_Section_Id = Session::get('Section_Id');
        $maintan_rehab_plan = DB::table('maintain_rehab_plans')->where('Section_Id', "$Session_Section_Id")->get();

        if($maintan_rehab_plan->count() )
        {
            return view('Cost_Analysis.Maintain_and_Rehab_plan_view',compact('maintan_rehab_plan'));
        }
        else
        {
            $maintan_rehab_plan = null;
            return view('Cost_Analysis.Maintain_and_Rehab_plan_view',compact('maintan_rehab_plan'));
        }



    }

    public function new_rehabplan_pavement_work(Request $request)
    {
        $Session_Section_Id = Session::get('Section_Id');

        $New_Maintain_rehab_plan = new Maintain_rehab_plan();
        $New_Maintain_rehab_plan->Section_Id = $Session_Section_Id ;
        $New_Maintain_rehab_plan->Type = 'Pavement_work';
        $New_Maintain_rehab_plan->Name = $request->pavement_work_new ;
        $New_Maintain_rehab_plan->unit = $request->pavement_work_new_unit;
        $New_Maintain_rehab_plan->save();

        return redirect('/Maintainance_and_Rehablitation_plan');
    }
    
    public function new_rehabplan_mantaince_type(Request $request)
    {
        $Session_Section_Id = Session::get('Section_Id');

        $New_Maintain_rehab_plan = new Maintain_rehab_plan();
        $New_Maintain_rehab_plan->Section_Id = $Session_Section_Id ;
        $New_Maintain_rehab_plan->Type = 'maintain_type';
        $New_Maintain_rehab_plan->Name = $request->maintance_type_new ;
        $New_Maintain_rehab_plan->save();

        return redirect('/Maintainance_and_Rehablitation_plan');
    }

    public function new_rehabplan_treatment_type(Request $request)
    {
        $Session_Section_Id = Session::get('Section_Id');

        $New_Maintain_rehab_plan = new Maintain_rehab_plan();
        $New_Maintain_rehab_plan->Section_Id = $Session_Section_Id ;
        $New_Maintain_rehab_plan->Type = 'treatment_type';
        $New_Maintain_rehab_plan->Name = $request->treatment_type_new ;
        $New_Maintain_rehab_plan->save();

        return redirect('/Maintainance_and_Rehablitation_plan');
    }

    public function reset_maintain_and_rehab_plan(Request $request)
    {
        $Session_Section_Id = Session::get('Section_Id');

         DB::table('maintain_rehab_plans')->where('Section_Id', "$Session_Section_Id")->delete();

        return redirect('/Maintainance_and_Rehablitation_plan');

    }
}
