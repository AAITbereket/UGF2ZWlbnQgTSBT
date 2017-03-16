<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintain_rehab_plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Section_Cost_Analysis;

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

    public function show_Treatment_Recommendation()
    {


        if (! Auth::check()) {return redirect('/');}

        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        if(! Session::has('Session_Inspection_Id') )
        {
            return redirect('/add_condition_index');
        }

        $Session_Section_Id = Session::get('Section_Id');

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Session_Section_Id")->get();

        $Session_Inspection_Id = Session::get('Session_Inspection_Id');

        $Session_Inspection_Date = Session::get('Session_Inspection_Date');

        $condition_indices = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->get();

        $Quantities = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->pluck('Quantity');

        $Quantities_sum = array_sum($Quantities->toArray());

        if($condition_indices->count() )
        {
            $condition_indices_ = $condition_indices;
        }
        else{
            return redirect('/add_condition_index');
        }

        if($Pavement_section->count() )
        {
            $Pavement_section_ = $Pavement_section[0];
//            echo $condition_indices_;
            return view('Cost_Analysis.Treatment_Recommendation_view', compact('Quantities_sum' ,'Pavement_section_','condition_indices_','Session_Inspection_Date'));
        }
        else{
            return redirect('/add_section');
        }

    }

    public function Cost_Analysis_input_view()
    {

        if (! Auth::check()) {return redirect('/');}

        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        if(! Session::has('Session_Inspection_Id') )
        {
            return redirect('/add_condition_index');
        }

        $Session_Section_Id = Session::get('Section_Id');

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Session_Section_Id")->get();

        $Session_Inspection_Id = Session::get('Session_Inspection_Id');

        $Session_Inspection_Date = Session::get('Session_Inspection_Date');

        $condition_indices = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->get();

        $Quantities = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->pluck('Quantity');

        $Quantities_sum = array_sum($Quantities->toArray());

        if($condition_indices->count() )
        {
            $condition_indices_ = $condition_indices;
        }
        else{
            return redirect('/add_condition_index');
        }

        if($Pavement_section->count() )
        {
            $Pavement_section_ = $Pavement_section[0];
            return view('Cost_Analysis.Cost_Analysis_input_view', compact('Quantities_sum' ,'Pavement_section_','condition_indices_','Session_Inspection_Date'));
        }
        else{
            return redirect('/add_section');
        }

    }

    public function show_rehab_alternatives()
    {

        if (! Auth::check()) {return redirect('/');}

        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        if(! Session::has('Session_Inspection_Id') )
        {
            return redirect('/add_condition_index');
        }

        $Session_Section_Id = Session::get('Section_Id');

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Session_Section_Id")->get();

        $Session_Inspection_Id = Session::get('Session_Inspection_Id');

        $Session_Inspection_Date = Session::get('Session_Inspection_Date');

        $condition_indices = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->get();

        $Quantities = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->pluck('Quantity');

        $Quantities_sum = array_sum($Quantities->toArray());

        if($condition_indices->count() )
        {
            $condition_indices_ = $condition_indices;
        }
        else{
            return redirect('/add_condition_index');
        }

        $Section_Cost_Analysis = Section_Cost_Analysis::where('Section_Id',$Session_Section_Id)->get();

        if(! $Section_Cost_Analysis->count())
        {
            return redirect('/Cost_Analysis_input_view');
        }
        
        if($Pavement_section->count() )
        {
            $Pavement_section_ = $Pavement_section[0];
            return view('Cost_Analysis.Rehabilitation_alternatives_view', compact('Quantities_sum' ,'Pavement_section_','Session_Inspection_Date'));
        }
        else{
            return redirect('/add_section');
        }

    }

    public function show_Life_Cycle_Cost_Analysis()
    {

        if (! Auth::check()) {return redirect('/');}

        if(! Session::has('Section_Id') )
        {
            return redirect('/dashboard');
        }

        if(! Session::has('Session_Inspection_Id') )
        {
            return redirect('/add_condition_index');
        }

        $Session_Section_Id = Session::get('Section_Id');

        $Pavement_section = DB::table('pavement_sections')->where('Section_Id', "$Session_Section_Id")->get();

        $Session_Inspection_Id = Session::get('Session_Inspection_Id');

        $Session_Inspection_Date = Session::get('Session_Inspection_Date');

        $condition_indices = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->get();

        $Quantities = DB::table('section_condition_indices')->where('Section_Id', "$Session_Section_Id")->where('Inspection_Id', "$Session_Inspection_Id")->pluck('Quantity');

        $Quantities_sum = array_sum($Quantities->toArray());

        $Section_Cost_Analysis = Section_Cost_Analysis::where('Section_Id',$Session_Section_Id)->get();

        if(! $Section_Cost_Analysis->count())
        {
            return redirect('/Cost_Analysis_input_view');
        }

        $Section_Cost_Analysis = $Section_Cost_Analysis[0];
        $TotalMaintCost = $Section_Cost_Analysis->input_TotalMaintCost ;
        $Totalcostrehab = $Section_Cost_Analysis->input_Totalcostrehab ;
        $Alternative = $Section_Cost_Analysis->Alternative;

        if($condition_indices->count() )
        {
            $condition_indices_ = $condition_indices;
        }
        else{
            return redirect('/add_condition_index');
        }

        if($Pavement_section->count() )
        {
            $Pavement_section_ = $Pavement_section[0];
            return view('Cost_Analysis.Life_cycle_cost_analysis_view', compact( 'Alternative' , 'Totalcostrehab' ,'TotalMaintCost' ,'Section_Cost_Analysis' , 'Quantities_sum' ,'Pavement_section_','Session_Inspection_Date'));
        }
        else{
            return redirect('/add_section');
        }
    }
    
    public function input_cost_analysis(Request $request)
    {
        $Session_Section_Id = Session::get('Section_Id');

        $Section_Cost_Analysis = Section_Cost_Analysis::where('Section_Id',$Session_Section_Id)->get();

        if($Section_Cost_Analysis->count())
        {
            $Section_Cost_Analysis = $Section_Cost_Analysis[0];
            $Section_Cost_Analysis->Worked_date = $request->worked_date;
            $Section_Cost_Analysis->Initial_Construction_Cost = $request->Intial_constru_cost;
            $Section_Cost_Analysis->Salvage_value = $request->salvage_value;
            $Section_Cost_Analysis->Discount_Rate = $request->discount_rate ;
            $Section_Cost_Analysis->Analysis_Period = $request->analysis_period;
            $Section_Cost_Analysis->save();
        }
        else
        {
            $New_Section_Cost_Analysis = new Section_Cost_Analysis();
            $New_Section_Cost_Analysis->Section_Id = $Session_Section_Id;
            $New_Section_Cost_Analysis->Worked_date = $request->worked_date;
            $New_Section_Cost_Analysis->Initial_Construction_Cost = $request->Intial_constru_cost;
            $New_Section_Cost_Analysis->Salvage_value = $request->salvage_value;
            $New_Section_Cost_Analysis->Discount_Rate = $request->discount_rate ;
            $New_Section_Cost_Analysis->Analysis_Period = $request->analysis_period;
            $New_Section_Cost_Analysis->save();
        }

        return redirect('/rehablitation_alternatives');

    }

    public function Save_Cost(Request $request)
    {
       $Session_Section_Id = Session::get('Section_Id');

        $Section_Cost_Analysis = Section_Cost_Analysis::where('Section_Id',$Session_Section_Id)->get();

        if(! $Section_Cost_Analysis->count())
        {
            return redirect('/Cost_Analysis_input_view');
        }

        $Section_Cost_Analysis = $Section_Cost_Analysis[0];

        $Section_Cost_Analysis->input_TotalMaintCost = $request->input_TotalMaintCost;
        $Section_Cost_Analysis->input_Totalcostrehab = $request->input_Totalcostrehab;
        $Section_Cost_Analysis->Alternative = $request->Alternative;
        $Section_Cost_Analysis->save();

        return redirect('/Life_Cycle_Cost_Analysis');
        
    }
}
