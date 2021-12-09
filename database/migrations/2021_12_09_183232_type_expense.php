<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeExpense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TYPEEXPENSE', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME');
            $table->string('DESCRIPTION');
            $table->boolean('INSTALLMENTS');
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
