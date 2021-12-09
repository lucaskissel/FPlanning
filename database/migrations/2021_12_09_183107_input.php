<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Input extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INPUT', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('SOURCE');
            $table->double('VALUE', 8, 2);
            $table->dateTime('INPUTDATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
