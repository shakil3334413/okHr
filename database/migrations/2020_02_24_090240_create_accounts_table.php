<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->boolean('gross_salary');
            $table->double('basic_salary');
            $table->double('house_rent')->nullable();
            $table->double('medical')->nullable();
            $table->double('festival_bonus');
            $table->boolean('overtime_scope');
            $table->double('overtime_rate')->nullable();
            $table->double('performance_bonus')->nullable();
            $table->string('incriment_type');
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
        Schema::dropIfExists('accounts');
    }
}
