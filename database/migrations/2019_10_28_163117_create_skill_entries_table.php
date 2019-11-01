<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('rating_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appraiser_id');

            //$table->foreign('skill_id')->references('id')->on('skills');
           // $table->foreign('rating_id')->references('id')->on('ratings');
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('appraiser_id')->references('id')->on('appraisers');
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
        Schema::dropIfExists('skill_entries');
    }
}
