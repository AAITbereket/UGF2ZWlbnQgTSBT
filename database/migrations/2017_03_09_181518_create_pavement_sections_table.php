<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePavementSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavement_sections', function (Blueprint $table) {
            $table->increments('Section_Id');
            $table->string('Section_Name');
            $table->string('Project_Id'); // user who created the project
            $table->string('From');
            $table->text('To');
            $table->string('Surface');
            $table->string('Length');
            $table->string('Carriage_width');
            $table->string('Street_type');
            $table->text('Direction');
            $table->string('Carriage_way_type');
            $table->string('Number_of_lane');
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
        Schema::dropIfExists('pavement_sections');
    }
}
