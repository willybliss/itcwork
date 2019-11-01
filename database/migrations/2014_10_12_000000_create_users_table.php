<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id',101);
            $table->string('name',80);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('appraiser_id');
            $table->rememberToken();
            $table->timestamps();
            //DB::update("ALTER TABLE tests AUTO_INCREMENT = 7000;");
           // $table->foreign('department_id')->references('id')->on('departments');
           // $table->foreign('appraiser_id')->references('id')->on('appraisers');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
