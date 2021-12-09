<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Expense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EXPENSE', function (Blueprint $table) {
            $table->increments('ID');
            $table->dateTime('DUEDATE');
            $table->dateTime('PAYDAY')->nullable();
            $table->boolean('PAIDOUT');
            $table->integer('NUMBERINSTALLMENTS');
            $table->double('VALUE', 8, 2);
            $table->unsignedInteger('IDTYPEEXPENSE')->nullable();
            $table->unsignedInteger('IDTYPEPAYMENT')->nullable();

            $table->foreign('IDTYPEEXPENSE')->references('ID')->on('TYPEEXPENSE');
            $table->foreign('IDTYPEPAYMENT')->references('ID')->on('TYPEPAYMENT');
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
