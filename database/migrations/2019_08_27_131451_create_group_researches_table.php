<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_researches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('group_name');
            $table->String('enrollmentKey');
            $table->String('status');
            $table->String('endDate');
            $table->String('supervisor_Id');
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
        Schema::dropIfExists('group_researches');
    }
}
