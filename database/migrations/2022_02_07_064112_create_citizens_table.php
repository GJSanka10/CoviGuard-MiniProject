<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->string('nic')->primary();
            $table->string('fullname');
            $table->date('dob');
            $table->string('district');
            $table->integer('contact')->unique();
            $table->string('email')->unique();
            $table->char('gender');
            $table->string('address');
            $table->string('password1');
            $table->string('password2');

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
        Schema::dropIfExists('citizens');
    }
}
