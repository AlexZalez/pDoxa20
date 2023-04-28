<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('CI');
            $table->string('name', 60);
            $table->string('lastname', 60);
            $table->bigInteger('area_id');
            $table->string('phone', 20);
            $table->string('home_phone', 20);
            $table->string('email', 100);
            $table->string('adress');
            $table->bigInteger('state_id');
            $table->bigInteger('municipy_id');            
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
        Schema::dropIfExists('teachers');
    }
};
