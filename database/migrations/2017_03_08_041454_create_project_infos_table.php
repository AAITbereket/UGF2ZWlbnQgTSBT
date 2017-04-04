<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_infos', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Project_Id');
            $table->string('Created_By'); // user who created the project
            $table->string('Client_Name')->nullable();
            $table->string('Project_Name')->nullable();
            $table->string('Company_Name')->nullable();
            $table->text('Company_Logo_URL')->nullable();
            $table->string('Inspect_By')->nullable();
            $table->string('Checker')->nullable();
            $table->string('Supervisior')->nullable();
            $table->date('Date')->nullable();
            $table->string('Issue_Number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_infos');
    }
}
