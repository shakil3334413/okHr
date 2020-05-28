<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('jobTitle');
            $table->longText('jobDescription');
            $table->longText('jobRequirement');
            $table->integer('jobLocation_id');
            $table->integer('jobCategory_id');
            $table->text('skills');
            $table->integer('totalPositions');
            $table->date('startDate');
            $table->date('endDate');
            $table->boolean('status');
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
        Schema::dropIfExists('jobs');
    }
}
