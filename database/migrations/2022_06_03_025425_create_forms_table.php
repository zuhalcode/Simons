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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            // $table->string('birthday');
            // $table->string('birthplace');
            // $table->string('phone');
            // $table->string('address');
            // $table->string('province');
            // $table->string('city');
            // $table->string('type');
            // $table->string('religion');
            $table->string('gender');
            // $table->string('education');
            $table->string('job');
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
        Schema::dropIfExists('forms');
    }
};
