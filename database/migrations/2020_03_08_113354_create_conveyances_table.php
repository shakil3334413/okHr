<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveyancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conveyances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->text('subject');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('transport')->nullable();
            $table->double('amount');
            $table->decimal('fromLat')->nullable();
            $table->decimal('fromLong')->nullable();
            $table->decimal('toLat')->nullable();
            $table->decimal('toLong')->nullable();
            $table->string('distance')->nullable();
            $table->date('billDate');
            $table->integer('status');
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
        Schema::dropIfExists('conveyances');
    }
}
