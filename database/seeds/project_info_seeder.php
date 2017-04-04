<?php

use Illuminate\Database\Seeder;

class project_info_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default values 

        DB::table('project_infos')->insert([
         'Project_Id' => '0',    
        'Created_By' => '',
        'Client_Name'=> '',
        'Project_Name' => '',
        'Company_Name' => '',
        'Company_Logo_URL' => 'homepage__/img/ur_logo.png',
        'Inspect_By' => '',
        'Checker' => '',
        'Supervisior' =>'',
        'Date' => '',
        'Issue_Number' => ''
        ]);
        
    }
}
