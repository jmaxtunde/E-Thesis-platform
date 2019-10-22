<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title');
            $table->String('number_page');
            $table->String('co-supervisor')->default('');
            $table->String('degree');
            $table->longText('abstract');
            $table->String('publishedDate');
            $table->String('coverPage');
            $table->Integer('numberLike')->default(0);
            $table->Integer('numberView')->default(0);
            $table->string('statut')->default('Desactive');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
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
        Schema::dropIfExists('theses');
    }
}
