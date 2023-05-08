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
        Schema::create(  'form', function (Blueprint $table) {
            $table->id();
            $table->string( 'full_name');

            $table->integer( 'roll');
            $table->string( 'email');
            $table->integer( 'student_id');
            $table->string( 'departmant');
            $table->string( 'semester');
            $table->string( 'gender');
            $table->string( 'address');
            $table->string( 'father_name');
            $table->string( 'mother_name');
            $table->string( 'country');
            $table->string( 'phone');
            $table->string( 'blood');

            $table->string( 'city');
            $table->json('language');
            $table->string('dob');
            $table->json('hobby');
            $table->text('file');
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
        Schema::dropIfExists( 'form');
    }
};
